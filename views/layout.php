<?php

	if (isset($cat) && isset($slug)){
	    $obj = get_obj($cat, $slug);
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="svg"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo (isset($obj->name) ? $obj->name : (isset($title) ? $title : '')) ?> &#9633; I am Elliot Greenwood</title>
	<meta name="description" content="The portfolio of designer & developer Elliot Greenwood">
	<meta name="author" content="Elliot Greenwood">


	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">


	<!-- CSS
  ================================================== -->

  	<link rel="stylesheet" href="<?php echo $GLOBALS['base'] ?>/assets/stylesheets/elliot.css">
	<link rel="stylesheet" href="<?php echo $GLOBALS['base'] ?>/assets/stylesheets/icons.css?v=3">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="//use.typekit.net/vzk1lxp.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lte IE 7]><script src="javascript/lte-ie7.js"></script><![endif]-->


	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo $GLOBALS['base'] ?>/assets/images/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $GLOBALS['base'] ?>/assets/images/apple-touch-icon.png">

</head>
<!-- !Header -->
<body class="<?php echo (isset($class) ? $class : '') ?>">
	<div class="main-color"></div>
<?php echo $header_content; ?>
<?php echo $menu; ?>
<?php echo $body_content; ?>
<?php echo $footer_content; ?>
<?php load_js(isset($slider) && $slider ? true : false); ?>
<?php ga(); ?>
</body>
</html>
