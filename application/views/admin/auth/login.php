<div class="card">
  <div class="card-body login-card-body">
    <div class="login-logo">
        <a href="<?= base_url('')?>">
          <img src="<?= base_url(); ?>assets/dist/img/PA01.png" alt="PA Logo" class="brand-image" width="150px" style="opacity: .8">
        </a>
    </div>
    <!-- /.login-logo -->
    <p class="login-box-msg"><b>Log</b>-in Form</p>

    <form action="../../index3.html" method="post">
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
        <!-- /.col -->
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
    <!-- /.social-auth-links -->

    <p class="mb-1">
      <a href="forgot-password.html">Lupa password?</a>
    </p>
    <p class="mb-0">
      <a href="register.html  " class="text-center">Buat akun baru?</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->