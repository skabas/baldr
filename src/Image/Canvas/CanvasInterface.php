<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Canvas;

/**
 * Interface CanvasInterface
 * @package Skabas\Baldr
 */
interface CanvasInterface
{
    /**
     * @return resource
     */
    public function getResource();

    /**
     * @return int
     */
    public function getWidth() : int;

    /**
     * @return int
     */
    public function getHeight() : int;
}