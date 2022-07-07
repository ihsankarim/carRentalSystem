<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                    <h2 class= "text-primary">NF Rental Car</h2>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
              <?php  
              if($this->session->flashdata('error') !='')
              {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
              }
              ?>
                <?php echo form_open('auth/register/save'); ?>
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username" autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="role">Password</label>
                    <input id="password" type="password" class="form-control" name="password">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="role">Role</label>
                    <input id="role" type="text" class="form-control" name="role">
                    <div class="invalid-feedback">
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
            If you already have an account, please <a href="<?= base_url('auth/login'); ?>" class="ml-2 btn btn-success btn-sm">Login</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kelompok 4 2022 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>