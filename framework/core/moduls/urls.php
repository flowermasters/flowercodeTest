<?php
/*
URLS.php это файл ЧПУ
на самом верху пишется путь к файлу которому мы хотим работать урлами
И это всегда должны быть файлы приложений с концом Url.php
 */
require BASE_DIR . '/apps/Admin/AdminUrl.php';
require BASE_DIR . '/apps/Test/TestUrl.php';

function url($ur = '',$className,$name ){

    $url = $_SERVER['REQUEST_URI'];
	if($ur === $url){
	$con = new $className;
	$con->$name();
	};
}