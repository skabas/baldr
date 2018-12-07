<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Source;

/**
 * Interface SourceInterface
 * @package Skabas\Baldr
 */
interface SourceInterface
{
    const TYPE_STRING = 1;
    const TYPE_URL = 2;
    const TYPE_FILE_PATH = 3;

    /**
     * @return int
     */
    public function getType() : int;

    /**
     * @return string
     */
    public function __toString() : string;
}