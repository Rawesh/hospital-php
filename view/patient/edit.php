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
		<textarea name="status"><?=$patient['patient_status']?></textarea>
		<br>
		<label>Species</label>
		<br>
			<select name="specie">
				<?php foreach ($species as $specie) { ?>
					<option value="<?=$specie['species_id'] ?>">

						<?=$specie['species_description'] ?>

					</option>							
				<?php } ?>
			</select>
		<br>
		<label>Cliënt</label>
		<br>
		<select name="client">
			<?php foreach ($clients as $client) { ?>
				<option value="<?=$client['client_id'] ?>" <?php if ($client['client_id'] == $editclient['client_id']) { echo "selected"; } ?>>

						<?= $client['client_firstname'] . $client['client_lastname']  ?>

				</option>							
			<?php } ?>
		</select>
		<br>		
		<input type="submit" value="toevoegen">
		</form>
	</article>
</div>


