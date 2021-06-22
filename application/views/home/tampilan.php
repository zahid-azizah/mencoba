<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
  <div class="card-header">
    Tambah Data QC
  </div>
  <div class="card-body">
    <?php if (validation_errors () ): ?>
    <div class="alert alert-danger" role="alert">
  <?= validation_errors(); ?>
</div>
    <?php endif; ?>
  	
    <form  method="post" action=" <?= site_url('Analisa/tambah') ?> " >
  		<div class="form-group">
  			<label for="viscosity">Viscosity</label>
  			<input type="text" name="viscosity" class="form-control" id="viscosity">
  		</div>
  		<div class="form-group">
  			<label for="naoh">NaOH</label>
  			<input type="text" name="naoh" class="form-control" id="naoh">
  		</div>
  		<div class="form-group">
  			<label for="a-cellulose">A-Cellulose</label>
  			<input type="text" name="a-cellulose" class="form-control" id="a-cellulose">
  		</div>
  		<div class="form-group">
  			<label for="tempratur">Temprature</label>
  			<input type="text" name="tempratur" class="form-control" id="tempratur" >
  		</div>
  		<div class="form-group">
  			<label for="kw">KW</label>
  			<input type="text" name="kw" class="form-control" id="kw">
  		</div>
  	</form>
   
  </div>
</div>
		</div>
	</div>
	
</div>