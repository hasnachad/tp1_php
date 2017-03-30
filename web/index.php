<?php
use Core\Auth\DBAuth; //cnx login
define('ROOT', dirname(__DIR__));//on va definir le dossier parent//appnewsite
require ROOT.'/app/App.php';
App::load();

if (isset($_GET['p'])) { //p pas définit.
	$page = $_GET['p'];
}else{
	$page = "home"; //la page = home
}

//////////////bouton connect 
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if ($auth->logged()) {
	$connect = "Disconnect";
}else{
	$connect = "login";
}
/////////////////////////

ob_start(); //tt va etre stocké ds une var
if ($page==='home') {
	require ROOT.'/pages/index.php'; //

}elseif ($page==='utilisateurs') {
	require ROOT.'/pages/utilisateurs/index.php';

}elseif ($page==='utilisateurs.service') {
	require ROOT.'/pages/utilisateurs/service.php';
	////suite route basic
}elseif ($page==='login') {
	require ROOT.'/pages/users/login.php';
}elseif ($page==='Disconnect') {
	require ROOT.'/pages/users/disconnect.php';
}elseif ($page==='403') {
	require ROOT.'/pages/errors/403.php';
}else{//page 404
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean();
require ROOT.'/pages/templates/default.php'; //c'est ce quon va avoir sur ttes les pages