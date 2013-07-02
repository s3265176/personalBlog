<div id="header">
	<h1 class="site-title"><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?></h1>
	<span class="site-tagline"><?php echo Configure::read('Site.tagline'); ?></span>	
</div>

<div id="nav">
	<?php echo $this->Menus->menu('main', array('dropdown' => true)); ?>
</div>