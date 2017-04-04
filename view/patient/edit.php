	<h1>EditPatiënt</h1>

	<form action="<?=URL?>patient/editSave" method="get">
	<label>PatiëntName</label>
	<br>
	<input type="text" name="patient_name" value="<?= $patients['patient_name']?>">
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