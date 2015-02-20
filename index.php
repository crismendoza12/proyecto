<?php
	require_once 'Twig/Autoloader.php';

	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader,array(
		'cache' => 'cache',
		'debug' => 'true'
		));

	$template = $twig->loadTemplate('home.php');
	echo $template->render(array());
?>