<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Source;

/**
 * Class SourceFactory
 * @package Skabas\Baldr
 */
class SourceFactory
{
    /**
     * @param string $file
     * @return File
     */
    public function createFileSource(string $file)
    {
        return new File($file);
    }

    /**
     * @param string $url
     * @return Url
     */
    public function createUrlSource(string $url)
    {
        return new Url($url);
    }

    /**
     * @param string $string
     * @return DataString
     */
    public function createStringSource(string $string)
    {
        return new DataString($string);
    }
}