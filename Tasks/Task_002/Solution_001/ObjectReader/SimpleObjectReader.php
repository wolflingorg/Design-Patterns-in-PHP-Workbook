<?php
namespace Task_002\Solution_001\ObjectReader;

class SimpleObjectReader extends AbstractObjectReader
{
    protected function readData(string $filePath): string
    {
        return file_get_contents($filePath);
    }
}