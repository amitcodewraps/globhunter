

<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php the_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">
    
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icons.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/colors/colors.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
	<link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>
<body class="newbg">

<div class="theme-layout" id="scrollup">
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo">
				<a href="<?php get_home_url(); ?>" title="">
				<img src="<?php echo ot_get_option('logo'); ?>" alt="" /></a>
			</div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="" /> Menu
				</div>
				<div class="res-closemenu">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png" alt="" /> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			
			<div class="responsivemenu">
				<?php 
                       $defaults = array(
                       'menu'            => 'header_menu',
                       'container'       => false,
                       'menu_class'      => '',  
                       'echo'            => true,
                       'fallback_cb'     => 'wp_page_menu',
                       'items_wrap'      => '<ul class="">%3$s</ul>',
                    
                       'walker' => '',
                       );
                      wp_nav_menu( $defaults );
                    ?>
			</div>
		</div>
	</div>
	
	<header class="stick-top forsticky new-header">
			<div class="container1">
  <div class="title">
    <div>Together we&ensp;</div>
    <div class="word can">
      <span>C</span>
      <span>A</span>
      <span>N</span>
    </div>
    <div class="word will">
      <span>W</span>
      <span>I</span>
      <span>L</span>
      <span>L</span>
    </div>
    <div class="word thrive">
      <span>T</span>
      <span>H</span>
      <span>R</span>
      <span>I</span>
      <span>V</span>
      <span>E</span>
    </div>
  </div>
</div>
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>" title="">
						<img class="hidesticky" src="<?php echo get_template_directory_uri(); ?>/images/resource/logo.png" alt="" />

						<img class="showsticky" src="<?php echo ot_get_option('logo'); ?>" alt="" />
					</a>
				</div>

				<nav>
                   <?php 
                       $defaults = array(
                       'menu'            => 'header_menu',
                       'container'       => false,
                       'menu_class'      => '',  
                       'echo'            => true,
                       'fallback_cb'     => 'wp_page_menu',
                       'items_wrap'      => '<ul class="">%3$s</ul>',
                       'walker' => '',
                       );
                      wp_nav_menu( $defaults );
                    ?>

				</nav><!-- Menus -->
			</div>
		</div>
	</header>


