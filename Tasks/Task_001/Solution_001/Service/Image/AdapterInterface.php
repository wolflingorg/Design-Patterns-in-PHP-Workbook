<?php
namespace Task_001\Solution_001\Service\Image;

use Task_001\Solution_001\Entity\ImageSize;

interface AdapterInterface
{
    public function getSize(string $fileName) :ImageSize;
}