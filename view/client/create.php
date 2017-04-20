	<h1>Add_Client</h1>
<div id="main">
	
	<nav id="createnav">
		<ul>
			<li>
				<a href="<?= URL ?>client/index">
					<button>
						HomePage
					</button>
				</a>
		
			</li>
		</ul>
	</nav>
	<article id="createArticle">

			<form action="<?=URL?>client/createSave" method="post">
			<label>CliëntFirstname</label>
			<br>
			<input type="text" name="client_firstname" placeholder="cliënt_firstname">
			<br>
			<label>CliëntLastname</label>
			<br>
			<input type="text" name="client_lastname" placeholder="cliënt_lastname"><br>	
			<br>
			<input type="submit" value="toevoegen">
			</form>
	</article>
</div>
