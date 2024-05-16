<?php

declare(strict_types=1);

namespace Test;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

class KataTest extends TestCase
{
    public function testDummy()
    {
        $kata = new Kata();
        $this->fail();
    }

    public function testNotFailing()
    {
        $this->assertTrue(true);
    }
}
