<div class="row">
	<div class="large-12 columns">
		
		<!-- Navigation -->
		
		<div class="row">
			<div class="large-12 columns">
				<div class="nav-bar right">
					<ul class="button-group">
						<li><?php echo $this->Html->link(
							'Breads',
							'/products/breads',
							array('class'=>'button')
							);?></li>
						<li><?php echo $this->Html->link(
							'Sweets & Cakes',
							'/products/sweets',
							array('class'=>'button')
							);?></li>
						<li><?php echo $this->Html->link(
							'pies & drinks',
							'/products/pies',
							array('class'=>'button')
							);?></li>
						<li><?php echo $this->Html->link(
							'Biscuits',
							'/products/biscuits',
							array('class'=>'button')
							);?></li>
						</ul>
					</div>

				</div>
			</div>
			<!-- End Top Bar -->
		</div>
	</div>

	<!-- End Navigation -->

	<div class="row">

		<!-- Side Bar -->

		<div class="large-4 small-12 columns">

			<div class="hide-for-small panel">
				<h3>Most popular</h3>
				<?php echo $this->Html->image('Croogo.products/'.$popular)?>

				<h5 class="subheader"><?php echo $popular_description ?></h5>
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
					echo "<a href='' data-reveal-id='".$id."'>".$this->Html->image('Croogo.products/'.$image)."</a>";
					echo "<div class = 'panel'>";
					echo "<h5>".$name."</h5>";
					echo "<h6 class = 'subheader'>".$price."</h6>";
					echo "</div></div>";
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




</div>
</div>