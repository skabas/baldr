<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr;

use Skabas\Baldr\Image\Action\ActionInterface;
use Skabas\Baldr\Image\Attribute\Color;
use Skabas\Baldr\Image\Attribute\Font;
use Skabas\Baldr\Image\Canvas\CanvasInterface;
use Skabas\Baldr\Image\Component\ComponentInterface;

class ImageBuilder
{
    /** @var CanvasInterface $canvas */
    private $canvas;
    /** @var Font[] $fonts */
    private $fonts;
    /** @var Color[] $colors */
    private $colors;
    /** @var ActionInterface[] $actions */
    private $actions;
    /** @var ComponentInterface[] $components */
    private $components;

    public function __construct(CanvasInterface $canvas)
    {
        $this->canvas = $canvas;
    }

    /**
     * @param Font $font
     * @return $this
     */
    public function addFont(Font $font)
    {
        $this->fonts[$font->getId()] = $font;

        return $this;
    }

    /**
     * @param Color $color
     * @return $this
     */
    public function addColor(Color $color)
    {
        $this->colors[$color->getId($this->canvas->getImage())] = $color;

        return $this;
    }

    public function addAction(ActionInterface $action)
    {
        $this->actions[] = $action;

        return $this;
    }

    /**
     * @param ComponentInterface $component
     * @return $this
     */
    public function addComponent(ComponentInterface $component)
    {
        $this->components[] = $component;

        return $this;
    }

    /**
     * @return Image
     */
    public function build() : Image
    {
        $resource = $this->canvas->getResource();

        foreach ($this->actions as $action) {
            $action->execute($resource);
        }

        foreach ($this->components as $component) {
            $component->attachTo($resource);
        }

        return new Image($resource);
    }
}