<?php
namespace Task_001\Tests;

use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    protected $mockFiles;

    protected $mocksPath;

    public function setUp()
    {
        parent::setUp();

        $this->mocksPath = dirname(__FILE__, 1) . DIRECTORY_SEPARATOR . 'Mocks' . DIRECTORY_SEPARATOR;

        $this->mockFiles = [
            [
                'name' => 'bird.jpg',
                'width' => 960,
                'height' => 563
            ],
            [
                'name' => 'gulls_960_720.jpg',
                'width' => 960,
                'height' => 720
            ],
            [
                'name' => 'spring_bird_960_720.jpg',
                'width' => 960,
                'height' => 720
            ]
        ];
    }
}