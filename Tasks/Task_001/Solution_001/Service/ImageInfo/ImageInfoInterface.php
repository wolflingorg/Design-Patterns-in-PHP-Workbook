<?php
namespace Task_001\Solution_001\Service\ImageInfo;

use Task_001\Solution_001\Entity\ImageSize;

interface ImageInfoInterface
{
    public function getSize(string $filePath) :ImageSize;
}