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
  	
    <form  method="post" action=" <?= site_url('Shift/tshift') ?> " >
  		<div class="form-group mb-3">
  			<label for="shift_time">Masuk</label>
  			<input type="time" name="shift_time1" class="form-control" id="shift_time">
      </div>
      <div class="form-group mb-3">
        <label for="shift_time2">Pulang</label>
        <input type="time" name="shift_time2" class="form-control" id="shift_time">
      </div>
  		
  		<button type="submit" name="" class="btn btn-primary mt-3 ">Tambah Data</button>
  	</form>
   
  </div>
</div>
		</div>
	</div>
	
</div>