<?php
declare(strict_types=1);

namespace SimpleMVC;

use PDO;


class Filter 
{
   private $pdo;

   function __construct(PDO $pdo)
   {
       $this->pdo = $pdo;
   }

   public function isEmail(string $email)
    {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  return true;
		      }
		  else {
			  return false;
		  }
    }

   public function testLogin($email, $password): bool
   {
       $sql = 'SELECT * FROM Users WHERE email = :email';
       $sth = $this->pdo->prepare($sql);
       $sth->execute([':email' => $email]);
       $res = $sth->fetchAll();
        if(!empty($res)){
          if($password == $res[0]['password']){
            return true;
          }
          else {
            return false;
          }

        }
        else {
          return false;
        }
           
       
   }
}
