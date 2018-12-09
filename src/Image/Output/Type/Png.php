<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Output\Type;

class Png implements OutputTypeInterface
{
    public function toScreen($resource)
    {
        header('Content-Type: image/png');
        imagepng($resource);
        imagedestroy($resource);
    }

    public function toFile($resource)
    {
        // TODO: Implement toFile() method.
    }
}