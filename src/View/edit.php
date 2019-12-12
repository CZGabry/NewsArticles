<?php $this->layout('layout', ['title' => 'Errore 404']) ?>
<div class="container">
	<h1>Clicca sull'articolo che desideri modificare</h1>
<div class="row">

<?php


foreach ($userArticles as $row) {
	echo "<a href=/edit=".$row['id'].">";
    echo "<div class=col-md-6><h1>".$row['title']."</h1>";
    echo "<p>".$row['content']."</p>";
    echo "<p>".$row['date']."</p>";
    echo "<p>".$row['idUser']."</p></div></a>";
}
?>

</div>
</div>