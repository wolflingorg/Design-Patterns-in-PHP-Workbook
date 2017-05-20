<?php
namespace Task_002\Tests;

use PHPUnit\Framework\TestCase;
use Task_002\Tests\Mocks\SomeClass;

class BaseTestCase extends TestCase
{
    protected $mockFiles;

    protected $mocksFilesPath;

    protected $mockObject;

    public function setUp()
    {
        parent::setUp();

        $this->mockObject = new SomeClass('Hello', 'World');
        $this->mocksFilesPath = dirname(__FILE__, 1) . DIRECTORY_SEPARATOR . 'Mocks' . DIRECTORY_SEPARATOR . 'Files' . DIRECTORY_SEPARATOR;
        $this->mockFiles = [
            'simple_serialized.obj',
            'serialized_and_base64_encoded.obj',
            'serialized_and_gzipped.obj',
            'serialized_and_base64_encoded_and_gzipped.obj',
        ];
    }
}