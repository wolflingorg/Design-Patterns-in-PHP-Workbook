<?php
namespace Task_002\Solution_001\Decorator;

class UnBase64Decorator extends ObjectReaderDecorator
{
    protected function readData(string $filePath): string
    {
        return base64_decode($this->objectReader->readData($filePath));
    }
}