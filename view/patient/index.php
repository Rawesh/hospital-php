	<h1>Patiënts</h1>

<div id="main">
	<nav>
		<ul>
			<li>		
				<a href="<?= URL ?>patient/create"><button>addPatient</button></a>
			</li>
		</ul>
	</nav>

	<article>
		<table>

			<tr>
				<th>Patient_Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Options</th>
			</tr>

			<?php foreach ($patients as $patient) {  ?>
			<tr>
				<td><?= $patient['patient_name'];?></td>
			 	<td><?= $patient['species'];?></td>
				<td><?= $patient['status'];?></td>
				<td>
					<a href="<?= URL ?>patient/edit/<?=$patient['patient_id']?>">Edit</a>
					/
					<a href="<?= URL ?>patient/delete/<?=$patient['patient_id']?>">Delete</a>
					/
					<a href="<?= URL ?>patient/read/<?=$patient['patient_id']?>">Info</a>
				</td>
			</tr>
			<?php } ?>
		</table>		
	</article>

	<aside>

	</aside>
</div>

