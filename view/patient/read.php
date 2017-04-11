<h1>Info_Patiënt</h1>

<div id="main">

	<nav>
		<ul>
			<li>
				<a href="<?=URL?>patient/index">
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
				<th>Patient_Name</th>
				<th>Species</th>
				<th>Status</th>
			</tr>

			<tr>
				<td><?= $patient['patient_name'];?></td>
			 	<td><?= $patient['species'];?></td>
				<td><?= $patient['status'];?></td>
			</tr>
		</table>		
	</article>

	<aside>

		
	</aside>
</div>