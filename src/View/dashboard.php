<?php $this->layout('layout', ['title' => 'Errore 404']) ?>



<form method="post" action="newArticle" style="text-align: center;">
<h1>Crea nuovo articolo</h1>
Titolo: <input type="text" name="title"><br>
Contenuto: <input type="text" name="content" style="height: 200px;"><br>
<input type="submit">
</form>

<form action="/edit" style="text-align: center;">
		<h1>Modifica articolo</h1>
    	<input type="submit" value="Edit" />
</form>

<form action="/delete" style="text-align: center;">
		<h1>Elimina articolo</h1>
    	<input type="submit" value="Logout" />
</form>