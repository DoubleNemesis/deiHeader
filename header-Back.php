<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<title><?php wp_title(''); ?></title>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/touch-icon-57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/touch-icon-72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/touch-icon-114.png" />

	<!-- Fonts -->
	<script src="https://use.typekit.net/yjy5xwb.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--MIKE STYLES-->

	<style>





	</style>

	<!--//MIKE STYLES-->


	<!-- CW 4 -->

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PG8TQD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PG8TQD');</script>
<!-- End Google Tag Manager -->

<header id="masthead" class="wrap">

<?php

	if( current_user_can( 'manage_options' ) )
	{
		include "modules/admininfopanel.php";
	}

?>

<style>
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: transparant;
}

.flex-container > div {
  background-color: transparant;
  align-items: center;
  justify-content: center;
  width: 100%;
  //margin: 10px;
  padding: auto;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}

.socialmediaSpan{
	letter-spacing: 5px;
	padding-top:10px;
}
.fa.fa-facebook, .fa.fa-twitter {
    font-family: "Font Awesome 5 Brands";
    font-weight: 400;
    padding-top: 10px;
    //font-size: 130%;
}
.fa.fa-twitter {
padding-right: 15px;
}
@media screen and (max-width:767px){
		.col-sm-12{
    position: relative;
    min-height: 1px;
    padding-left: 0px !important;
    padding-right: 0px;
	border: 1px solid white;
}
a#site-logo {

    margin-left: -10px;
}
	.mobSocMedLinks{
		display:inline;
	}
	.desktopSocMedLinks{
		display: none;
	}
	.desktopOnlyDei{
		display: none;
	}
}
@media screen and (min-width:768px) and (max-width:1023px){

	.mobSocMedLinks{
		display:inline;
	}
	.desktopSocMedLinks{
		display: none;
	}
	.desktopOnlyDei{
		display: inline;
	}
	.hideOnTablet{
		display:none;
	}
	#header-social-search{
		margin-left:18%;
	}
	ul.so0cial-links{
	display:none !important;
	}
	header #header-social-search {
  text-align: left;
	}
	header ul.social-links {
  display: inline-block !important;
  margin: 1rem 1rem 1rem -5rem !important;
	}
  .fa.fa-facebook, .fa.fa-twitter {
    padding-top:0px;
}
ul.social-links2{
	position:absolute;
}
}
@media screen and (min-width:1024px){
	.mobSocMedLinks{
		display:none;
	}
	.desktopSocMedLinks{
		display: inline;
	}
	.hideOnTablet{
		display:none;
	}

}

</style>
</head>
<body>

<!--social media desktop-->

<div class="desktopSocMedLinks" style="position: absolute; border: 1px solid white; margin-left: 70%; ">


<div>
		<span class="socialmediaSpan">			<?php if(get_field('facebook_url', 'option')){ ?>
						<a style="text-decoration:none; padding-top:100px;" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank"><i class="fa fa-facebook" style=""></i></a>
					<?php } ?>
			</span>
					<span class="socialmediaSpan">
					<?php if(get_field('twitter_url', 'option')){ ?>
						<a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i>
	</a>
					<?php } ?>
</span>

<span class="">
				<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="center">
					<button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
					<input type="text" name="s" id="s" placeholder="<?php esc_attr_e( "Search", "custom" ); ?>" />
				</form>
</span>

			</div>

</div>
<div class="flex-container desktopOnlyDei">


  <div style=""><a style="display:inline-block" id="site-logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
			</div>
</div>
<!--second-->
				<div class="container">

		<div class="mobSocMedLinks" id="branding" class="row">

			<div class="col-sm-12 hideOnTablet">
				<a id="site-logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
			</div>

			<div id="header-social-search" class="col-sm-12">

				<ul class="social-links">
					<?php if(get_field('facebook_url', 'option')){ ?>
						<li><a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i>
	</a></li>
					<?php } ?>
					<?php if(get_field('twitter_url', 'option')){ ?>
						<li><a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i>
	</a></li>
					<?php } ?>

				</ul>

				<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="center">
					<button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
					<input type="text" name="s" id="s" placeholder="<?php esc_attr_e( "Search", "custom" ); ?>" />
				</form>
				<div class="tabletSocMed" style="display:none">
								<ul class="social-links2">
					<?php if(get_field('facebook_url', 'option')){ ?>
						<li><a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i>
	</a></li>
					<?php } ?>
					<?php if(get_field('twitter_url', 'option')){ ?>
						<li><a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i>
	</a></li>
					<?php } ?>

				</ul>
				</div>

			</div>

		</div><!-- /branding -->
	</div>

<!--Logo-->

<!--Social Media Tablet+Mobile-->
		</div><!-- /branding -->
<div id="covid19"><br><br>We are proud to bring you our programme of regular events online. Click on ‘<a href="https://devonandexeterinstitution.org/isolation-creations/">Isolation Creations</a>’ or join us on Facebook and Twitter – stay connected.</div>
	</div>

</header>

<div id="navbar" class="wrap">

	<div class="container">

		<div id="primary-nav" class="row">
			<nav id="main-nav" role="navigation">
			<?php wp_nav_menu( array( 'menu'  => 'primary-navigation', 'theme_location' => 'primary', 'menu_id' => 'primary-nav-menu') ); ?>
			</nav>
		</div>

	</div>

</div>

<?php if(!is_front_page()){ ?>
	<?php get_template_part('breadcrumb'); ?>
<?php } ?>
