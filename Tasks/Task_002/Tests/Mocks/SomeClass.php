<?php
namespace Task_002\Tests\Mocks;

class SomeClass
{
    private $value1;

    private $value2;

    public function __construct(string $value1, string $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    /**
     * @return string
     */
    public function getValue1(): string
    {
        return $this->value1;
    }

    /**
     * @return string
     */
    public function getValue2(): string
    {
        return $this->value2;
    }
}