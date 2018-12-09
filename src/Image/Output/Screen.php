<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Output;

use Skabas\Baldr\Image\Output\Type\OutputTypeInterface;

class Screen implements OutputInterface
{
    private $outputType;

    public function __construct(OutputTypeInterface $outputType)
    {
        $this->outputType = $outputType;
    }

    public function handle($resource)
    {
        $this->outputType->toScreen($resource);
    }
}