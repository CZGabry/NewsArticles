<?php
session_start();
declare(strict_types=1);

namespace SimpleMVC\Model;

class Article{
    
    private $title;
    private $content;
    private $date;
    private $idUser;

    public function __construct($title, $content, $date, $idUser) {
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
        $this->idUser = $idUser;
    }

}

?>