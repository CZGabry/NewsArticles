<?php
namespace SimpleMVC\Controller;

session_start();

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;

class Dashboard implements ControllerInterface
{
    protected $plates;

    public function __construct(Engine $plates)
    {
        $this->plates = $plates;
    }

    public function execute(ServerRequestInterface $request)
    {
		if(array_key_exists('email', $_SESSION) && $_SESSION['email']){
			echo $this->plates->render('dashboard');

		}
		else {
			echo $this->plates->render('login');
		}
    }
}
