<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php if (isset($title)){ echo $title; } ?></title>
	<?php echo compile_theme_css(); ?>
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap.min.css');?>">
	<!-- <link rel="stylesheet" href="<?php //echo base_url('assets/css/bs-overides.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/app.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/icons.min.css');?>">
	<link rel="stylesheet" href="<?php //echo base_url('assets/css/custom.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css');?>"> -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
	<!-- <script src="<?php //echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    
	<script src="<?php //echo base_url('assets/libs/jquery/jquery.min.js'); ?>"></script> -->
    <script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/node-waves/waves.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>

	<?php app_customers_head(); ?>
	<style>
		.navbar-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: inherit;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.collapse:not(.show) {
    display: flex;
}
li {
    list-style: none;
    padding: 23px;
    font-size: 14px;
    /* color: black; */
}
#wrapper {
    margin: 0 0 0 -36px;}
	ul.submenu.customer-top-submenu {
    margin-top: 7%;
    display: flex;
    margin-bottom: 0%;
}
a {
    color: black;
}
	</style>
</head>
<body class="customers <?php echo strtolower($this->agent->browser()); ?><?php if(is_mobile()){echo ' mobile';}?><?php if(isset($bodyclass)){echo ' ' . $bodyclass; } ?>" <?php if($isRTL == 'true'){ echo 'dir="rtl"';} ?>>
	<?php hooks()->do_action('customers_after_body_start'); ?>
