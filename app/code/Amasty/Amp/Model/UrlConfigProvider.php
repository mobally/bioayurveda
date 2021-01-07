<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Amp
 */


namespace Amasty\Amp\Model;

use Magento\Framework\Data\CollectionDataSourceInterface;

class UrlConfigProvider implements CollectionDataSourceInterface
{
    const AMP = 'amp';

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * UrlConfigProvider constructor.
     *
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param ConfigProvider $configProvider
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        ConfigProvider $configProvider
    ) {
        $this->storeManager = $storeManager;
        $this->configProvider = $configProvider;
    }

    /**
     * @param $response
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function addAmpHeaders($response)
    {
        $response
            ->setHeader(
                'Access-Control-Allow-Origin',
                $this->getAmpCacheUrl()
            )
            ->setHeader(
                'AMP-Access-Control-Allow-Source-Origin',
                rtrim($this->storeManager->getStore()->getBaseUrl(), '/')
            )
            ->setHeader(
                'Access-Control-Allow-Headers',
                'Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token',
                true
            )
            ->setHeader('Access-Control-Expose-Headers', 'AMP-Access-Control-Allow-Source-Origin', true)
            ->setHeader('Access-Control-Allow-Methods', 'POST, GET, OPTIONS', true)
            ->setHeader('Access-Control-Allow-Credentials', 'true', true);
    }

    /**
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getAmpCacheUrl()
    {
        $baseUrl = $this->storeManager->getStore()->getBaseUrl();
        // @codingStandardsIgnoreLine
        $urlData = parse_url($baseUrl);

        return sprintf(
            '%s://%s.cdn.ampproject.org',
            $urlData['scheme'],
            str_replace('.', '-', $urlData['host'])
        );
    }

    /**
     * @param $redirectUrl
     * @param $response
     */
    public function setRedirect($redirectUrl, $response)
    {
        $response->setHeader('AMP-Redirect-To', $redirectUrl);
        $response->setHeader('Access-Control-Expose-Headers', 'AMP-Redirect-To, Another-Header, And-Some-More');
    }

    /**
     * @param string $url
     * @return string
     */
    public function convertToAmpUrl($url)
    {
        $baseUrl = $this->storeManager->getStore()->getBaseUrl();
        $path = str_replace($baseUrl, '', $url);

        return $baseUrl . self::AMP . '/' . $path;
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function modifyHomeUrl(string $url)
    {
        if ($this->configProvider->isHomeEnabled()) {
            $url = $this->convertToAmpUrl($url);
        }

        return $url;
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function modifyProductPageUrl(string $url)
    {
        if ($this->configProvider->isProductEnabled()) {
            $url = $this->convertToAmpUrl($url);
        }

        return $url;
    }
}
