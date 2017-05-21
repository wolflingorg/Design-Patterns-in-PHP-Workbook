<?php
namespace Task_003\Solution_001\Tests;

use PHPUnit\Framework\TestCase;
use Task_003\Solution_001\App\App;
use Task_003\Solution_001\CacheStrategy\InMemoryCacheStrategy;
use Task_003\Solution_001\Decorator\CacheDecorator;

class AppTest extends TestCase
{
    const SOME_REQUEST = 'Hello World';

    public function testAppWithoutCaching()
    {
        $app = App::getInstance();
        $expected = 'Your request is: ' . self::SOME_REQUEST;

        $this->assertEquals($expected, $app->handleRequest(self::SOME_REQUEST));
    }

    public function testAppWithCaching()
    {
        $app = App::getInstance();
        $cacheStrategy = new InMemoryCacheStrategy();
        $app = new CacheDecorator($app, $cacheStrategy);
        $expected = 'Your request is: ' . self::SOME_REQUEST . ' (from a cache)';

        // set to cache
        $this->assertEquals($expected, $app->handleRequest(self::SOME_REQUEST));

        // get from cache
        $this->assertEquals($expected, $app->handleRequest(self::SOME_REQUEST));
    }
}