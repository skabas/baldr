<?php

namespace Skabas\Baldr\Image\Output\Type;

class Jpeg implements OutputTypeInterface
{
    public function toScreen($resource)
    {
        header('Content-Type: image/jpeg');
        imagejpeg($resource);
        imagedestroy($resource);
    }

    public function toFile($resource)
    {
        // TODO: Implement toFile() method.
    }
}