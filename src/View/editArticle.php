<?php $this->layout('layout', ['title' => 'Errore 404']) ?>



<div class="container">
	<div class="row">
	
	

	<?php
		foreach ($userArticles as $row) {
				echo '<form method="post" action="sendEdit='.$row['urltitle'].'" style="text-align: center;">;';
				echo '<h1>Modifica articolo</h1>';
				echo 'Titolo: <input type="text" name="title" value="'.$row['title'].'"><br>';
				echo 'Contenuto: <input type="text" name="content" style="height: 200px;" value="'.$row['content'].'"><br>';
		}
		?>
	<input type="submit">
</form>


</div>
</div>