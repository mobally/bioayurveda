<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */

namespace Amasty\Xlanding\Model\Export;

class ConvertToCsv extends \Magento\Ui\Model\Export\ConvertToCsv
{
    public function getCsvFile()
    {
        $component = $this->filter->getComponent();

        $name = microtime(true);
        $file = 'export/' . $component->getName() . $name . '.csv';

        $searchResult = $component->getContext()->getDataProvider()->getSearchResult();

        $fields = $this->metadataProvider->getMainTableColumns($searchResult);

        $this->directory->create('export');
        $stream = $this->directory->openFile($file, 'w+');
        $stream->lock();
        $stream->writeCsv($this->metadataProvider->getMainTableHeaders($searchResult));

        foreach ($searchResult->getItems() as $document) {
            $stream->writeCsv($this->metadataProvider->getRowData($document, $fields, []));
        }
        $stream->unlock();
        $stream->close();

        return [
            'type' => 'filename',
            'value' => $file,
            'rm' => true  // can delete file after use
        ];
    }
}
