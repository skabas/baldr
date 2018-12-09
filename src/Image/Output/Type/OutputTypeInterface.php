<?php

namespace Skabas\Baldr\Image\Output\Type;

interface OutputTypeInterface
{
    /**
     * @param $resource
     */
    public function toScreen($resource);

    /**
     * @param $resource
     */
    public function toFile($resource);
}