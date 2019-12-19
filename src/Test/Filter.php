<?php
declare(strict_types=1);

namespace SimpleMVC\Test;

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
}
