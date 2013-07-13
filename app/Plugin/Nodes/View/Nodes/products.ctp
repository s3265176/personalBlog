

<!-- Navigation -->

<div class="row">
	<div class="large-3 columns">
		<div id='bake_icon'><?php echo $this->Html->image('Croogo.stamp-retina.png')?></div>
		
	</div>
	<div class="large-9 columns">
		<div class="nav-bar right">
			<ul class="button-group">
				<li><?php echo $this->Html->link(
					'Breads',
					'/products/breads',
					array('class'=>'button')
					);?>
				</li>
				<li><?php echo $this->Html->link(
					'Sweets & Cakes',
					'/products/sweets',
					array('class'=>'button')
					);?>
				</li>
				<li><?php echo $this->Html->link(
					'pies & drinks',
					'/products/pies',
					array('class'=>'button')
					);?>
				</li>
				<li><?php echo $this->Html->link(
					'Biscuits',
					'/products/biscuits',
					array('class'=>'button')
					);?>
				</li>
			</ul>
		</div>

	</div>
</div>
<!-- End Top Bar -->

<!-- End Navigation -->

<div id ="display_area"class="row">

	<!-- Side Bar -->

	<div class="large-4 small-12 columns">

		<div class="hide-for-small ">

			<h3 ><span style="font-size:160%;color:	#FF9900;">Most popular</span></h3>
			<div id ='product_display'>
				<?php echo $this->Html->image('Croogo.products/'.$popular)?>

				<p><?php echo $popular_description ?></p>
			</div>
		</div>

	</div>

	<!-- End Side Bar -->


	<!-- Thumbnails -->

	<div class="large-8 columns">
		<div class="row">
			<?php
			$id =1;
			foreach ($images as &$image)
			{	
				$parts = explode('&', $image);
				$info = explode('$', $parts[1]);
				$name =$info[0];
				$price='$'.$info[1];

				echo "<div class='large-4 small-6 columns'>";
				echo "<div id ='product_display'>";
				echo "<a href='' data-reveal-id='".$id."'>".$this->Html->image('Croogo.products/'.$image)."</a>";
				echo "<div >";
				echo "<h5 >".$name."</h5>";
				echo "<h6 class = 'subheader'>AU&nbsp&nbsp".$price."</h6>";
				echo "</div></div></div>";
				$id++;
			}
			?>
		</div>
		<!-- End Thumbnails -->

		<!-- Data reveal modal for each products-->
		<?php 
		$id =1; 
		foreach ($images as &$image)
		{


				//data reveal modal
			echo "<div class='reveal-modal xlarge' id='".$id."'>";
			echo "<h4>".$image."</h4>";
			echo "<p>".$this->Html->image('Croogo.products/'.$image)."</p>";
			echo "<a href='#' class='close-reveal-modal'>&times;</a>";
			echo "</div>";

			$id++;
		}
		?>
		<!-- End Data reveal modal for each products-->



	</div>
</div>
</div>

<div id='product_low'>
	<div class = 'row' id ='product_low_icons'>
		<div class="large-3 columns">
			<?php echo $this->Html->image('Croogo.Approval-icon.png')?>
			<span class ="product_low_icons_text ">High Quality</span>
			<hr>
		</div>
		<div class="large-3 columns">
			<?php echo $this->Html->image('Croogo.Money-icon.png')?>
			<span class ="product_low_icons_text ">Low price</span>
			<hr>
		</div>
		<div class="large-3 columns">
			<?php echo $this->Html->image('Croogo.Shop-icon.png')?>
			<span class ="product_low_icons_text ">Healthy</span>
			<hr>
		</div>
		<div class="large-3 columns">
			<?php echo $this->Html->image('Croogo.Sale-icon.png')?>
			<span class ="product_low_icons_text ">Order and Save</span>
			<hr>
		</div>
		<div class="large-3 columns">

		</div>
	</div>
</div>

