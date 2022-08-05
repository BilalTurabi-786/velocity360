<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

          

<!-- <nav class="navbar navbar-default header">
   <div class="container">
      
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#theme-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <?php get_company_logo('','navbar-brand logo'); ?>
      </div>
     
      <div class="collapse navbar-collapse" id="theme-navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
            <?php hooks()->do_action('customers_navigation_start'); ?>
            <?php foreach($menu as $item_id => $item) { ?>
               <li class="customers-nav-item-<?php echo $item_id; ?>"
                  <?php echo _attributes_to_string(isset($item['li_attributes']) ? $item['li_attributes'] : []); ?>>
                  <a href="<?php echo $item['href']; ?>"
                     <?php echo _attributes_to_string(isset($item['href_attributes']) ? $item['href_attributes'] : []); ?>>
                     <?php
                     if(!empty($item['icon'])){
                        echo '<i class="'.$item['icon'].'"></i> ';
                     }
                     echo $item['name'];
                     ?>
                  </a>
               </li>
            <?php } ?>
            <?php hooks()->do_action('customers_navigation_end'); ?>
            <?php if(is_client_logged_in()) { ?>
               <li class="dropdown customers-nav-item-profile">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <img src="<?php echo contact_profile_image_url($contact->id,'thumb'); ?>" data-toggle="tooltip" data-title="<?php echo html_escape($contact->firstname . ' ' .$contact->lastname); ?>" data-placement="bottom" class="client-profile-image-small mright5">
                     <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu animated fadeIn">
                     <li class="customers-nav-item-edit-profile">
                        <a href="<?php echo site_url('clients/profile'); ?>">
                           <?php echo _l('clients_nav_profile'); ?>
                        </a>
                     </li>
                     <?php if($contact->is_primary == 1){ ?>
                        <?php if(can_loggged_in_user_manage_contacts()) { ?>
                           <li class="customers-nav-item-edit-profile">
                              <a href="<?php echo site_url('contacts'); ?>">
                                 <?php echo _l('clients_nav_contacts'); ?>
                              </a>
                           </li>
                        <?php } ?>
                        <li class="customers-nav-item-company-info">
                           <a href="<?php echo site_url('clients/company'); ?>">
                              <?php echo _l('client_company_info'); ?>
                           </a>
                        </li>
                     <?php } ?>
                     <?php if(can_logged_in_contact_update_credit_card()){ ?>
                        <li class="customers-nav-item-stripe-card">
                           <a href="<?php echo site_url('clients/credit_card'); ?>">
                              <?php echo _l('credit_card'); ?>
                           </a>
                        </li>
                     <?php } ?>
                     <?php if (is_gdpr() && get_option('show_gdpr_in_customers_menu') == '1') { ?>
                        <li class="customers-nav-item-announcements">
                           <a href="<?php echo site_url('clients/gdpr'); ?>">
                              <?php echo _l('gdpr_short'); ?>
                           </a>
                        </li>
                     <?php } ?>
                     <li class="customers-nav-item-announcements">
                        <a href="<?php echo site_url('clients/announcements'); ?>">
                           <?php echo _l('announcements'); ?>
                           <?php if($total_undismissed_announcements != 0){ ?>
                              <span class="badge"><?php echo $total_undismissed_announcements; ?></span>
                           <?php } ?>
                        </a>
                     </li>
                     <?php if(!is_language_disabled()) {
                        ?>
                        <li class="dropdown-submenu pull-left customers-nav-item-languages">
                           <a href="#" tabindex="-1">
                              <?php echo _l('language'); ?>
                           </a>
                           <ul class="dropdown-menu dropdown-menu-left">
                              <li class="<?php if(get_contact_language() == ""){echo 'active';} ?>">
                                 <a href="<?php echo site_url('clients/change_language'); ?>">
                                    <?php echo _l('system_default_string'); ?>
                                 </a>
                              </li>
                              <?php foreach($this->app->get_available_languages() as $user_lang) { ?>
                                 <li <?php if(get_contact_language() == $user_lang){echo 'class="active"';} ?>>
                                    <a href="<?php echo site_url('clients/change_language/'.$user_lang); ?>">
                                       <?php echo ucfirst($user_lang); ?>
                                    </a>
                                 </li>
                              <?php } ?>
                           </ul>
                        </li>
                     <?php } ?>
                     <li class="customers-nav-item-logout">
                        <a href="<?php echo site_url('authentication/logout'); ?>">
                           <?php echo _l('clients_nav_logout'); ?>
                        </a>
                     </li>
                  </ul>
               </li>
            <?php } ?>
            <?php hooks()->do_action('customers_navigation_after_profile'); ?>
         </ul>
      </div>
     
   </div>
  
