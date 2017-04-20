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
				<label>Cliënt</label>
				<br>

				<select name="client">
						<?php foreach ($clients as $client) { ?>
							<option value="<?=$client['client_id'] ?>">

								<?=$client['client_firstname'] ?>

							</option>							
						<?php } ?>
				</select>

				<br>
				<label>PatiëntName</label>
				<br>
				<input type="text" name="patient_name" placeholder="PatiëntName">
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
				<label>Status</label>
				<br>
				<input type="text" name="status" placeholder="Status">	
				<br>
				<input type="submit" value="toevoegen">
			</form>
	</article>
</div>
