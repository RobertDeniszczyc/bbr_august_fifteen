<?php ?>
<!DOCTYPE html>
<html>
<head>
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?>
</title>
<meta name="description" content="<?php if ( is_single() ) {
	single_post_title('', true);
	} else {
	bloginfo('name'); echo " - "; bloginfo('description');
	}
?>" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1" />
<meta http-equiv="ClearType" content="true" />

<!-- The little things -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo bloginfo('template_directory'); ?>/apple-touch-icon-precomposed.png"/>
<!-- The little things -->

<!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/style.css" />
<!-- Stylesheets -->

<!-- Load scripts quick smart -->


</head>

<body <?php body_class(); ?> id="top">
            <?php if ( has_nav_menu( 'menu' ) ) : wp_nav_menu(); else : ?>
<nav class="navbar">
      <div class="container">
        <div class="navbar-header navbar-header_left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-nav_right">
          	<?php wp_list_pages( 'title_li=&depth=-1 exclude=2'  ); ?>
      	  </ul>
      	  </div>
  	  </div>
  </nav>
<?php endif; ?>
    <header role="banner">
        <p class="desc">
			<?php bloginfo( 'description' ); ?>
        </p>


        
        <!-- I want to hide the search form !-->
        <?php// get_search_form(); ?>
    </header>