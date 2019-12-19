<?php $this->layout('layout', ['title' => 'Home SimpleMVC']) ?>

<form action="/dashboard">
    <input type="submit" value="Dashboard" />
</form>


<div class="container">
	<h1>Articoli</h1>
	<div class="row">
<?php

foreach ($userArticles as $row) {

    $content = $row['content'];
    if (strlen($content) > 50){
    $content = substr($content, 0, 40).'...';}
	echo "<a href=/article=".$row['urltitle'].">";
    echo "<div><h1>".$row['title']."</h1>";
    echo "<p>".$content."</p>";
    echo "<p>".$row['date']."</p>";
    echo "<p>".$row['idUser']."</p></div></a>";
}
?>

</div>
</div>
