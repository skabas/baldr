<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Component;

use Skabas\Baldr\Image\Attribute\Position;
use Skabas\Baldr\Image\Attribute\Size;

/**
 * Class Image
 * @package Skabas\Baldr
 */
class Image implements ComponentInterface
{
    const DEFAULT_FONT_SIZE = 18;
    const DEFAULT_ANGLE = 0;

    /** @var resource $resource */
    private $resource;
    /** @var Position $position */
    private $position;
    /** @var Size|null $size */
    private $size;

    /**
     * @param resource $resource
     * @param Position $position
     * @param Size|null $size
     */
    public function __construct(
        $resource,
        Position $position,
        ?Size $size = null
    ){
        if (! is_resource($resource)) {
            throw new \InvalidArgumentException(
                sprintf('Expected resource, got %s.', gettype($resource))
            );
        }
        $this->resource = $resource;
        $this->position = $position;
        $this->size = $size;
    }

    /**
     * @param resource $image
     */
    public function attachTo($image)
    {
        $resource = $this->size
            ? imagescale($this->resource, $this->size->getWidth(), $this->size->getHeight())
            : $this->resource;

        @imagecopy(
            $image,
            $resource,
            $this->position->getX(),
            $this->position->getY(),
            0,
            0,
            $this->size ? $this->size->getWidth() : imagesx($resource),
            $this->size  ? $this->size->getHeight() : imagesy($resource)
        );
    }
}