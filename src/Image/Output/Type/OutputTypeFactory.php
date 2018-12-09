<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Output\Type;

class OutputTypeFactory
{
    public function createJpeg()
    {
        return new Jpeg();
    }

    public function createPng()
    {
        return new Png();
    }
}