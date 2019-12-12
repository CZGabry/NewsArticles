<?php
use SimpleMVC\Controller;



return [
    'GET /' => Controller\Home::class,
    'GET /dashboard' => Controller\Dashboard::class,
    'GET /login' => Controller\Login::class,
    'POST /access' => Controller\Access::class,
    'POST /newArticle' => Controller\NewArticle::class,
    'GET /delete' => Controller\Delete::class,
    'GET /logout' => Controller\Logout::class,
    'GET /article=id' => Controller\ArticlePage::class,
    'GET /delete=id' => Controller\DeleteArticles::class,
    'GET /edit' => Controller\Edit::class,
    'GET /edit=id' => Controller\EditArticles::class,
    'POST /sendEdit=id' => Controller\SendEdit::class,
     // "SimpleMVC\Controller\Home"
];
