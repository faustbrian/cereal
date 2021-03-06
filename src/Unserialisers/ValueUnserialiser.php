<?php

declare(strict_types=1);

/*
 * This file is part of Cereal.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Cereal\Unserialisers;

use KodeKeep\Cereal\Contracts\Unserialiser;
use KodeKeep\Cereal\Utils\Mapper;

class ValueUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        $contents = unserialize($input);

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
