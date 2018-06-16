<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\TestCase;

class Issue1021Test extends TestCase
{
    /**
     * @dataProvider provider
     *
     * @param mixed $data
     */
    public function testSomething($data): void
    {
        $this->assertTrue($data);
    }

    /**
     * @depends testSomething
     */
    public function testSomethingElse(): void
    {
        $this->assertTrue(true);
    }

    public function provider()
    {
        return [[true]];
    }
}
