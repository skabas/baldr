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
 * Class SetBackgroundAction
 * @package Skabas\Baldr
 */
class SetBackgroundAction implements ActionInterface
{
    /** @var Color $color */
    private $color;

    /**
     * @param Color $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    /**
     * @param resource $image
     * @return bool
     */
    public function execute($image) : bool
    {
        if (! is_resource($image)) {
            throw new \InvalidArgumentException('Invalid image.');
        }

        return @imagefill($image, 0, 0, $this->color->getId($image));
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return ActionInterface::TYPE_BEFORE_COMPONENTS;
    }
}