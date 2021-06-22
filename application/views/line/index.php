<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>Line/tline" class="btn btn-primary">Data Line</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<h3>Hasil Data Shif</h3>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Line Nomer</th>			
						
					</tr>
				</thead>
				<tbody>
					<?php foreach ($line as $analis ) : ?>
						<tr>
						<th scope="row">1</th>
						<td><?= $analis['lane_name'] ?></td>
						
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>

	</div>


</div>