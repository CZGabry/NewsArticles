<?php
namespace SimpleMVC\Controller;

session_start();

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use PDO;
use SimpleMVC\Model\ArticleManager;

class NewArticle implements ControllerInterface
{
    protected $plates;
    protected $articles; 

    public function __construct(Engine $plates, ArticleManager $articleManager)
    {
        $this->plates = $plates;
        $this->articles = $articleManager;

    }

    public function execute(ServerRequestInterface $request)
    {
      $title = $_POST['title'];
    	$content = $_POST['content'];
      $userId = $_SESSION['id'];
      $date = date("Y/m/d/h/i/s");

      $this->articles->insertArticles($title, $content, $date, $userId);
      echo $this->plates->render('dashboard', [ 'userArticles' => $this->articles->getAllArticles()]);
    }
}