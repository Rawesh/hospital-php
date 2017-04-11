<h1>Info_Cliënt</h1>

<div id="main">

	<nav>
		<ul>
			<li>
				<a href="<?=URL?>client/index">
					<button>
						Home
					</button>
				</a>
			</li>
		</ul>	
	</nav>

	<article>
		<table>
				<tr>
				<th>Cliënt_Firstname</th>
				<th>Cliënt_Lastname</th>
				<th>Cliënt_DateOfBirth</th>
			</tr>

			<tr>
				<td><?= $client['client_firstname'];?></td>
			 	<td><?= $client['client_lastname'];?></td>
				<td><?= $client['client_DateOfBirth'];?></td>
			</tr>
		</table>		
	</article>

	<aside>

		
	</aside>
</div>