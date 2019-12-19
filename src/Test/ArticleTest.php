<?php
declare(strict_types=1);

namespace SimpleMVC\Test;

use PHPUnit\Framework\TestCase;
use SimpleMVC\Test\Filter;

class FilterTest extends TestCase
{
    public function testValidEmail()
    {
        $filter = new Filter();
        $this->assertTrue($filter->isEmail('foo@bar.com'));
    }

    public function testInvalidEmail()
    {
        $filter = new Filter();
        $this->assertFalse($filter->isEmail('foo'));
    }
}
