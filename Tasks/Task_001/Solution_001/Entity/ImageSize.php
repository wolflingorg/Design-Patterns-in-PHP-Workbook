<?php
namespace Task_001\Solution_001\Entity;

class ImageSize
{
    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth() :int
    {
        return $this->height;
    }
}