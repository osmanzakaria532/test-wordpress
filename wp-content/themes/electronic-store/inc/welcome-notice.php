<?php
/**
 * Getting Started Help Notic
 **/
function electronic_store_general_admin_notice(){
?>
<div data-dismissible="disable-done-notice-forever" class="notice notice-info electronic-store-welcome-notice">
    <div class="electronic-store-notice-wrapper">
        <div class="electronic-store-notice-inner">
            <div class="notice-thumbnail-col">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/img/shofy.webp'));?>" alt="<?php esc_attr_e('Shofy', 'electronic-store');?>">
            </div>
            <div class="notice-content-col">
              <h3>
               <?php esc_html_e('Thank you for installing the Electroic Store WordPress Theme.', 'electronic-store'); ?>
              </h3>
              <p class="notice-desc">
              <?php esc_html_e('Ready to create a stunning Ecommerce website? Click the Install Starter Website Templates button, and you\'ll be redirected to our demo page to get started.', 'electronic-store'); ?>
              </p>
              <p>
              <a class="electronic-store-btn-get-started button button-primary electronic-store-button-padding" href="#" data-name="" data-slug="">
                <?php esc_html_e( 'Install Starter Website Templates', 'electronic-store' );?>
              </a>
              <a href="<?php echo esc_url('https://rswpthemes.com/shofy/docs/');?>" class="button button-highlight btn-doc button-primary" style="color:#fff;">
                <?php esc_html_e( 'Documentation', 'electronic-store' );?>
                </a>
              <a href="<?php echo esc_url('https://rswpthemes.com/shofy/demo//');?>" class="button premium-demo-btn button-highlight btn-doc button-primary" style="color:#fff;">
                <?php esc_html_e( 'View Premium Demo', 'electronic-store' );?>
                </a>
            <a target="_blank" href="<?php echo esc_url(electronic_store_utm_url('welcome_notice'));?>" class="button button-highlight upgrade-to-pro button-primary">
                <?php esc_html_e( 'Upgrade To Pro', 'electronic-store' );?>
            </a>
            <a href="?electronic_store_notice_dismissed" style="text-decoration: none; float: right;">
              <?php esc_html_e( 'Dismiss Notice', 'electronic-store' );?>
            </a>
            </p>
            </div>
        </div>
    </div>
</div>
<?php
}

if ( isset( $_GET['electronic_store_notice_dismissed'] ) ){
   update_option('electronic_store_help_notice', 'notice_electronic_store_dismissed');
   set_transient('electronic_store_welcome_notice_dismissed_time', time(), 2 * 60 * 60);
}

add_action('admin_init', function(){
    $electronic_store_help_notice = get_option('electronic_store_help_notice', '');
    if('notice_electronic_store_dismissed' === $electronic_store_help_notice) {
        $dismissed_time = get_transient('electronic_store_welcome_notice_dismissed_time');
        if (false === $dismissed_time || time() > $dismissed_time + ( 2 * 60 * 60 )) {
            delete_option('electronic_store_notice_dismissed');
            delete_transient('electronic_store_welcome_notice_dismissed_time');
            add_action('admin_notices', 'electronic_store_general_admin_notice');
        }
    }
});

$electronic_store_help_notice = get_option('electronic_store_help_notice', '');
if (($electronic_store_help_notice != 'notice_electronic_store_dismissed' || $electronic_store_help_notice === '') ){
   add_action('admin_notices', 'electronic_store_general_admin_notice');
}

