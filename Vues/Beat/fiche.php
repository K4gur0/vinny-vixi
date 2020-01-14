<form action="">
	<p>
		<span>Titre</span>
		<span><?= $sons->getTitre() ?> </span>
		
	</p>
	<p>
		<span>Artiste</span>
		<span><?= $sons->getArtiste() ?> </span>
	</p>
	<p>
		<span>Genre</span>
		<span><?= $sons->getGenre() ?> </span>
	</p>
	<p>
		<span>url</span>
		<span><?= $sons->getUrl() ?> </span>
	</p>

	<button>Enregistrer</button>
</form>