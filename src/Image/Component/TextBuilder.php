<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Component;

use Skabas\Baldr\Image\Attribute\Color;
use Skabas\Baldr\Image\Attribute\Font;
use Skabas\Baldr\Image\Attribute\Position;

/**
 * Class TextBuilder
 * @package Skabas\Baldr
 */
class TextBuilder
{
    /** @var string $value */
    private $value;
    /** @var Font $font */
    private $font;
    /** @var int $fontSize */
    private $fontSize;
    /** @var int $angle */
    private $angle;
    /** @var Position $position */
    private $position;
    /** @var Color $color */
    private $color;

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param Font $font
     * @return $this
     */
    public function setFont(Font $font)
    {
        $this->font = $font;

        return $this;
    }

    /**
     * @param int $fontSize
     * @return $this
     */
    public function setFontSize(int $fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @param int $angle
     * @return $this
     */
    public function setAngle(int $angle)
    {
        $this->angle = $angle;

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
     * @param Color $color
     * @return $this
     */
    public function setColor(Color $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Text
     */
    public function build() : Text
    {
        return new Text(
            $this->value,
            $this->font,
            $this->position,
            $this->color,
            $this->fontSize,
            $this->angle
        );
    }
}