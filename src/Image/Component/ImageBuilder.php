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
 * Class ImageBuilder
 * @package Skabas\Baldr
 */
class ImageBuilder
{
    /** @var resource $resource */
    private $resource;
    /** @var Position $position */
    private $position;
    /** @var Size|null $size */
    private $size;

    /**
     * @param resource $resource
     * @return $this
     */
    public function setResource($resource)
    {
        if (! is_resource($resource)) {
            throw new \InvalidArgumentException(
                sprintf('Expected resource, got %s.', gettype($resource))
            );
        }
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param Position $position
     * @return $this
     */
    public function setPosition(Position $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @param Size $size
     * @return $this
     */
    public function setSize(Size $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return Image
     */
    public function build()
    {
        return new Image(
            $this->resource,
            $this->position,
            $this->size
        );
    }
}