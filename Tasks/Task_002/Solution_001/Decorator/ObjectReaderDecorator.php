<?php
namespace Task_002\Solution_001\Decorator;

use Task_002\Solution_001\ObjectReader\AbstractObjectReader;

abstract class ObjectReaderDecorator extends AbstractObjectReader
{
    protected $objectReader;

    public function __construct(AbstractObjectReader $objectReader)
    {
        $this->objectReader = $objectReader;
    }
}