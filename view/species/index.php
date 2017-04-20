<h1>Species</h1>

<div id="main">
	<nav>
		<ul>
			<li>		
				<a href="<?= URL ?>species/create">
					<button id="NavButton">
						addSpecie
					</button>
				</a>
			</li>
		</ul>
	</nav>
<hr>
	<article>
		<table>

			<tr>
				<th>Specie</th>
				<th colspan="2">Options</th>
			</tr>

			<?php foreach ($species as $specie) {  ?>
			<tr>
				<td><?= $specie['species_description'];?></td>

				<td>
					<a href="<?= URL ?>species/edit/<?=$specie['species_id']?>">
						<button>
								Edit
						</button>
					</a>
				</td>

				<td>
					<a href="<?= URL ?>species/delete/<?=$specie['species_id']?>">
					 	<button>
					 		Delete
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
				<a href="<?= URL ?>client/index"><button id="BigButton">Cliënt</button></a>
			</li>

			<li>
				<a href="<?= URL ?>patient/index"><button id="BigButton">Patiënt</button></a>
			</li>
		</ul>
	</aside>
</div>
