<?php
	session_start();
	require_once 'Twig/Autoloader.php';
	require_once 'functions/functions.php';
	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader,array(
			'cache' => 'cache',
			'debug' => 'true'
		));

	$twig->addGlobal('asset', getBaseUrl());

	if(isset($_GET["page"])){
		if($_GET["page"] == "shoppingcart"){
			$template = $twig->loadTemplate('shoppingcart.php');
			echo $template->render(array());
		}else{
			$template = $twig->loadTemplate('home.php');
			echo $template->render(array());
		}
	}else{
		$template = $twig->loadTemplate('home.php');
		echo $template->render(array());
	}
?>