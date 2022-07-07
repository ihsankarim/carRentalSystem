      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?=$judul?></h1>
          </div>
          <?php echo form_open('admin/data_perawatan/save');?>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" placeholder="yy-mm-dd" type="date" class="form-control" required="riquired">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-currency-dollar"></i>
          </div>
        </div> 
        <input id="biaya" name="biaya" placeholder="Rp......" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">KM Mobil</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-compass"></i>
          </div>
        </div> 
        <input id="text" name="km_mobil" placeholder="KM" type="km_mobil" class="form-control" required="riquired">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fa fa-receipt"></i>
          </div>
        </div> 
        <input id="deskripsi" name="deskripsi" type="text" class="form-control" required="riquired">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select2" class="col-4 col-form-label">Mobil ID</label>
    <div class="col-8">
      <select id="mobil_id" name="mobil_id" class="custom-select" required>
        <option value="-">Mobil ID</option>
        <option value="1" id="mobil_id" name="mobil_id" required>1</option>
        <option value="2" id="mobil_id" name="mobil_id" required>2</option>
      </select>
    </div>
  </div>

    <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jenis Perawatan ID</label> 
    <div class="col-8">
      <select id="jenis_perawatan_id" name="jenis_perawatan_id" class="custom-select" required>
        <option value="-" required>Jenis Perawatan ID</option>
        <option value="1" id="jenis_perawatan_id" name="jenis_perawatan_id" required>1</option>
        <option value="2" id="jenis_perawatan_id" name="jenis_perawatan_id" required>2</option>
        <option value="3" id="jenis_perawatan_id" name="jenis_perawatan_id" required>3</option>
        <option value="4" id="jenis_perawatan_id" name="jenis_perawatan_id" required>4</option>
      </select>
    </div>
  </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
    </div>
</div>
  </div>
<?php echo form_close()?>
        </section>
      </div>
      