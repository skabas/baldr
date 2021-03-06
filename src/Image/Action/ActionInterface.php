<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Action;

interface ActionInterface
{
    const TYPE_BEFORE_COMPONENTS = 'before';
    const TYPE_AFTER_COMPONENTS = 'after';

    /**
     * @param resource $image
     * @return bool
     */
    public function execute($image) : bool;

    /**
     * @return string
     */
    public function getType() : string;
}