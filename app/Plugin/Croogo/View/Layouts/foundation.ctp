<?php
/**
 * my Theme for Croogo frontend using foundation templete for bakery shop
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @link http://www.croogo.org
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
	<?php
	echo $this->Meta->meta();
	echo $this->Layout->feed();

	echo $this->Html->css(array(
		
		'/croogo/css/foundation',

		'/croogo/css/theme',
		));
	echo $this->Layout->js();
	echo $this->Html->script(array(
		'/croogo/js/vendor/jquery',
		'/croogo/js/vendor/zepto',
		'/croogo/js/vendor/custom.modernizr',
		'/croogo/js/foundation.min',
		
		'/croogo/js/jquery/jquery.hoverIntent.minified',
		'/croogo/js/jquery/superfish',
		'/croogo/js/jquery/supersubs',
		'/croogo/js/theme',

		));
	echo $this->Blocks->get('css');
	echo $this->Blocks->get('script');
	?>
</head>

<body>
	<div id="wrapper">
		

		<?php echo $this->element('header_nav');?>


		<div id="main" >
			<?php
			echo $this->Layout->sessionFlash();
			echo $content_for_layout;
			?>
		</div>


		<!-- Footer -->
		<?php echo $this->element('footer');?>

	</div>






	<!-- init foundation js-->
	<script>document.write('<script src=/js/vendor/'+ ('__proto__' in {} ? 'zepto' : 'jquery')+ '.js><\/script>');</script>
	<script> $(document).foundation();</script>
</body>



</html>