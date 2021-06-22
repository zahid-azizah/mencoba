<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<h3>Halaman Hasil Data Analis</h3>
			<table class="table">
				<thead>
					<tr>
								
						<th scope="col">Date</th>			
						<th scope="col">Shift</th>	
						<th scope="col">Line A/B</th>	
						<th scope="col">Mesin Nomer</th>	
						<th scope="col">Viscosity</th>	
						<th scope="col">NaOH</th>	
						<th scope="col">a-Cellulose</th>	
						<th scope="col">Temprature</th>	
						<th scope="col">KW</th>	
					</tr>
				</thead>
				<?php foreach ($line as $analis ) : ?>
						<tr>
						<th scope="row">1</th>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['date'] ?></td>
						
					</tr>
				<?php endforeach ?>

			</table>
		</div>

	</div>


</div>