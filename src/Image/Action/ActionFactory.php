<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Action;

use Skabas\Baldr\Image\Attribute\Color;

/**
 * Class ActionFactory
 * @package Skabas\Baldr
 */
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

    /**
     * @param bool $value
     * @return SetAntiAliasAction
     */
    public function createSetAntiAliasAction(bool $value)
    {
        return new SetAntiAliasAction($value);
    }

    /**
     * @param bool $value
     * @return SetAlphaBlendingAction
     */
    public function createSetAlphaBlendingAction(bool $value)
    {
        return new SetAlphaBlendingAction($value);
    }

    /**
     * @param bool $value
     * @return SetImageSaveAlpha
     */
    public function createSetImageSaveAlpha(bool $value)
    {
        return new SetImageSaveAlpha($value);
    }
}