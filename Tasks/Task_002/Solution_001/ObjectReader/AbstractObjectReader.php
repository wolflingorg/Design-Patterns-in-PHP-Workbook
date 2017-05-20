<?php
namespace Task_002\Solution_001\ObjectReader;

use Task_002\Tests\Mocks\SomeClass;

abstract class AbstractObjectReader
{
    public function getObject(string $filePath) :SomeClass {
        return unserialize($this->readData($filePath));
    }

    abstract protected function readData(string $filePath) :string;
}