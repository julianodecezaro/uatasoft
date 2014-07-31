<?php
/*
Valores Anúncios:
- 10 dias gratuito
- 10 - 60 dias 9,99
- 60 - 90 dias 19,99
- 90 - 120 dias 29,99
- 120 - 180 dias - 39,99

*/
//error_reporting(E_ALL);


/**
 * Programa que gera a página principal do site.
 * @author  Juliano S. De Cezaro <julianodecezaro@uatasoft.com.br>
 * @version 1.0.0 criada em 24/07/2014 às 20:23
 * 
 */
ini_set("display_errors", true);

require_once "config.inc";
require_once "TiE_Default.inc";
require_once "View/Index_View.class";
require_once "Controller/Index_Controller.class";

GLOBAL $_PW;
//$favicon = $_PW['IMAGES']."favicon.ico";
$app = new TiE_Program(1);
//$app->addInHeader("<link rel=\"shortcut icon\" href=\"".$favicon."\" type=\"image/png\" />");
//$app->addInHeader(style($_PW['CSS']."uatasoft.css"));
//$app->addInHeader(script($_PW['JS']."jquery.min.js"));
//$app->addInHeader(script($_PW['JS']."uatasoft.js"));
$app->setTitle("QuL");
$app->setClass("Index_View");
//$app->setDecorator("QuL");
$app->run();

?>