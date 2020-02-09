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

namespace KodeKeep\Cereal\Tests\Writers;

use KodeKeep\Cereal\Writers\ArrayWriter;

/**
 * @covers \KodeKeep\Cereal\Writers\ArrayWriter
 */
class ArrayWriterTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): ArrayWriter
    {
        return new ArrayWriter();
    }
}
