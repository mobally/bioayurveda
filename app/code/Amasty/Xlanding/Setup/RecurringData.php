<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */


namespace Amasty\Xlanding\Setup;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Module\Manager;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class RecurringData implements InstallDataInterface
{
    /**
     * @var Manager
     */
    private $moduleManager;

    public function __construct(
        Manager $moduleManager
    ) {
        $this->moduleManager = $moduleManager;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (!$this->moduleManager->isEnabled('Amasty_VisualMerchCore')) {
            throw new LocalizedException(
                __("\nWARNING: Amasty Landing Pages will not function without "
                    . "Visual Merchandiser Core system package installed\n"
                    . "Please, run the following command in the SSH: composer require amasty/visual-merch-core\n")
            );
        }
    }
}
