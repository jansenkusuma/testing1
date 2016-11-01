<?php
require_once "Twig/Autoloader.php";
Twig_Autoloader::register();

// konfigurasi twig
$loader = new Twig_Loader_Filesystem("templates/");
$twig = new Twig_Environment($loader);

if (! isset($_GET["name"])) {
	//echo $twig->render("form.html");
	$output = $twig->render("form.html");
} else {
	$placeholders = array("name"=>$_GET["name"]);
	$output = $twig->render("hello.html",$placeholders);
}
echo $output;
?>