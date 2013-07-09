 <div class="row">
 	<div class="large-3 columns">
 		<h1><img src="http://placehold.it/400x100&text=Logo" /></h1>
 	</div>
 	<div class="large-9 columns">
 		<ul class="right button-group">
 			<li><a href="#" class="button">Link 1</a></li>
 			<li><a href="#" class="button">Link 2</a></li>
 			<li><a href="#" class="button">Link 3</a></li>
 			<li><a href="#" class="button">Link 4</a></li>
 		</ul>
 	</div>
 </div>
 <!-- End Header and Nav -->
 
 <!-- First Band (Slider) -->
 
 <div class="row">
 	<div class="large-12 columns">
 		<div id="slider">
 			<ul data-orbit>

 				<?php
 				foreach ($images as $image ) {
 					$parts = explode(".", $image);
 					$description = $parts[0];
 					echo '<li>';
 					echo $this->Html->image('Croogo.home_slider/'.$image);
 					echo "<div class='orbit-caption'>".$description."</div>";
 					echo '</li>';
 				}
 				?>

 			</ul>
 			
 		</div>
 		<hr />
 	</div>
 </div>
 <!-- Three-up Content Blocks -->
 
 <div class="row">
 	<div class="large-4 columns">
 		<?php echo $this->Html->image('Croogo.home_section/1.jpg');?>
 		<h4>This is a content section.</h4>
 		<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
 	</div>
 	<div class="large-4 columns">
 		<?php echo $this->Html->image('Croogo.home_section/2.jpg');?>
 		<h4>This is a content section.</h4>
 		<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
 	</div>
 	<div class="large-4 columns">
 		<?php echo $this->Html->image('Croogo.home_section/3.jpg');?>
 		<h4>This is a content section.</h4>
 		<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
 	</div>
 </div>
 <!-- Call to Action Panel -->
 <div class="row">
 	<div class="large-12 columns">
 		<div class="panel">
 			<h4>Seems delicious?</h4>
 			<div class="row">
 				<div class="large-9 columns">
 					<p>why not make a order now!</p>
 				</div>
 				<div class="large-3 columns">
 					<a href="/personalBlog/contact" class="radius button right">Contact Us</a>
 					
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 
 