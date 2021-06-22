<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>Shift/tshift" class="btn btn-primary">Tambah Data shif</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<h3>Hasil Data Shif</h3>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">masuk</th>
						<th scope="col">pulang</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach ($shift as $analis ) : ?>
						<tr>
						<th scope="row">1</th>
						<td><?= $analis['shift_time'] ?></td>
						<td><?= $analis['shift_time2'] ?></td>
						
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>

	</div>


</div>