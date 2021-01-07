<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */


namespace Amasty\Xlanding\Model\Rule\Condition;

class AbstractCondition extends \Magento\CatalogRule\Model\Rule\Condition\Product
{
    protected $_indexKey;

    protected $_condition;

    private $value;

    protected function _getSelectOperator($field, $operator, $value)
    {
        switch ($operator) {
            case '!=':
            case '>=':
            case '<=':
            case '>':
            case '<':
                $selectOperator = sprintf('%s?', $operator);
                break;
            case '{}':
            case '!{}':
                if (preg_match('/^.*(category_id)$/', $field) && is_array($value)) {
                    $selectOperator = ' IN (?)';
                } else {
                    if (is_array($value)) {
                        $selectOperator = ' IN (?)';
                    } else {
                        $selectOperator = ' LIKE ?';
                        $value          = '%' . $value . '%';
                    }
                }
                if (substr($operator, 0, 1) == '!') {
                    $selectOperator = ' NOT' . $selectOperator;
                }
                break;
            case '()':
                if (!is_array($value)) {
                    $value = $value = explode(', ', $value);
                }

                $selectOperator = ' IN(?)';
                break;
            case '!()':
                if (!is_array($value)) {
                    $value = $value = explode(', ', $value);
                }

                $selectOperator = ' NOT IN(?)';
                break;
            default:
                $selectOperator = '=?';
                break;
        }

        $this->value = $value;
        return $selectOperator;
    }

    public function getOperatorCondition($field, $operator, $value)
    {
        $result = ' true ';
        $adapter = $this->_productResource->getConnection();

        $this->value = $value;
        $selectOperator = $this->_getSelectOperator($field, $operator, $value);

        $field = $adapter->quoteIdentifier($field);
        if (is_array($this->value) && in_array($operator, ['==', '!=', '>=', '<=', '>', '<'])) {
            $results = [];
            foreach ($this->value as $v) {
                $results[] = $adapter->quoteInto("{$field}{$selectOperator}", $v);
            }
            $result = implode(' AND ', $results);
        } else {
            if ($this->getAttributeObject()->getFrontendInput() == 'multiselect' &&
                in_array($operator, ['()', '!()', '{}', '!{}', '[]', '![]'])) {

                if (is_array($this->value)) {
                    $resultArr = [];

                    foreach ($this->value as $option) {
                        $condition = in_array($operator, ['()', '{}', '[]']) ? ' <> 0' : ' = 0';

                        $resultArr[] = $adapter->quoteInto("FIND_IN_SET(?, {$field}) {$condition}", $option);
                    }

                    if (count($resultArr) > 0) {
                        if (in_array($operator, ['()', '!{}', '![]'])) {
                            $result = "(" . implode(' OR ', $resultArr) . ")";
                        } else {
                            $result = "(" . implode(' AND ', $resultArr) . ")";
                        }
                    }
                }
            } else {
                $result = $adapter->quoteInto("{$field}{$selectOperator}", $this->value);
            }
        }
        return $result;
    }

    protected function _getAttributeCode()
    {
        return '';
    }

    protected function _getAlias()
    {
        if (!$this->_indexKey) {
            $this->_indexKey = sprintf(
                'amasty_xlanding_idx%s',
                str_replace('-', '', substr((string)$this->getId(), 0, -3))
            );
        }

        return $this->_getAttributeCode() . '_' . $this->_indexKey;
    }

    public function collectConditionSql()
    {
        return $this->_condition;
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return (string)parent::getAttribute();
    }
}
