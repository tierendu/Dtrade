<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<header id="banner" role="banner">
			<div class="container">
				<!-- logo-->
				<div class="span3">
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/dinar-trade-logo-top-left.jpg">
				</div>
				<!-- mid-logo w/slideshow (see style sheet) -->
				<div id="bg-slide-show" class="span6">
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/dinar-trade-logo-middle.png">
				</div>
				<!-- address -->
				<div class="span3 address">
					<h2>D Trade Inc</h2>
					<address>
						3960 Howard Hughes Pkwy Suite 500<br>
						Las Vegas, NV 89169<br>
						Tel: 702-749-8480<br>
						Toll Free: 877-770-7660<br>
						Email: <a href="mailto:sales@dinartrade.com">sales@dinartrade.com</a>
					</address>
				</div>
				<!-- currency ticker -->
				<div class="span9">
					<div>
						<h5>Korean Won to U.S. Dollar:</h5>
						<p>1182.15 <span class="green">▲ 1.510(0.128%)</span></p>
					</div>
					<div>
						<h5>Afghani to U.S. Dollar:</h5>
						<p>48.37 <span class="grey">○ N/A(N/A)</span></p>
					</div>
					<div>
						<h5>Iraqi Dinar to Canadian Dollar:</h5>
						<p>1120.3998 <span class="red">▼ -1.270(-0.113%)</span></p>
					</div>
				</div>
			</div>
		</header>			

		<div id="wrap" class="container" role="document">
			<div id="content" class="row">
				<aside id="sidebar" class="span3 verticle-navigation" role="complementary">
					<!-- main verticle navigation -->
					<ul class="nav">
						<li><a href="#‎">Home page</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Order / buy Dinar</a></li>
						<li><a href="#">Buy other currencies</a></li>
						<li><a href="#">Guaranteed reserve</a></li>
						<li><a href="#">Sell your Dinars</a></li>
						<li><a href="#">Questions</a></li>
						<li><a href="#">Iraq monetary history</a></li>
						<li><a href="#">Latest news</a></li>
						<li><a href="#">track your order</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
					
					<br>
					<!-- -->
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/Registered.jpg">
					<!-- -->
					<div class="content-box feed-back">
						<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/customer-feedback-title.png">
						<p>"I ordered online to be delivered COD. The package arrived when expected with the correct amount of dinars. I was ready with the cashier's check, so it all..."</p>
						<h5>Tyler, USA, Texas</h5>
						<img class="button-feed-back" src="<?php echo bloginfo('stylesheet_directory'); ?>/images/button-view-feedback.png">
					</div>
					<!-- -->
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/banner-bbb.jpg">
					<!-- -->
					<div class="content-box note-demo">
						<h4>25,000<br>New Iraqi Dinar Note</h4>
						<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/note-25-dinar.jpg">
						<hr>
						<h4>10,000<br>New Iraqi Dinar Note</h4>
						<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/note-10-dinar.jpg">
					</div>
					</ul>
				</aside>