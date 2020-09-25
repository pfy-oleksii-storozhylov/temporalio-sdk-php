<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Runtime\Route;

use Temporal\Client\WorkerInterface;

abstract class Route implements RouteInterface
{
    /**
     * @return string
     */
    private function getShortClassName(): string
    {
        $chunks = \explode('\\', static::class);

        return \array_pop($chunks);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getShortClassName();
    }
}
