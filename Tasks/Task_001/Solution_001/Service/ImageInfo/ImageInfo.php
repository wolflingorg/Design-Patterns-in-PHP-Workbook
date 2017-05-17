<?php
namespace Task_001\Solution_001\Service\ImageInfo;

use Task_001\Solution_001\Entity\ImageSize;
use Task_001\Solution_001\Service\Image\AdapterInterface;

class ImageInfo implements ImageInfoInterface
{
    /**
     * @var AdapterInterface
     */
    private $imageProcessor;

    public function __construct(AdapterInterface $imageProcessor)
    {
        $this->imageProcessor = $imageProcessor;
    }

    public function getSize(string $filePath): ImageSize
    {
        return $this->imageProcessor->getSize($filePath);
    }
}