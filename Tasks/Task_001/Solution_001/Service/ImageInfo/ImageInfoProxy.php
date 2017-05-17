<?php
namespace Task_001\Solution_001\Service\ImageInfo;

use Task_001\Solution_001\Entity\ImageSize;

class ImageInfoProxy extends ImageInfo
{
    public function getSize(string $filePath): ImageSize
    {
        if(preg_match('~_(?P<W>\d+)_(?P<H>\d+)\.jpg~i', $filePath, $matches)) {
            return new ImageSize($matches['W'], $matches['H']);
        }

        return parent::getSize($filePath);
    }
}