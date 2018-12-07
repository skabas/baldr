<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Attribute;

use Skabas\Baldr\Image\Source\File;

/**
 * Class Font
 * @package Skabas\Baldr
 */
class Font
{
    /** @var File $file */
    private $file;
    /** @var string $id */
    private $id;

    /**
     * @param string $id
     * @param File $file
     */
    public function __construct(File $file)
    {
        $this->file = $file;
        $this->id = hash_file('sha256', $file);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }
}