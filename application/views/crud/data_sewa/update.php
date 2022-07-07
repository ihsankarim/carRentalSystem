      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?=$judul?></h1>
          </div>
          <?php
          $hidden = ['idedit'=>$sewaedit->id];
          ?>
          <?php echo form_open('admin/data_sewa/save','',$hidden);?>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Tanggal mulai</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="tanggal_mulai" name="tanggal_mulai" placeholder="tanggal_mulai mobil" type="date" class="form-control" value="<?= $sewaedit->tanggal_mulai ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Tanggal akhir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="tanggal_mulai" name="tanggal_akhir" placeholder="tanggal_mulai mobil" type="date" class="form-control" value="<?= $sewaedit->tanggal_akhir ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">tujuan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="tujuan" name="tujuan" placeholder="tujuan" type="text" class="form-control" value="<?= $sewaedit->tujuan ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">noktp</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="noktp" name="noktp" placeholder="noktp" type="text" class="form-control" value="<?= $sewaedit->noktp ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">users_id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="users_id" name="users_id" placeholder="users_id" type="text" class="form-control" value="<?= $sewaedit->users_id ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">mobil_id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="mobil_id" name="mobil_id" placeholder="mobil_id" type="text" class="form-control" value="<?= $sewaedit->mobil_id ?>" required="riquired">
      </div>
    </div>
  </div>



  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Buat Pesanan</button>
    </div>
</div>
  </div>
<?php echo form_close()?>
        </section>
      </div>
      