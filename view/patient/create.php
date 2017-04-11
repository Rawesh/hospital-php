	<h1>Add_Patiënt</h1>
<div id="main">
	
	<nav id="createnav">
		<ul>
			<li>
				<a href="<?= URL ?>patient/index">
					<button>
						HomePage
					</button>
				</a>
		
			</li>
		</ul>
	</nav>
	<article id="createArticle">

			<form action="<?=URL?>patient/createSave" method="post">
			<label>PatiëntName</label>
			<br>
			<input type="text" name="patient_name" placeholder="PatiëntName">
			<br>
			<label>Species</label>
			<br>
			<input type="text" name="species" placeholder="Species"><br>
			<label>Status</label>
			<br>
			<input type="text" name="status" placeholder="Status">	
			<br>
			<input type="submit" value="toevoegen">
			</form>
	</article>
</div>
