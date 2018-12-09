<?php

namespace Skabas\Baldr\Image\Output;

use Skabas\Baldr\Image\Output\Type\OutputTypeInterface;

class OutputFactory
{
    public function createScreen(OutputTypeInterface $outputType)
    {
        return new Screen($outputType);
    }
}