<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/LAB_SERVER/'.'routes.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/LAB_SERVER/'.'header.php');
// require_once($aRoutes['paths']['config'].'st_functions_generals.php');
require_once($aRoutes['paths']['config'].'bs_model.php');
$oLogin = new BSLogin();
$oLogin->IsLogged("admin");
$id = $_GET['user_id'];
if(empty($id)){
	header('Location: users.php');
}

$oModel = new BSModel();
$is_delete = $oModel->Destroy('usuarios',array('id' => $id));

if($is_delete===true){
	header('Location: users.php');
}


?>