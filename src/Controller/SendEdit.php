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
    protected $successMessage = "Articolo modificato con successo"; 
    protected $errorMessage = "Impossibile modificare"; 

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
      $urlTitle = substr($path, strpos($path, "=") + 1);

      if($title != "" && $content != ""){
        $this->articles->EditArticle($urlTitle, $title, $content);
        echo $this->plates->render('success', ['message' => $this->successMessage]);
      }

      else {
        echo $this->plates->render('success', ['message' => $this->errorMessage]);
      }


    }
}