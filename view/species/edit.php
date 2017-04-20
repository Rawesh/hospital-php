	<h1>Edit_Species</h1>
<div id="main">

	<nav id="createnav">
		<ul>
			<li>
				<a href="<?=URL?> species/index">
					<button>
						Home
					</button>
				</a>
			</li>
		</ul>
	</nav>

	<article id="createArticle">
		<form action="<?=URL?>species/editSave" method="post">
		<input type="hidden" name="species_id" value="<?=$species['species_id']?>">
		<br>
		<label>Species</label>
		<br>
		<input type="text" name="species" value="<?=$species['species_description']?>" >
		<br>
		<input type="submit" value="toevoegen">
		</form>
	</article>
</div>