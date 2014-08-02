<?php

ini_set('include_path', 'C:\\Bitnami\\wappstack-5.4.30-0\\apache2\\htdocs\\uatasoft\\__TiE\\');
//var_dump(getcwd());

GLOBAL $DEFAULT_DB;
//$DEFAULT_DB = "pg://postgres:jc23met05@localhost/teste"; #banco://usuario:senha@servidor/base
$DEFAULT_DB = ""; #banco://usuario:senha@servidor/base

GLOBAL $_PW; #PATH_WEB
## ROOT ##
	if($_SERVER['HTTP_HOST'] == 'qul.us'){
		$_PW['ROOT'] = "http://".$_SERVER['HTTP_HOST']."/";		
	}else {
		$_PW['ROOT'] = "http://".$_SERVER['HTTP_HOST']."/uatasoft/qul/";
	}
############

$_PW['CONTROLLER'] = $_PW['ROOT']."Controller/";
$_PW['VIEW'] = $_PW['ROOT']."View/";

## LAYOUT ##
$_PW['LAYOUT'] = $_PW['VIEW']."Layout/";
$_PW['IMAGES'] = $_PW['LAYOUT']."Imagens/";
$_PW['CSS'] = $_PW['LAYOUT']."Css/";
$_PW['SCRIPTS'] = $_PW['VIEW']."Scripts/";
$_PW['JS'] = $_PW['SCRIPTS'];
############

require_once "View/Layout/QuL_Decorator.class";
GLOBAL $CUSTOM_DECORATOR;
$CUSTOM_DECORATOR = "QuL_Decorator";

session_start();
$_SESSION['page'];
session_write_close();

?>