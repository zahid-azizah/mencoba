<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
		</div>
	</div>

	<a class="btn btn-primary" href="<?= site_url('home/tambah') ?>" role="button">Tambah</a>
	
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="cari data analisa" name="keyword">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit">Cari</button>
					</div>
				</div>
			</form>
		</div>
		</div>

	<div class="row">
		<div class="col-md-6">
			<h3>Halaman Hasil Data Analis</h3>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">no</th>
						<th scope="col">Date</th>			
						<th scope="col">Sampling_time</th>			
						<th scope="col">Shift</th>	
						<th scope="col">Line A/B</th>	
						<th scope="col">Mesin Nomer</th>	
						<th scope="col">Viscosity</th>	
						<th scope="col">NaOH</th>	
						<th scope="col">a-Cellulose</th>	
						<th scope="col">Temprature</th>	
						<th scope="col">KW</th>	
						<th scope="col">AKSI</th>	
					</tr>
				</thead>
				<?php foreach ($line as $analis ) : ?>
					<tr>
						<th scope="row">1</th>
						<td><?= $analis['date'] ?></td>
						<td><?= $analis['sampling_time'] ?></td>
						<td><?= $analis['shift'] ?></td>
						<td><?= $analis['lane_name'] ?></td>
						<td><?= $analis['machine_no'] ?></td>
						<td><?= $analis['viscosity'] ?></td>
						<td><?= $analis['naoh'] ?></td>
						<td><?= $analis['a-cellulose'] ?></td>
						<td><?= $analis['tempratur'] ?></td>
						<td><?= $analis['kw'] ?></td>
						<td><a href= "<?= site_url('home/edit?id='). $analis['id_view'];  ?>"  >Edit</a>|<a href="<?= site_url('home/hapus?id='). $analis['id_view'];  ?>">Hapus</a>
						
					</tr>
				<?php endforeach ?>

			</table>
		</div>

	</div>


</div>