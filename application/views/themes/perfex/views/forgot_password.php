<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>
   #page-topbar {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1002;
    background-color: #fff;
    -webkit-box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 3%);
    box-shadow: 0 .75rem 1.5remrgba(18,38,63,.03);
    height: 10vh;
}
form#forgot-password-form{
    margin: 11% 31%;
}
.col-md-12.text-center.forgot-password-heading {
    margin-top: 15%;
    margin-bottom: -8%;
}
</style>
<div class="mtop40">
  <div class="col-md-12 text-center forgot-password-heading">
    <h1 class="text-uppercase mbot20"><?php echo _l('customer_forgot_password_heading'); ?></h1>
  </div>
  <div class="col-md-12">
    <div class="panel_s">
      <div class="panel-body">
        <?php echo form_open($this->uri->uri_string(),['id'=>'forgot-password-form']); ?>
        <?php echo validation_errors('<div class="alert alert-danger text-center">', '</div>'); ?>
        <?php if($this->session->flashdata('message-danger')){ ?>
        <div class="alert alert-danger">
          <?php echo $this->session->flashdata('message-danger'); ?>
        </div>
        <?php } ?>
        <?php echo render_input('email','customer_forgot_password_email','','email'); ?>
        <div class="form-group">
          <button type="submit" class="btn btn-info btn-block mt-3 w-100"><?php echo _l('customer_forgot_password_submit'); ?></button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
