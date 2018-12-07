<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Attribute;

/**
 * Class Position
 * @package Skabas\Baldr
 */
class Color
{
    /** @var int $id */
    private $id;
    /** @var int $y */
    private $red;
    /** @var $green */
    private $green;
    /** @var $blue */
    private $blue;
    /** @var $alpha */
    private $alpha;

    public function __construct(int $red, int $green, int $blue, int $alpha = 0)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
        $this->alpha = $alpha;
    }

    /**
     * @param resource $resource
     * @return int
     */
    public function getId($resource)
    {
        if (! $this->id) {
            $this->id = $this->alpha ? $this->allocateColorAlpha($resource) : $this->allocateColor($resource);
        }

        return $this->id;
    }

    /**
     * @param resource $resource
     * @return int
     */
    public function allocateColor($resource)
    {
        if (! is_resource($resource)) {
            throw new \InvalidArgumentException('Invalid resource');
        }

        if (imagecolorstotal($resource) == 255) {
            return imagecolorclosest($resource, $this->red, $this->green, $this->blue);
        }

        return imagecolorallocate($resource, $this->red, $this->green, $this->blue);
    }

    /**
     * @param resource $resource
     * @return int
     */
    public function allocateColorAlpha($resource)
    {
        if (! is_resource($resource)) {
            throw new \InvalidArgumentException('Invalid resource');
        }

        if (imagecolorstotal($resource) == 255) {
            return imagecolorallocatealpha($resource, $this->red, $this->green, $this->blue, $this->alpha);
        }

        return imagecolorallocatealpha($resource, $this->red, $this->green, $this->blue, $this->alpha);
    }
}