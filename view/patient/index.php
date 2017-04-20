	<h1>Patiënts</h1>

<div id="main">
	<nav>
		<ul>
			<li>		
				<a href="<?= URL ?>patient/create">
					<button id="NavButton">
						addPatient
					</button>
				</a>
			</li>
		</ul>
	</nav>
<hr>
	<article>
		<table>
			<tr>
				<th>Patient</th>
				<th>Status</th>
				<th>Species</th>
				<th colspan="2">Client</th>
				<th colspan="3">Options</th>
			</tr>

			<?php foreach ($patients as $patient) {  ?>
			<tr>
				<td><?= $patient['patient_name'];?></td>
			 	<td><?= $patient['patient_status'];?></td>
				<td><?= $patient['species_description'];?></td>
				<td><?= $patient['client_firstname'];?></td>
				<td><?= $patient['client_lastname'];?></td>
				<td>
					<a href="<?= URL ?>patient/edit/<?=$patient['patient_id']?>">
						<button>
							Edit
						</button>
					</a>
				</td>

				<td>
					<a href="<?= URL ?>patient/delete/<?=$patient['patient_id']?>">
						<button>
							Delete
						</button>
					</a>
				</td>

				<td>	
					<a href="<?= URL ?>patient/read/<?=$patient['patient_id']?>">
						<button>
							Info
						</button>
					</a>
				</td>
			</tr>
			<?php } ?>
		</table>		
	</article>

	<aside>
		<ul>
			<li>
				<a href="<?= URL ?>client/index">
					<button id="BigButton">
						Cliënt
					</button>
				</a>
			</li>

			<li>
				<a href="<?= URL ?>species/index">
					<button id="BigButton">
						Specie
					</button>
				</a>
			</li>
		</ul>
	</aside>
</div>

