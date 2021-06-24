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

          <form  method="post" action="<?= site_url('home/edit') ?> " >
            <div class="form-groub mb-3">
              <input type="hidden" name="idview" value="<?= $tampil[0]['id_view'] ?> ">
              <input type="hidden" name="idanalisa" value="<?= $tampil[0]['id_analisa'] ?> ">
             <label for="viscosity">Shift</label>
             <select class="form-select" name="shift" aria-label="Default select example">
              <option value="<?= $tampil[0]['shift'] ?>"><?= $tampil[0]['shift_time']."-" . $tampil[0]['shift_time2'] ?></option>
              <?php foreach($shifts as $shift) :?>
                <option value="<?= $shift['id_shift'] ?>"><?= $shift['shift_time']. "-" . $shift['shift_time2'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-groub mb-3">
            <label for="lane_name">Line</label>
            <select class="form-select" name="line" aria-label="Default select example">
              <option value="<?= $tampil[0]['line'] ?>"><?= $tampil[0]['lane_name'] ?></option>
             <?php foreach($lines as $line) :?>
              <option value="<?= $line['id_line'] ?>"><?= $line['lane_name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-groub mb-3">
          <label for="machine_name">Machine No</label>
          <select class="form-select" name="machine" aria-label="Default select example">
            <option value="<?= $tampil[0]['machine_no'] ?>"><?= $tampil[0]['machine_name'] ?></option>
            <?php foreach($masins as $mesin) :?>
              <option value="<?= $mesin['id_machine'] ?>"><?= $mesin['machine_name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group mb-3">
         <label for="viscosity">Viscosity</label>
         <input type="text" name="viscosity" class="form-control" id="viscosity" value="<?= $tampil[0]['viscosity'] ?>"> 
       </div>
       <div class="form-group mb-3">
         <label for="naoh">NaOH</label>
         <input type="text" name="naoh" class="form-control" id="naoh" value="<?= $tampil[0]['naoh'] ?>">
       </div>
       <div class="form-group mb-3">
         <label for="a-cellulose">A-Cellulose</label>
         <input type="text" name="a-cellulose" class="form-control" id="a-cellulose" value="<?= $tampil[0]['a-cellulose'] ?>">
       </div>
       <div class="form-group mb-3">
         <label for="tempratur">Temprature</label>
         <input type="text" name="tempratur" class="form-control" id="tempratur" value="<?= $tampil[0]['tempratur'] ?>" >
       </div>
       <div class="form-group mb-3">
         <label for="kw">KW</label>
         <input type="text" name="kw" class="form-control" id="kw" value="<?= $tampil[0]['kw'] ?>">
       </div>
       <div class="form-group mb-3">
         <button type="submit" class="btn btn-primary">Edit</button>
       </div>
     </form>

   </div>
 </div>
</div>
