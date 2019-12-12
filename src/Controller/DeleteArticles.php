<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticleManager;

class DeleteArticles implements ControllerInterface
{
    protected $plates;
    protected $articles; 
    protected $message = "eliminato"; 

    public function __construct(Engine $plates, ArticleManager $articleManager)
    {
        $this->plates = $plates;
        $this->articles = $articleManager;

    }

    public function execute(ServerRequestInterface $request)
    {
        $path = $request->getUri()->getPath();
        $urlTitle = substr($path, strpos($path, "=") + 1);
        $this->articles->DeleteArticle($urlTitle);
         echo $this->plates->render('success', ['message' => $this->message]);
    }
}
