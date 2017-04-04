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
					<a href="<?= URL ?>patient/edit?id=<?=$patient['id']?>">edit</a>
					/
					<a href="<?= URL ?>patient/delete?id=<?=$patient['id']?>">delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>		
	</article>
</div>

