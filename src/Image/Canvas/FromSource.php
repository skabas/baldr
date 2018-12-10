<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Canvas;

use Skabas\Baldr\Image\Source\SourceInterface;

/**
 * Class FromSource
 * @package Skabas\Baldr
 */
class FromSource implements CanvasInterface
{
    /** @var SourceInterface $source */
    private $source;

    /**
     * @param SourceInterface $source
     */
    public function __construct(SourceInterface $source)
    {
        $this->source = $source;
    }

    /**
     * @return resource
     */
    public function getResource()
    {
        if ($this->source->getType() === SourceInterface::TYPE_STRING) {
            return $this->createFromString();
        }

        return $this->createFromFile();
    }

    /**
     * @return resource
     */
    private function createFromFile()
    {
        $imageSize = getimagesize($this->source);

        if (! $imageSize) {
            throw new \InvalidArgumentException('Invalid source.');
        }

        switch ($imageSize[2]) {
            case IMAGETYPE_JPEG:
                return @imagecreatefromjpeg($this->source);
                break;
            case IMAGETYPE_PNG:
                return @imagecreatefrompng($this->source);
                break;
            default:
                throw new \InvalidArgumentException('Unexpected source data.');
        }
    }

    /**
     * @return resource
     */
    private function createFromString()
    {
        return @imagecreatefromstring($this->source);
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return imagesx($this->getResource());
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return imagesy($this->getResource());
    }
}