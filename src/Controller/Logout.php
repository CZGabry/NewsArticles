<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;


class Logout implements ControllerInterface
{
    protected $plates;

    public function __construct(Engine $plates)
    {
        $this->plates = $plates;
    }

    public function execute(ServerRequestInterface $request)
    {
		session_start(); 
		session_destroy(); 
		header("location:/"); 
		exit();
    }
}