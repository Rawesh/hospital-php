<h1>Cliënts</h1>

<div id="main">
	<nav>
		<ul>
			<li>		
				<a href="<?= URL ?>client/create"><button>addPatient</button></a>
			</li>
		</ul>
	</nav>

	<article>
		<table>

			<tr>
				<th>cliënt_Firstname</th>
				<th>cliënt_Lastname</th>
				<th>DateOfBirth</th>
				<th>Options</th>
			</tr>

			<?php foreach ($clients as $client) {  ?>
			<tr>
				<td><?= $client['client_firstname'];?></td>
			 	<td><?= $client['client_lastname'];?></td>
				<td><?= $client['client_DateOfBirth'];?></td>
				<td>
					<a href="<?= URL ?>client/edit/<?=$client['client_id']?>">Edit</a>
					/
					<a href="<?= URL ?>client/delete/<?=$client['client_id']?>">Delete</a>
					/
					<a href="<?= URL ?>client/read/<?=$client['client_id']?>">Info</a>
				</td>
			</tr>
			<?php } ?>
		</table>		
	</article>

	<aside>

	</aside>
</div>
