<?php

// Basic
CroogoRouter::connect('/', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'promoted'
	));

CroogoRouter::connect('/promoted/*', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'promoted'
	));

CroogoRouter::connect('/search/*', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'search'
	));

// Content types
CroogoRouter::contentType('blog');
CroogoRouter::contentType('node');
if (Configure::read('Install.installed')) {
	CroogoRouter::routableContentTypes();
}

// Page
CroogoRouter::connect('/about', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'view',
	'type' => 'page', 'slug' => 'about'
	));
CroogoRouter::connect('/page/:slug', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'view',
	'type' => 'page'
	));


//my add on
CroogoRouter::connect('/home', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'home'
	));

CroogoRouter::connect('/news', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'news'
	));

CroogoRouter::connect('/products', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'products'
	));

CroogoRouter::connect('/products/:type', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'products'
	),
	array('pass' => 'type')
);


