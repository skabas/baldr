<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Component;

/**
 * Class ImageBuilderFactory
 * @package Skabas\Baldr
 */
class ImageBuilderFactory
{
    public function create()
    {
        return new ImageBuilder();
    }
}