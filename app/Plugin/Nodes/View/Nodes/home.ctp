 <div id = "head">
 	
 	<div class ="row">

 		<div class="large-3 columns panel" ><span class = 'head_text'style="color:#ff9640;">Try Our Coffee</span><hr ><?php  echo $this->Html->image('Croogo.Beverages-icon.png')?> <hr ></div>
 		<div class="large-3 columns panel" ><span class = 'head_text'style="color:#33cccc;">Always Open</span><hr ><?php  echo $this->Html->image('Croogo.Watch-icon.png')?><hr ></div>
 		<div class="large-3 columns panel" ><span class = 'head_text'style="color:#a69b00;">Lowest Price</span><hr ><?php  echo $this->Html->image('Croogo.Price_icon.png')?><hr ></div>
 		<div class="large-3 columns panel" ><span class = 'head_text'style="color:#2dd700;">Order and Save</span><hr ><?php  echo $this->Html->image('Croogo.Gift-icon.png')?><hr ></div>

 	</div>
 </div>
 <!-- End Header and Nav -->
 
 <!-- First Band (Slider) -->
 
 <div class="row">
 	<hr /><br /><br /><br />
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
 		<div class ='home_low_section'>
 			<?php echo $this->Html->image('Croogo.home_section/1.jpg');?>
 			<h4>This is a content section.</h4>
 			<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
 		</div>
 		
 	</div>
 	<div class="large-4 columns">
 		<div class ='home_low_section'>
 			<?php echo $this->Html->image('Croogo.home_section/2.jpg');?>
 			<h4>This is a content section.</h4>
 			<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
 		</div>
 		
 	</div>
 	<div class="large-4 columns">
 		<div class ='home_low_section'>
 			<?php echo $this->Html->image('Croogo.home_section/3.jpg');?>
 			<h4>This is a content section.</h4>
 			<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
 		</div>
 		
 	</div>
 </div>
 <!-- Call to Action Panel -->
 <div class="row">
 	<div class="large-12 columns">
 		<div class="panel" id="order_panel">
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
 
 