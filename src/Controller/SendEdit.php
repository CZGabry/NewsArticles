<?php
namespace SimpleMVC\Controller;

session_start();

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use PDO;
use SimpleMVC\Model\ArticleManager;

class SendEdit implements ControllerInterface
{
    protected $plates;
    protected $articles; 
    protected $message = "modificato"; 

    public function __construct(Engine $plates, ArticleManager $articleManager)
    {
        $this->plates = $plates;
        $this->articles = $articleManager;

    }

    public function execute(ServerRequestInterface $request)
    {
      $title = $_POST['title'];
    	$content = $_POST['content'];
      $path = $request->getUri()->getPath();
      $id = substr($path, strpos($path, "=") + 1);

      $this->articles->EditArticle($id, $title, $content);
      echo $this->plates->render('success', ['message' => $this->message]);
    }
}