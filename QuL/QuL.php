<?php
ini_set("display_errors", true);

require_once "config.inc";
require_once "TiE_Default.inc";
require_once "View/QuL_View.class";

GLOBAL $_PW;
//$favicon = $_PW['IMAGES']."favicon.ico";
$app = new TiE_Program(1);
//$app->addInHeader("<link rel=\"shortcut icon\" href=\"".$favicon."\" type=\"image/png\" />");
//$app->addInHeader(style($_PW['CSS']."uatasoft.css"));
//$app->addInHeader(script($_PW['JS']."jquery.min.js"));
//$app->addInHeader(script($_PW['JS']."uatasoft.js"));
$app->setTitle("QuL");
$app->setClass("QuL_View");
$app->setDecorator("NULL");
$app->run();

?>