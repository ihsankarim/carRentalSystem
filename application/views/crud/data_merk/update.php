      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?=$judul?></h1>
          </div>
          <?php
            $hidden = ['idedit'=>$mrkedit->id];
          ?>
          <?php echo form_open('admin/data_merk/save','', $hidden);?>
          <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="nama" name="nama" value="<?=$mrkedit->nama?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-outdent"></i>
          </div>
        </div> 
        <input id="produk" name="produk" value="<?=$mrkedit->produk?>" type="text" class="form-control">
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
      