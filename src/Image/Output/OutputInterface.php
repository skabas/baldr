<?php
/**
 * Skabas Baldr
 * @link https://github.com/skabas/baldr
 * @copyright Copyright (c) 2018-2018 Skabas Ltd UK(http://www.skabas.co.uk)
 * @license https://github.com/skabas/baldr/blob/master/LICENSE
 */

// imagesavealpha($new, TRUE);

namespace Skabas\Baldr\Image\Output;

interface OutputInterface
{
    public function handle($resource);
}