	<h1>Edit_Patiënt</h1>
<div id="main">

	<nav id="createnav">
		<ul>
			<li>
				<a href="<?=URL?> patient/index">
					<button>
						Home
					</button>
				</a>
			</li>
		</ul>
	</nav>

	<article id="createArticle">
		<form action="<?=URL?>patient/editSave" method="post">
		<input type="hidden" name="patient_id" value="<?=$patient['patient_id']?>">
		<br>
		<label>PatiëntName</label>
		<br>
		<input type="text" name="patient_name" value="<?=$patient['patient_name']?>" >
		<br>
		<label>Status</label>
		<br>
		<input type="text" name="status" value="<?=$patient['patient_status']?>" >	
		<br>
		<label>Species</label>
		<br>
		<input type="text" name="species" value="<?=$patient['species_description']?>">
		<br>
		<label>Client_firstname</label>
		<br>
		<input type="text" name="client_firstname" value="<?=$patient['client_firstname']?>">
		<br>
		<label>Client_lastname</label>
		<br>
		<input type="text" name="client_lastname" value="<?=$patient['client_lastname']?>">
		<br>		
		<input type="submit" value="toevoegen">
		</form>
	</article>
</div>