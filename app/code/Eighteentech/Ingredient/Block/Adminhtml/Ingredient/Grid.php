<?php
namespace Eighteentech\Ingredient\Block\Adminhtml\Ingredient;

/**
 * Adminhtml Ingredient pages grid
 */
class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Magentostudy\Ingredient\Model\ResourceModel\Ingredient\CollectionFactory
     */
    protected $_collectionFactory;

    /**
     * @var \Magentostudy\Ingredient\Model\Ingredient
     */
    protected $_ingredient;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Magentostudy\Ingredient\Model\Ingredient $ingredient
     * @param \Magentostudy\Ingredient\Model\ResourceModel\Ingredient\CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Eighteentech\Ingredient\Model\Ingredient $ingredient,
        \Eighteentech\Ingredient\Model\ResourceModel\Ingredient\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->_collectionFactory = $collectionFactory;
        $this->_ingredient = $ingredient;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('ingredientGrid');
        $this->setDefaultSort('ingredient_id');
        $this->setDefaultDir('DESC');
        $this->setUseAjax(true);
        $this->setSaveParametersInSession(true);
    }

    /**
     * Prepare collection
     *
     * @return \Magento\Backend\Block\Widget\Grid
     */
    protected function _prepareCollection()
    {
        $collection = $this->_collectionFactory->create();
        /* @var $collection \Magentostudy\Ingredient\Model\ResourceModel\Ingredient\Collection */
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * Prepare columns
     *
     * @return \Magento\Backend\Block\Widget\Grid\Extended
     */
    protected function _prepareColumns()
    {
        $this->addColumn('ingredient_id', [
            'header'    => __('ID'),
            'index'     => 'ingredient_id',
        ]);
        
        $this->addColumn('title', ['header' => __('Title'), 'index' => 'title']);
        $this->addColumn('image', 
        [
        'header' => __('Image'), 
        'index' => 'image',
        'renderer'  => '\Eighteentech\Ingredient\Block\Adminhtml\Ingredient\Grid\Renderer\Image',
        ]);
        
        $this->addColumn('is_active', ['header' => __('Active'), 'index' => 'is_active', 'type' => 'options',
 'options' =>['1' => __('Active'), '0' => __('Inactive')]]);
        
        $this->addColumn(
            'created_at',
            [
                'header' => __('Created'),
                'index' => 'created_at',
                'type' => 'datetime',
                'header_css_class' => 'col-date',
                'column_css_class' => 'col-date'
            ]
        );
        
        $this->addColumn(
            'action',
            [
                'header' => __('Edit'),
                'type' => 'action',
                'getter' => 'getId',
                'actions' => [
                    [
                        'caption' => __('Edit'),
                        'url' => [
                            'base' => '*/*/edit',
                            'params' => ['store' => $this->getRequest()->getParam('store')]
                        ],
                        'field' => 'ingredient_id'
                    ]
                ],
                'sortable' => false,
                'filter' => false,
                'header_css_class' => 'col-action',
                'column_css_class' => 'col-action'
            ]
        );

        return parent::_prepareColumns();
    }

    /**
     * Row click url
     *
     * @param \Magento\Framework\Object $row
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', ['ingredient_id' => $row->getId()]);
    }

    /**
     * Get grid url
     *
     * @return string
     */
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', ['_current' => true]);
    }
}
