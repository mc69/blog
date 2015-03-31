<?php
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
        Router::connect('/', array('controller' => 'posts', 'action' => 'index'));
        
        Router::connect('/tutos/*', array('controller'=>'posts','action'=>'display'));
        Router::connect('/sc/*', array('controller'=>'posts','action'=>'display2'));
        Router::connect('/tuto/*', array('controller'=>'posts','action'=>'view'));
        
        /*
        Router::connect('/posts/add/*', array('controller' => 'posts', 'action' => 'add'));
        Router::connect('/posts/delete/*', array('controller' => 'posts', 'action' => 'delete'));
         
        
        Router::connect('/tests/', array('controller' => 'categories', 'action' => 'index'));
        */
        
	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';
