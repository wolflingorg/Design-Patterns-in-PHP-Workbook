<?php
namespace Task_001\Solution_001\Tests;

use Task_001\Solution_001\Entity\ImageSize;
use Task_001\Solution_001\Service\Image\GdAdapter;
use Task_001\Solution_001\Service\ImageInfo\ImageInfoProxy;
use Task_001\Tests\BaseTestCase;

class ImageInfoTest extends BaseTestCase
{
    public function testImageInfo()
    {
        $imageProcessor = new GdAdapter();
        $imageInfo = new ImageInfoProxy($imageProcessor);

        foreach ($this->mockFiles as $file) {
            $fileName = $this->mocksPath . $file['name'];

            $mock = new ImageSize($file['width'], $file['height']);
            $result = $imageInfo->getSize($fileName);

            $this->assertEquals($mock, $result);
        }
    }
}