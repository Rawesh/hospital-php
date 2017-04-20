	<h1>Edit_Cliënt</h1>
<div id="main">

	<nav id="createnav">
		<ul>
			<li>
				<a href="<?=URL?> client/index">
					<button>
						Home
					</button>
				</a>
			</li>
		</ul>
	</nav>

	<article id="createArticle">
		<form action="<?=URL?>client/editSave" method="post">
		<input type="hidden" name="client_id" value="<?=$client['client_id']?>">
		<br>
		<label>Cliënt_Firstname</label>
		<br>
		<input type="text" name="client_firstname" value="<?=$client['client_firstname']?>" >
		<br>
		<label>Cliënt_Lastname</label>
		<br>
		<input type="text" name="client_lastname" value="<?=$client['client_lastname']?>" >	
		<br>
		<input type="submit" value="toevoegen">
		</form>
	</article>
</div>