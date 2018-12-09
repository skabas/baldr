<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Component;

use Skabas\Baldr\Image\Attribute\Font;
use Skabas\Baldr\Image\Attribute\Position;
use Skabas\Baldr\Image\Attribute\Color;

/**
 * Class Text
 * @package Skabas\Baldr
 */
class Text implements ComponentInterface
{
    const DEFAULT_FONT_SIZE = 18;
    const DEFAULT_ANGLE = 0;

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
     * @param Font $font
     * @param Position $position
     * @param Color $color
     * @param int $fontSize
     * @param int $angle
     */
    public function __construct(
        string $value,
        Font $font,
        Position $position,
        Color $color,
        ?int $fontSize = null,
        ?int $angle = null
    ){
        $this->value = $value;
        $this->font = $font;
        $this->position = $position;
        $this->color = $color;
        $this->fontSize = $fontSize ?: self::DEFAULT_FONT_SIZE;
        $this->angle = $angle ?: self::DEFAULT_ANGLE;
    }

    /**
     * @param resource $image
     */
    public function attachTo($image)
    {
        @imagefttext(
            $image,
            $this->fontSize,
            $this->angle,
            $this->position->getX(),
            $this->position->getY(),
            $this->color->getId($image),
            $this->font->getFile(),
            $this->value
        );
    }
}