<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Amp
 */


namespace Amasty\Amp\Test\Unit\Controller;

use Amasty\Amp\Test\Unit\Traits;
use Amasty\Amp\Controller\Router;

/**
 * Class RouterTest
 *
 * @see Router
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * phpcs:ignoreFile
 */
class RouterTest extends \PHPUnit\Framework\TestCase
{
    use Traits\ObjectManagerTrait;
    use Traits\ReflectionTrait;

    /**
     * @covers Router::match
     * @dataProvider matchDataProvider
     * @throws \ReflectionException
     */
    public function testMatch($identifier, $result)
    {
        $configProvider = $this->createMock(\Amasty\Amp\Model\ConfigProvider::class);
        $request = $this->getObjectManager()->getObject(\Magento\Framework\App\Request\Http::class);
        $controller = $this->getObjectManager()->getObject(Router::class, ['config' => $configProvider]);

        $request->setPathInfo($identifier);
        $controller->match($request);

        $this->assertEquals($result, $request->getPathInfo());
    }

    /**
     * Data provider for match test
     * @return array
     */
    public function matchDataProvider()
    {
        return [['test', 'test'], ['test/amp/test', 'test/test']];
    }
}
