      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?=$judul?></h1>
          </div>
          <?php echo form_open('admin/jenis_perawatan/save');?>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jenis perawatan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="jenis" name="jenis" placeholder="jenis perawatan mobil" type="text" class="form-control" required="required">
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