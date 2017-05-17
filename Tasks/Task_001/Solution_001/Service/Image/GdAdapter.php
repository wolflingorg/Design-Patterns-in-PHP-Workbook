<?php
namespace Task_001\Solution_001\Service\Image;

use Task_001\Solution_001\Entity\ImageSize;

class GdAdapter implements AdapterInterface
{
    public function getSize(string $fileName): ImageSize
    {
        if(!function_exists('getimagesize')) {
            throw new ImageException('GD is not installed');
        }

        if(!list($width, $height) = getimagesize($fileName)) {
            throw new ImageException('Wrong file');
        }

        return new ImageSize($width, $height);
    }
}