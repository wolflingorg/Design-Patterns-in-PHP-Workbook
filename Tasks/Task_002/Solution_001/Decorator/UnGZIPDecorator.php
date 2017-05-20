<?php
namespace Task_002\Solution_001\Decorator;

class UnGZIPDecorator extends ObjectReaderDecorator
{
    protected function readData(string $filePath): string
    {
        return gzuncompress($this->objectReader->readData($filePath));
    }
}