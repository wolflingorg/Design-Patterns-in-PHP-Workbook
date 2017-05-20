<?php
namespace Task_002\Solution_001\Tests;

use Task_002\Solution_001\ObjectReader\SimpleObjectReader;
use Task_002\Solution_001\Decorator\UnBase64Decorator;
use Task_002\Solution_001\Decorator\UnGZIPDecorator;
use Task_002\Tests\BaseTestCase;

class ObjectReaderTest extends BaseTestCase
{
    public function testSimpleObjectReader()
    {
        $objectReader = new SimpleObjectReader();
        $this->assertEquals($this->mockObject, $objectReader->getObject($this->mocksFilesPath . $this->mockFiles[0]));
    }

    public function testBase64EncodedObjectReader()
    {
        $objectReader = new SimpleObjectReader();
        $decorator = new UnBase64Decorator($objectReader);
        $this->assertEquals($this->mockObject, $decorator->getObject($this->mocksFilesPath . $this->mockFiles[1]));
    }

    public function testGzippedObjectReader()
    {
        $objectReader = new SimpleObjectReader();
        $decorator = new UnGZIPDecorator($objectReader);
        $this->assertEquals($this->mockObject, $decorator->getObject($this->mocksFilesPath . $this->mockFiles[2]));
    }

    public function testGzippedAndBase64EncodedObjectReader()
    {
        $objectReader = new SimpleObjectReader();
        $decorator = new UnBase64Decorator(new UnGZIPDecorator($objectReader));
        $this->assertEquals($this->mockObject, $decorator->getObject($this->mocksFilesPath . $this->mockFiles[3]));
    }
}