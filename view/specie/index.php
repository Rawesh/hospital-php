<h1>Species</h1>

<div id="main">
	<nav>
		<ul>
			<li>		
				<a href="<?= URL ?>specie/create"><button>addSpecie</button></a>
			</li>
		</ul>
	</nav>

	<article>
		<table>

			<tr>
				<th>Specie_id</th>
				<th>Specie</th>
				<th>Options</th>
			</tr>

			<?php foreach ($species as $specie) {  ?>
			<tr>
				<td><?= $specie['specie_id'];?></td>
				<td><?= $specie['specie'];?></td>
				<td>
					<a href="<?= URL ?>specie/edit/<?=$specie['specie_id']?>">Edit</a>
					/
					<a href="<?= URL ?>specie/delete/<?=$specie['specie_id']?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>		
	</article>

	<aside>

	</aside>
</div>
