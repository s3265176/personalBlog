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
			<!-- Main Page Content and Sidebar -->
			<div class="row">
				<!-- Contact Details -->
				<div class="large-9 columns">
					<h3>Get in Touch!</h3>
					<p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
					<div class="row">
						
						<div class="large-6 columns panel">
							<p><span class="label">Email:</span><br />
								&nbsp&nbsp&nbsp&nbsp wang1230ji@gmail.com
							</p>
							<p><span class="label">Phone:</span><br />
								&nbsp&nbsp&nbsp&nbsp 0433813332<br />
								&nbsp&nbsp&nbsp&nbsp 985919283


							</p>
							<p><span class="label">Open hour:</span><br />
									&nbsp&nbsp&nbsp&nbsp Monday to Satday: 6:00am -6:00pm<br />
									&nbsp&nbsp&nbsp&nbsp Sunday: 7:00am -4:00pm <br />
									&nbsp&nbsp&nbsp&nbsp public holiday: please check our news
							</p>
							<br />
							<br />
						</div>
						<div class="large-6 columns ">
							<?php
							echo $this->Layout->sessionFlash();
							echo $content_for_layout;
							?>
						</div>
					</div>
					
				</div>
				<!-- End Contact Details -->
				<!-- Sidebar -->

				<div class="large-3 columns">
					<h5>Map</h5>
					<!-- Clicking this placeholder fires the mapModal Reveal modal -->
					<p>
						<a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a><br />
						<a href="" data-reveal-id="mapModal">View Map</a>
					</p>
					<p>
						123 Awesome St.<br />
						Barsoom, MA 95155
					</p>
				</div>
				<!-- End Sidebar -->
			</div>
			<!-- End Main Content and Sidebar -->
			
			<!-- Map Modal -->
			<div class="reveal-modal" id="mapModal">
				<h4>Where We Are</h4>
				<p><img src="http://placehold.it/800x600" /></p>
				<!-- Any anchor with this class will close the modal. This also inherits certain styles, which can be overriden. -->
				<a href="#" class="close-reveal-modal">&times;</a>
			</div>
			
		</div>


		<!-- Footer -->
		<?php echo $this->element('footer');?>
		
	</div>






	<!-- init foundation js-->
	<script>document.write('<script src=/js/vendor/'+ ('__proto__' in {} ? 'zepto' : 'jquery')+ '.js><\/script>');</script>
	<script> $(document).foundation();</script>
</body>



</html>