<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticleManager;

class EditArticles implements ControllerInterface
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
        $urlTitle = substr($path, strpos($path, "=") + 1);
        echo $this->plates->render('editArticle', [ 'userArticles' => $this->articles->SingleArticle($urlTitle)]);
    }
}