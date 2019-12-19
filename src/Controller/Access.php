<?php
namespace SimpleMVC\Controller;

session_start();

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use PDO;

class Access implements ControllerInterface
{
    protected $plates;
    private $pdo;

    public function __construct(Engine $plates, PDO $pdo)
    {
        $this->plates = $plates;
        $this->pdo = $pdo;
    }

    public function execute(ServerRequestInterface $request)
    {
      $email = $_POST['email'];
    	$pass = $_POST['password'];

      $this->Login($email, $pass);
    	
    }

    public function Login($email, $pass)
    {


      if(strlen($pass) > 3) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        $sql = "SELECT id, email, password FROM Users";

        foreach ($this->pdo->query($sql) as $row) {

            if($email == $row["email"] && $pass == $row["password"]){
              
                        $_SESSION['email'] = $email;
                        $_SESSION['id'] = $row["id"];


                        header('location: dashboard');
                        
                      }

                      else {
                        header('location: dashboard');
                      }
             }
        }
        else{
          header('location: dashboard');
        }

      }

      else{
        header('location: dashboard');
      }


    }
}
