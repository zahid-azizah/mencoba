<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>analisa/tambah" class="btn btn-primary">Tambah Data Anaisa</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<h3>Hasil Data Qc</h3>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Viscosity</th>
						<th scope="col">Naoh</th>
						<th scope="col">A-Cellulose</th>
						<th scope="col">Tempratur</th>
						<th scope="col">KW</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($analisa as $analis ) : ?>
						<tr>
						<th scope="row">1</th>
						<td><?= $analis['viscosity'] ?></td>
						<td><?= $analis['naoh'] ?></td>
						<td><?= $analis['a-cellulose'] ?></td>
						<td><?= $analis['tempratur'] ?></td>
						<td><?= $analis['kw'] ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>

	</div>


</div>