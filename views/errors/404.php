<?php
	include_once('assets/php/functions.php');
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
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	

	<!-- CSS
  ================================================== -->

  	<link rel="stylesheet" href="<?php echo $GLOBALS['base'] ?>/assets/stylesheets/style.css">
	<link rel="stylesheet" href="<?php echo $GLOBALS['base'] ?>/assets/stylesheets/icons.css">
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
<?php echo $header_content; ?>
<?php echo $menu; ?>
		<p class="a-c">
			Something has gone awry. Head home and we will forget about the whole horrid&nbsp;business.
		</p>
		<? gohome() ?>
</div></div>
<?php echo $footer_content; ?>
<?php load_js(); ?>
<?php ga(); ?>
</body>
</html>