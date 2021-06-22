<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
  <div class="card-header">
    Data Line
  </div>
  <div class="card-body">
    <?php if (validation_errors () ): ?>
    <div class="alert alert-danger" role="alert">
  <?= validation_errors(); ?>
</div>
    <?php endif; ?>
  	
    <form  method="post" action=" <?= site_url('Line/tline') ?> " >
  		<div class="form-group mb-3">
  			<label for="lane_name">Mesin Nomer</label>
  			<input type="number" name="lane_name" class="form-control" id="lane_name">
      </div>
  		
  		<button type="submit" name="" class="btn btn-primary mt-3 ">Tambah Data</button>
  	</form>
   
  </div>
</div>
		</div>
	</div>
	
</div>