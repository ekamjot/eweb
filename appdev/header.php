<?php
/**
 * Header Template
 *
 * This template is loaded for displaying header information for the website. Called from every page of the website.
 *
 * @package Appdev
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php wp_title('|', true, 'right');
        bloginfo('name'); ?></title>

    <!-- For use in JS files -->
    <script type="text/javascript">
        var template_dir = "<?php echo get_template_directory_uri(); ?>";
    </script>

    <link rel="profile" href="http://gmpg.org/xfn/11"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php mo_setup_theme_options_for_scripts(); ?>

    <?php wp_head(); // wp_head  ?>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106001651-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<script>
function contact_viewPlan(target){
	//alert(target);
	var target_radio = "radio-enter";
	switch (target){
		case 'enter':
		target_radio = "radio-enter";
		//alert("enter");
		break;
		
		case 'basic':
		target_radio = "radio-basic";
		//alert("basic");
		break;

		case 'business':
		target_radio = "radio-business";
		//alert("business");
		break;

		default:
		target_radio = "radio-enter";
		break;
	}
	if ( target_radio != "" ){
		document.getElementById(target_radio).checked = true;
	}
	
}
</script>

<body <?php body_class(); ?>>

<?php mo_exec_action('start_body'); ?>

<div id="container">

    <?php mo_exec_action('before_header'); ?>

    <div id="header">

        <div class="inner clearfix">

            <div class="wrap">

                <?php mo_exec_action('start_header');

                mo_site_logo();

                mo_site_description();

                mo_exec_action('header');

                mo_display_app_button_or_socials();

                echo '<a id="mobile-menu-toggle" href="#"><i class="icon-list-3"></i>&nbsp;</a>';

                get_template_part('menu', 'primary'); // Loads the menu-primary.php template.

                mo_exec_action('end_header'); ?>

                <?php if (mo_is_woocommerce_activated()) {
                    mo_display_cart_in_header();
                }?>

            </div>

        </div>

    </div>
    <!-- #header -->

    <?php get_template_part('menu', 'mobile'); // Loads the menu-mobile.php template.    ?>

    <?php mo_exec_action('after_header'); ?>

    <?php mo_populate_top_area(); ?>

    <div id="main" class="clearfix">

        <?php mo_exec_action('start_main'); ?>

        <div class="inner clearfix">