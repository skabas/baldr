<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Source;

/**
 * Class DataString
 * @package Skabas\Baldr
 */
class DataString implements SourceInterface
{
    /** @var string $string */
    private $string;

    /**
     * @param string $string
     */
    public function __construct(string $string)
    {
        if (! $decodedString = base64_decode($string)) {
            throw new \InvalidArgumentException(
                sprintf('String is not in the expected base64 format: %s', $string)
            );
        }
        $this->string = $decodedString;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return SourceInterface::TYPE_STRING;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->string;
    }
}