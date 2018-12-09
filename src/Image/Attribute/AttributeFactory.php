<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Attribute;

use Skabas\Baldr\Image\Source\File;

class AttributeFactory
{
    /**
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return Color
     */
    public function createColor(int $red, int $green, int $blue, int $alpha = 0) : Color
    {
        return new Color($red, $green, $blue, $alpha);
    }

    /**
     * @param File $file
     * @return Font
     */
    public function createFont(File $file) : Font
    {
        return new Font($file);
    }

    /**
     * @param int $x
     * @param int $y
     * @return Position
     */
    public function createPosition(int $x, int $y) : Position
    {
        return new Position($x, $y);
    }
}