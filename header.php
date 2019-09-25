<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <!-- Favicon-icon -->
  <link rel="icon" type="image/icon" href="<?php global $rasel; echo esc_url($rasel ['favicon'] ['url']); ?>">
  <!-- style css -->
  <link href="<?php esc_url(bloginfo('stylesheet_url')); ?>" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- header area start -->
<header id="header" class="header-area clearfix">
  <!-- menu area -->
  <?php echo get_template_part('templates/menu'); ?>
 <!-- banner area start -->
  <?php 
    if(is_page()){
      echo get_template_part('templates/banner');
    }
  ?>
  <!-- intro area -->
  <?php 
    $pagetemplarte = basename( get_page_template() );
    if(is_page()){
    if($pagetemplarte == "contact.php"){
      echo get_template_part('templates/contact-page-intro');
    }else {
       echo get_template_part('templates/all-page-intro');
    }
  }
  ?>
  <!-- banner area end -->
</header>
<!-- header area end -->