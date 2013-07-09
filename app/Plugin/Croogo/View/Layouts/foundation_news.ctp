<?php
/**
 * my Theme for Croogo frontend using foundation templete for bakery shop
 * for news page
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

			<!-- Nav Bar -->

			<div class="row">
				<div class="large-12 columns">
					<h1>Blog <small>This is my blog. It's awesome.</small></h1>
					<hr />
				</div>
			</div>

			<div class="row">

				<!-- Main Blog Content -->
				<div class="large-9 columns" role="content">

					<?php
					echo $this->Layout->sessionFlash();
					echo $content_for_layout;
					?>


				</div>


				<!-- End Main Content -->


				<!-- Sidebar -->

				<aside class="large-3 columns">

					<h5>Categories</h5>
					<div id="sidebar" class="grid_5">
						<?php echo $this->Regions->blocks('right'); ?>
					</div>


					<div class="panel">
						<h5>Featured</h5>
						<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
						<a href="#">Read More &rarr;</a>
					</div>

				</aside>

				<!-- End Sidebar -->
			</div>

		<!-- Managed By -->
			<div class="row">
				<div class="large-9 columns">
					<div class="panel">
						<div class="row">

							<div class="large-2 small-6 columns">
								<img src="http://placehold.it/300x300&text=Site Owner">
							</div>

							<div class="large-10 small-6 columns">
								<strong>This Site Is Managed By<hr/></strong>

								Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis
							</div>

						</div>
					</div>
				</div>

				<!-- End Managed By -->
			


		</div>

		<!-- Footer -->
		<?php echo $this->element('footer');?>
		<!-- Footer -->

	</div>


		<!-- init foundation js-->
		<script>document.write('<script src=/js/vendor/'+ ('__proto__' in {} ? 'zepto' : 'jquery')+ '.js><\/script>');</script>
		<script> $(document).foundation();</script>
	</body>



	</html>