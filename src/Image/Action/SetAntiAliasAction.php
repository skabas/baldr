<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Action;

/**
 * Class SetAntiAliasAction
 * @package Skabas\Baldr
 */
class SetAntiAliasAction implements ActionInterface
{
    /** @var bool $value */
    private $value;

    /**
     * @param bool $value
     */
    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    /**
     * @param resource $image
     * @return bool
     */
    public function execute($image): bool
    {
        return @imageantialias($image, $this->value);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return ActionInterface::TYPE_AFTER_COMPONENTS;
    }
}