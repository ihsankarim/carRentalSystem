      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?=$judul?></h1>
          </div>
          <?php echo form_open_multipart('admin/data_mobil/save', 'entype');?>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nopol</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="nopol" name="nopol" placeholder="nopol mobil" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">warna</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="warna" name="warna" placeholder="warna mobil" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">biaya</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="biaya" name="biaya" placeholder="biaya" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="deskripsi" name="deskripsi" placeholder="deskripsi" type="textarea" class="form-control" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">cc</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="cc" name="cc" placeholder="cc" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">tahun</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="tahun" name="tahun" placeholder="tahun" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Merk ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="merk_id" name="merk_id" placeholder="merk_id" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>


  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">foto</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="foto" name="foto" placeholder="foto" type="file" class="form-control" required="riquired">
      </div>
    </div>
  </div>



  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
  </div>
<?php echo form_close()?>
        </section>
      </div>
      