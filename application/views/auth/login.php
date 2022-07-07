<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <!-- <div class="login-brand">
              <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div> -->

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
              <?php echo form_open('auth/login/otentikasi'); ?>
              <div class="card-body">
                <form method="POST" action="" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>

                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required="required">
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>



                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <?php echo form_close()?>



              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?= base_url('auth/register'); ?>" class="btn btn-success btn-sm">Create One</a>
            </div>
            <div class="simple-footer">
            Copyright &copy; Kelompok 4 2022 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>