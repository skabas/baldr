<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Action;

use Skabas\Baldr\Image\Attribute\Color;

class ActionFactory
{
    /**
     * @param Color $color
     * @return SetBackgroundAction
     */
    public function createSetBackgroundAction(Color $color)
    {
        return new SetBackgroundAction($color);
    }
}