<?php
declare(strict_types=1);

namespace SimpleMVC\Model;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use PDO;


class ArticleManager 
{

	private $pdo;

	public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllArticles()
    {

		$sql = 'SELECT * FROM Articles ORDER BY date DESC;';
		$sth = $this->pdo->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
        
    }

    public function getAllArticlesByUserId($userId)
    {

		$sql = 'SELECT * FROM Articles WHERE idUser='.$userId. ' ORDER BY date DESC;';
		$sth = $this->pdo->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
        
    }

    public function insertArticles($title, $content, $date, $userId, $urlTitle)
    {

		$sql = "INSERT INTO Articles (title, content, date, idUser, urltitle) VALUES ('".$title."', '".$content."', '".$date."',".$userId.", '".$urlTitle."');";
		$sth = $this->pdo->prepare($sql);
		$sth->execute();  
		
    }

    public function SingleArticle($titleUrl)
    {
		$sql = "SELECT * FROM Articles WHERE urltitle='".$titleUrl."';";
		$sth = $this->pdo->prepare($sql);
		$sth->execute(); 
		return $sth->fetchAll();
    }

    public function DeleteArticle($titleUrl)
    {
		$sql = "DELETE FROM Articles WHERE urltitle='".$titleUrl."';";
		$sth = $this->pdo->prepare($sql);
		$sth->execute(); 
    }

    public function EditArticle($titleUrl, $title, $content)
    {
		$sql = "UPDATE Articles SET title = '".$title."', content = '".$content."' WHERE urltitle='".$titleUrl."';";
		$sth = $this->pdo->prepare($sql);
		$sth->execute();
    }

}






