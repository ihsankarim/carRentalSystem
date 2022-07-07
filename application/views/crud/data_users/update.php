      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?=$judul?></h1>
          </div>
          <?php
          $hidden = ['idedit'=>$usersedit->id];
          ?>
          <?php echo form_open('admin/data_users/save','',$hidden);?>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="username" name="username" placeholder="username" type="text" class="form-control" value="<?= $usersedit->username ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-lock"></i>
          </div>
        </div> 
        <input id="password" name="password" placeholder="password" type="password" class="form-control" value="<?= $usersedit->username ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope-square" aria-hidden="true"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="email" type="text" class="form-control" value="<?= $usersedit->email ?>" required="riquired">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Role</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-universal-access"></i>
          </div>
        </div> 
        <input id="role" name="role" placeholder="role" type="text" class="form-control" value="<?= $usersedit->role ?>" required="riquired">
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
      