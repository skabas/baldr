<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr;

use Skabas\Baldr\Image\Output\OutputInterface;

class Image
{
    private $resource;

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    public function output(OutputInterface $output)
    {
        $output->handle($this->resource);
    }
}