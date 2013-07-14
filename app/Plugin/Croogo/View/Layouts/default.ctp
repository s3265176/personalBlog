<?php
/**
 * Default Error Layout for Croogo CMS
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
	echo $this->Html->css(array(
		'/croogo/css/foundation',
		'/croogo/css/error',
		));
		?>
	</head>
	<body>
		<div id ='error_top'>
			<div id = 'error_center'>
				<?php
				echo $this->Layout->sessionFlash();
				echo $content_for_layout;

				echo $this->Html->image("Croogo.home-icon-l.png", array(
					"home" => "Brownies",
					'url' => '/',
					));
					?>


				</div>
			</div>

			<div id = 'error_bottom'>
			</div>


		</body>
		</html>