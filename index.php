<?php include('connection.php'); ?>
<?php include('admin/modules/functions.php'); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Dinas PUPR</title>

<link rel='stylesheet' id='wp-block-library-css' href='assets/css/style.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='onepress-fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C500%2C600%2C700%2C300%2C100%2C800%2C900%7COpen+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=2.2.4' type='text/css' media='all' />
<link rel='stylesheet'  id='onepress-animate-css'  href='assets/css/animate.min.css?ver=2.2.4' type='text/css' media='all' />
<link rel='stylesheet'  id='onepress-fa-css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel='stylesheet'id='onepress-bootstrap-css' href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha512-92Uuf9KgednjnxHVHOfqG5XJ3RBBjs04YkL/CQ1h+AlBCLWupGLvqLzKFEH5ruQsyPFiZd7MwOTZuBFxinP7og==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel='stylesheet'  id='onepress-style-css' href='assets/css/style.css' type='text/css' media='all' />
<style id='onepress-style-inline-css' type='text/css'>
#main .video-section section.hero-slideshow-wrapper{background:transparent}.hero-slideshow-wrapper:after{position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0,0,0,0.3);display:block;content:""}.body-desktop .parallax-hero .hero-slideshow-wrapper:after{display:none!important}#parallax-hero>.parallax-bg::before{background-color:rgba(0,0,0,0.3);opacity:1}.body-desktop .parallax-hero .hero-slideshow-wrapper:after{display:none!important}.feature-item:hover .icon-background-default{color: #8abaae;}.page-header:not(.page--cover){text-align:center}.page-header.page--cover .entry-title{color:rgba(255,255,255,1)}.page-header .entry-title{color:rgba(255,255,255,1)}.site-header,.is-transparent .site-header.header-fixed{background: #8abaae;border-bottom:0px none}.onepress-menu>li>a{color:#fffafa}.onepress-menu>li>a:hover,.onepress-menu>li.onepress-current-item>a{color: #8abaae;-webkit-transition:all 0.5s ease-in-out;-moz-transition:all 0.5s ease-in-out;-o-transition:all 0.5s ease-in-out;transition:all 0.5s ease-in-out}@media screen and (min-width:1140px){.onepress-menu>li:last-child>a{padding-right:17px}.onepress-menu>li>a:hover,.onepress-menu>li.onepress-current-item>a{background:#fffafa;-webkit-transition:all 0.5s ease-in-out;-moz-transition:all 0.5s ease-in-out;-o-transition:all 0.5s ease-in-out;transition:all 0.5s ease-in-out}}#nav-toggle span,#nav-toggle span::before,#nav-toggle span::after,#nav-toggle.nav-is-visible span::before,#nav-toggle.nav-is-visible span::after{background:#1e73be}#page .site-branding .site-title,#page .site-branding .site-text-logo{color:#ffffff}#page .site-branding .site-description{color:#ffffff}.site-footer .site-info,.site-footer .btt a{background-color:#eeee22}.site-footer .site-info{color:#eeee22}.site-footer .btt a,.site-footer .site-info a{color:#eeee22}#footer-widgets{}.gallery-carousel .g-item{padding:0px 10px}.gallery-carousel{margin-left:-10px;margin-right:-10px}.gallery-grid .g-item,.gallery-masonry .g-item .inner{padding:10px}.gallery-grid,.gallery-masonry{margin:-10px}
</style>
<link rel='stylesheet' id='onepress-gallery-lightgallery-css'  href='assets/css/lightgallery.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='tablepress-default-css'  href='assets/css/tablepress-combined.min.css?ver=24' type='text/css' media='all' />
<link rel='stylesheet'  id='tablepress-responsive-tables-css' href='assets/css/tablepress-responsive.min.css?ver=1.7' type='text/css' media='all' />
<link rel='stylesheet'  id='elementor-icons-css' href='assets/css/elementor-icons.min.css?ver=5.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css' href='assets/css/animations.min.css?ver=2.9.14' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='assets/css/frontend.min.css?ver=2.9.14' type='text/css' media='all' />
<link rel='stylesheet'  id='elementor-post-25-css' href='assets/css/post-25.css?ver=1599188274' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.4.2' type='text/css' media='all' />
<link rel="stylesheet" id='elementor-icons-shared-0-css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha512-9BwLAVqqt6oFdXohPLuNHxhx36BVj5uGSGmizkmGkgl3uMSgNalKc/smum+GJU/TTP0jy0+ruwC3xNAk3F759A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/solid.min.css" integrity="sha512-ibzJoeQOXJtirP9oo3kW/BgT6BFgyGV8zyQwcS3Ar6MJrJ71pZ81p5frec1MyBzMlG7+/9us8F0665IBJ0VV5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type='text/javascript'>
/* <![CDATA[ */
var onepress_js_settings = {"onepress_disable_animation":"","onepress_disable_sticky_header":"0","onepress_vertical_align_menu":"0","hero_animation":"flipInX","hero_speed":"5000","hero_fade":"750","hero_duration":"5000","hero_disable_preload":"","is_home":"","gallery_enable":"1","is_rtl":""};
/* ]]> */
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js" integrity="sha512-t0ovA8ZOiDuaNN5DaQQpMn37SqIwp6avyoFQoW49hOmEYSRf8mTCY2jZkEVizDT+IZ9x+VHTZPpcaMA5t2d2zQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body class="home page-template page-template-elementor_header_footer page page-id-25 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-751 elementor-page elementor-page-25">
	<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<div id="header-section" class="h-below-hero no-transparent">
	<header id="masthead" class="site-header header-full-width is-sticky no-scroll no-t h-below-hero" role="banner">
	<div class="container">
	<div class="site-branding">
	<div class="site-brand-inner has-logo-img no-desc">
	<div class="site-logo-div"><a href="#" class="custom-logo-link  no-t-logo" rel="home" itemprop="url">
	<img width="33" height="33" src="logo.png" class="custom-logo"  itemprop="logo" /></a></div></div></div>
	<div class="header-right-wrapper">
	<a href="#0" id="nav-toggle">Menu<span></span></a>
	<nav id="site-navigation" class="main-navigation" role="navigation">
	<ul class="onepress-menu">    
<li id="menu-item-39" 
class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-25 current_page_item menu-item-39">
<a href="./" aria-current="page"><i class="fas fa-home"></i> Beranda </a></li>

<li id="menu-item-943" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-943">
<a href="./?m=pages&p=data-jembatan"><i class="fas fa-archway"></i> Data Jembatan</a></li>

<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15">
<a href="./?m=pages&p=peta-jembatan"><i class="fas fa-map-marked-alt"></i> Peta Jembatan</a></li>

<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15">
<a href="login.html"><i class="fas fa-user"></i> Login Admin</a></li>


</ul>
</nav>
<!-- #site-navigation -->
</div>
</div>
</header><!-- #masthead -->
</div>


<?php 
$file=htmlentities($_GET['p']);
$folder=htmlentities($_GET['m']);
$pagefolder= "$folder/$file.php";

if(!empty($file) and file_exists($pagefolder)){
	include("$pagefolder");
}elseif(!empty($file) and !file_exists($pagefolder)){
	include("pages/404.php");
}else{ 
	include('pages/dashboard.php');
}
?>


</div>
</body>
<script type='text/javascript' src='assets/js/plugins.js?ver=2.2.4'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js?ver=2.2.4'></script>
<script type='text/javascript' src='assets/js/theme.js?ver=2.2.4'></script>
<script type='text/javascript' src='assets/js/wp-embed.min.js?ver=5.4.2'></script>
</html>