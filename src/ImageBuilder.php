<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr;

use Skabas\Baldr\Image\Action\ActionInterface;
use Skabas\Baldr\Image\Canvas\CanvasInterface;
use Skabas\Baldr\Image\Component\ComponentInterface;

/**
 * @package Skabas\Baldr
 */
class ImageBuilder
{
    /** @var CanvasInterface $canvas */
    private $canvas;
    /** @var array $actions */
    private $actions;
    /** @var ComponentInterface[] $components */
    private $components;

    /**
     * @param CanvasInterface $canvas
     */
    public function __construct(CanvasInterface $canvas)
    {
        $this->canvas = $canvas;
    }

    /**
     * @param ActionInterface $action
     * @return $this
     */
    public function addAction(ActionInterface $action)
    {
        if (! isset($this->actions[$action->getType()])) {
            $this->actions[$action->getType()] = [];
        }

        $this->actions[$action->getType()][] = $action;

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

        foreach ($this->actions[ActionInterface::TYPE_BEFORE_COMPONENTS] as $action) {
            /** @var ActionInterface $action */
            $action->execute($resource);
        }

        foreach ($this->components as $component) {
            $component->attachTo($resource);
        }

        foreach ($this->actions[ActionInterface::TYPE_AFTER_COMPONENTS] as $action) {
            /** @var ActionInterface $action */
            $action->execute($resource);
        }

        return new Image($resource);
    }
}