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

    public function __construct(Engine $plates, ArticleManager $articleManager)
    {
        $this->plates = $plates;
        $this->articles = $articleManager;

    }

    public function execute(ServerRequestInterface $request)
    {
        $path = $request->getUri()->getPath();
        $id = substr($path, strpos($path, "=") + 1);
        $this->articles->DeleteArticle($id);
         echo $this->plates->render('delete', ['userArticles' => $this->articles->getAllArticles()]);
    }
}
