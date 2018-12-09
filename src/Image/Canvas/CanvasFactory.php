<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Canvas;

use Skabas\Baldr\Image\Source\SourceInterface;

/**
 * Class CanvasFactory
 * @package Skabas\Baldr
 */
class CanvasFactory
{
    /**
     * @param SourceInterface $source
     * @return CanvasInterface
     */
    public function createFromSource(SourceInterface $source) : CanvasInterface
    {
        return new FromSource($source);
    }

    /**
     * @param int $width
     * @param int $height
     * @return CanvasInterface
     */
    public function createFromScratch(int $width, int $height) : CanvasInterface
    {
        return new TrueColor($width, $height);
    }
}