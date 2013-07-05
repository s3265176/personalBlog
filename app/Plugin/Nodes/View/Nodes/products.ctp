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

			<img src="http://placehold.it/500x500&text=Logo">

			<div class="hide-for-small panel">
				<h3>Most popular</h3>
				<h5 class="subheader">Description of the most popular products</h5>
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
					echo "<div class='large-4 small-6 columns'>";
					echo "<a href='' data-reveal-id='".$id."'>".$this->Html->image('Croogo.products/'.$image)."</a>";
					echo "<div class = 'panel'>";
					echo "<h5>".$image."</h5>";
					echo "<h6 class = 'subheader'>".$image."</h6>";
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
				echo "<div class='reveal-modal expand' id='".$id."'>";
				echo "<h4>".$image."</h4>";
				echo "<p>".$this->Html->image('Croogo.products/'.$image)."</p>";
				echo "<a href='#' class='close-reveal-modal'>&times;</a>";
				echo "</div>";

				$id++;
			}
			?>
			<!-- End Data reveal modal for each products-->

			<!-- Managed By -->
			<div class="row">
				<div class="large-12 columns">
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
		</div>
	</div>




</div>
</div>