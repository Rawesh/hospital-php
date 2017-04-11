	<h1>Edit_Species</h1>
<div id="main">

	<nav id="createnav">
		<ul>
			<li>
				<a href="<?=URL?> specie/index">
					<button>
						Home
					</button>
				</a>
			</li>
		</ul>
	</nav>

	<article id="createArticle">
		<form action="<?=URL?>specie/editSave" method="post">
		<input type="hidden" name="specie_id" value="<?=$specie['specie_id']?>">
		<br>
		<label>Specie</label>
		<br>
		<input type="text" name="specie" value="<?=$specie['specie']?>" >
		<br>
		<input type="submit" value="toevoegen">
		</form>
	</article>
</div>