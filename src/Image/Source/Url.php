<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Source;

/**
 * Class Url
 * @package Skabas\Baldr
 */
class Url implements SourceInterface
{
    /** @var string $url */
    private $url;

    /**
     * @param string $url
     */
    public function __construct(string $url)
    {
        if (! filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException(
                sprintf('Url invalid: %s', $url)
            );
        }
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return SourceInterface::TYPE_URL;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->url;
    }
}