</nav> -->
<header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-light.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="19">
                            </span>
                        </a>
                    </div>

                    

                    <!-- App Search-->
                    <?php hooks()->do_action('customers_navigation_start'); ?>
            <?php foreach($menu as $item_id => $item) { ?>
               <li class="customers-nav-item-<?php echo $item_id; ?>"
                  <?php echo _attributes_to_string(isset($item['li_attributes']) ? $item['li_attributes'] : []); ?>>
                  <a href="<?php echo $item['href']; ?>"
                     <?php echo _attributes_to_string(isset($item['href_attributes']) ? $item['href_attributes'] : []); ?>>
                     <?php
                     if(!empty($item['icon'])){
                        echo '<i class="'.$item['icon'].'"></i> ';
                     }
                     echo $item['name'];
                     ?>
                  </a>
               </li>
            <?php } ?>
            <?php hooks()->do_action('customers_navigation_end'); ?>

                    
                </div>

                <div class="d-flex">

                
            <?php hooks()->do_action('customers_navigation_after_profile'); ?>
            <?php if(is_client_logged_in()) { ?>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?php echo contact_profile_image_url($contact->id,'thumb'); ?>"
                            alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo html_escape($contact->firstname . ' ' .$contact->lastname); ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
               <!-- <li class="dropdown customers-nav-item-profile"> -->
                  <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <img src="" data-toggle="tooltip" data-title="" data-placement="bottom" class="client-profile-image-small mright5">
                     <span class="caret"></span>
                  </a> -->
                  <!-- <ul class="dropdown-menu animated fadeIn">
                     <li class="customers-nav-item-edit-profile"> -->
                        <a class="dropdown-item" href="<?php echo site_url('clients/profile'); ?>">
                           <?php echo _l('clients_nav_profile'); ?>
                        </a>
                     <!-- </li> -->
                     <?php if($contact->is_primary == 1){ ?>
                        <?php if(can_loggged_in_user_manage_contacts()) { ?>
                           <!-- <li class="customers-nav-item-edit-profile"> -->
                              <a class="dropdown-item" href="<?php echo site_url('contacts'); ?>">
                                 <?php echo _l('clients_nav_contacts'); ?>
                              </a>
                           <!-- </li> -->
                        <?php } ?>
                        <!-- <li class="customers-nav-item-company-info"> -->
                           <a class="dropdown-item" href="<?php echo site_url('clients/company'); ?>">
                              <?php echo _l('client_company_info'); ?>
                           </a>
                        <!-- </li> -->
                     <?php } ?>
                     <?php if(can_logged_in_contact_update_credit_card()){ ?>
                        <!-- <li class="customers-nav-item-stripe-card"> -->
                           <a class="dropdown-item" href="<?php echo site_url('clients/credit_card'); ?>">
                              <?php echo _l('credit_card'); ?>
                           </a>
                        <!-- </li> -->
                     <?php } ?>
                     <?php if (is_gdpr() && get_option('show_gdpr_in_customers_menu') == '1') { ?>
                        <!-- <li class="customers-nav-item-announcements"> -->
                           <a class="dropdown-item" href="<?php echo site_url('clients/gdpr'); ?>">
                              <?php echo _l('gdpr_short'); ?>
                           </a>
                        <!-- </li> -->
                     <?php } ?>
                     <!-- <li class="customers-nav-item-announcements"> -->
                        <a class="dropdown-item" href="<?php echo site_url('clients/announcements'); ?>">
                           <?php echo _l('announcements'); ?>
                           <?php if($total_undismissed_announcements != 0){ ?>
                              <span class="badge"><?php echo $total_undismissed_announcements; ?></span>
                           <?php } ?>
                        </a>
                     <!-- </li> -->
                     <?php if(!is_language_disabled()) {
                        ?>
                        <!-- <li class="dropdown-submenu pull-left customers-nav-item-languages"> -->
                           <a class="dropdown-item" href="#" tabindex="-1">
                              <?php echo _l('language'); ?>
                           </a>
                           <ul class="dropdown-menu dropdown-menu-left">
                              <li class="<?php if(get_contact_language() == ""){echo 'active';} ?>">
                                 <a class="dropdown-item" href="<?php echo site_url('clients/change_language'); ?>">
                                    <?php echo _l('system_default_string'); ?>
                                 </a>
                              </li>
                              <?php foreach($this->app->get_available_languages() as $user_lang) { ?>
                                 <li <?php if(get_contact_language() == $user_lang){echo 'class="active"';} ?>>
                                    <a class="dropdown-item" href="<?php echo site_url('clients/change_language/'.$user_lang); ?>">
                                       <?php echo ucfirst($user_lang); ?>
                                    </a>
                                 </li>
                              <?php } ?>
                           </ul>
                        <!-- </li> -->
                     <?php } ?>
                     <!-- <li class="customers-nav-item-logout"> -->
                        <a class="dropdown-item" href="<?php echo site_url('authentication/logout'); ?>">
                           <?php echo _l('clients_nav_logout'); ?>
                        </a>
                     <!-- </li> -->
                     
                  <!-- </ul> -->
               <!-- </li> -->
            <?php } ?>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>
