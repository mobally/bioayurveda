<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Amp
 */


declare(strict_types=1);

namespace Amasty\Amp\Plugin\Framework\App\Http;

use Amasty\Amp\Model\ConfigProvider;
use Amasty\Amp\Model\Detection\MobileDetect;
use Magento\Framework\App\Http\Context as HttpContext;

class ContextPlugin
{
    const AMP_HTTP_CONTEXT_KEY = 'amasty_amp_mobile_device';
    const AMP_HTTP_CONTEXT_VALUE = 'amp';

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * @var MobileDetect
     */
    private $mobileDetect;

    public function __construct(
        ConfigProvider $configProvider,
        MobileDetect $mobileDetect
    ) {
        $this->configProvider = $configProvider;
        $this->mobileDetect = $mobileDetect;
    }

    /**
     * @param HttpContext $subject
     */
    public function beforeGetVaryString(HttpContext $subject)
    {
        if ($this->configProvider->isRedirectMobile() && $this->mobileDetect->isMobile()) {
            $subject->setValue(
                self::AMP_HTTP_CONTEXT_KEY,
                self::AMP_HTTP_CONTEXT_VALUE,
                ''
            );
        }
    }
}
