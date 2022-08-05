<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('authentication/includes/head.php'); ?>
<style>
  button.btn.btn-primary.waves-effect.waves-light {
    background: blue;
    color: white;
}
</style>
<body class="login_admin" <?php if (is_rtl()) {
                            echo ' dir="rtl"';
                          } ?>>
  <!-- <div class="container">
  <div class="row">
   <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 authentication-form-wrapper">
    <div class="company-logo">
      <?php get_company_logo(); ?>
    </div>
    <div class="mtop40 authentication-form">
      <h1><?php echo _l('admin_auth_login_heading'); ?></h1>
      <?php $this->load->view('authentication/includes/alerts'); ?>
      <?php echo form_open($this->uri->uri_string()); ?>
      <?php echo validation_errors('<div class="alert alert-danger text-center">', '</div>'); ?>
      <?php hooks()->do_action('after_admin_login_form_start'); ?>
      
      <div class="form-group">
        <label for="email" class="control-label"><?php echo _l('admin_auth_login_email'); ?></label>
        <input type="email" id="email" name="email" class="form-control" autofocus="1">
      </div>
      <div class="form-group">
        <label for="password" class="control-label"><?php echo _l('admin_auth_login_password'); ?></label>
        <input type="password" id="password" name="password" class="form-control"></div>
        <?php if (show_recaptcha()) { ?>
        <div class="g-recaptcha" data-sitekey="<?php echo get_option('recaptcha_site_key'); ?>"></div>
        <?php } ?>
        <div class="checkbox">
          <label for="remember">
           <input type="checkbox" id="remember" name="remember"> <?php echo _l('admin_auth_login_remember_me'); ?>
         </label>
       </div>
       <div class="form-group">
        <button type="submit" class="btn btn-info btn-block"><?php echo _l('admin_auth_login_button'); ?></button>
      </div>
      <div class="form-group">
        <a href="<?php echo admin_url('authentication/forgot_password'); ?>"><?php echo _l('admin_auth_login_fp'); ?></a>
      </div>

      <?php hooks()->do_action('before_admin_login_form_close'); ?>
      <?php echo form_close(); ?>
    </div>
  </div>
</div> -->
  <div class="account-pages my-5 pt-sm-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
              <div class="row">
                <div class="col-7">
                  <div class="text-primary p-4">
                    <h5 class="text-primary">Welcome Back !</h5>
                    <p><?php echo _l('admin_auth_login_heading'); ?></p>
                    
                    <?php echo validation_errors('<div class="alert alert-danger text-center">', '</div>'); ?>
                    <?php hooks()->do_action('after_admin_login_form_start'); ?>
                  </div>
                </div>
                <div class="col-5 align-self-end">
                  <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                  
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="auth-logo">
                <a href="index.html" class="auth-logo-light">
                  <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                      <!-- <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34"> -->
                      <?php get_company_logo(); ?>
                    </span>
                  </div>
                </a>
                
              </div>
              <div class="p-2">
                <!-- <form class="form-horizontal" action=""> -->
                <?php $this->load->view('authentication/includes/alerts'); ?>
                    <?php echo form_open($this->uri->uri_string()); ?>
                  <div class="mb-3">
                    <label for="username" class="form-label"><?php echo _l('admin_auth_login_email'); ?></label>
                    <input type="email" id="email" name="email" class="form-control" autofocus="1">
                  </div>

                  <div class="mb-3">
                    <label class="form-label"><?php echo _l('admin_auth_login_password'); ?></label>
                    <div class="input-group auth-pass-inputgroup">
                      <input type="password" id="password" name="password" class="form-control"></div>
                    </div>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-check">
                    <label class="form-check-label" for="remember-check">
                      Remember me
                    </label>
                  </div>

                  <div class="mt-3 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                  </div>

                 
                <!-- </form> -->
                <?php hooks()->do_action('before_admin_login_form_close'); ?>
      <?php echo form_close(); ?>
              </div>

            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>