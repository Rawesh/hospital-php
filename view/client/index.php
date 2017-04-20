<h1>Cliënts</h1>

<div id="main">
	<nav>
		<ul>
			<li>		
				<a href="<?= URL ?>client/create">
					<button id="NavButton">
						addCliënt
					</button>
				</a>
			</li>
		</ul>
	</nav>
<hr>
	<article>
		<table>

			<tr>
				<th>cliënt_Firstname</th>
				<th>cliënt_Lastname</th>
				<th colspan="3">Options</th>
			</tr>

			<?php foreach ($clients as $client) {  ?>
			<tr>
				<td><?= $client['client_firstname'];?></td>
			 	<td><?= $client['client_lastname'];?></td>
				<td>
					<a href="<?= URL ?>client/edit/<?=$client['client_id']?>">
						<button>
							Edit
						</button>
					</a>
				</td>

				<td>
					<a href="<?= URL ?>client/delete/<?=$client['client_id']?>">
						<button>
							Delete
						</button>
					</a>
				</td>

				<td>
					<a href="<?= URL ?>client/read/<?=$client['client_id']?>">
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
				<a href="<?= URL ?>patient/index">
					<button id="BigButton">
						Patiënt
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
