<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

namespace Skabas\Baldr\Image\Source;

/**
 * Class File
 * @package Skabas\Baldr
 */
class File implements SourceInterface
{
    /** @var string $file */
    private $file;

    /**
     * @param string $file
     */
    public function __construct(string $file)
    {
        if (! file_exists($file)) {
            throw new \InvalidArgumentException(
                sprintf('File does not exist: %s', $file)
            );
        }
        $this->file = $file;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return SourceInterface::TYPE_FILE_PATH;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->file;
    }
}