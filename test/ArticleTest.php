<?php
declare(strict_types=1);

namespace SimpleMVC\Test;
use DI\ContainerBuilder;
use PHPUnit\Framework\TestCase;

use SimpleMVC\Filter;


class ArticleTest extends TestCase
{ 
    public function setUp() : void
    {
        $builder = new ContainerBuilder();
        $builder->addDefinitions(__DIR__ . '/../config/container.php');
        $this->container = $builder->build();
    }

    public function testValidEmail()
    {
        $filter = $this -> container -> get(Filter::class);
        $this->assertTrue($filter->isEmail('johndoe@live.it'));
    }

	public function testValidLogin()
    {
        $filter = $this -> container -> get(Filter::class);
        $this->assertTrue($filter->testLogin('johndoe@live.it', '1234'));
    }

    public function testInvalidLogin()
    {
        $filter = $this -> container -> get(Filter::class);
        $this->assertFalse($filter->testLogin('jolly@live.it', '1234'));
    }
}
