<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/LAB_SERVER/'.'routes.php');
require_once($aRoutes['paths']['config'].'bs_functions_generals.php');
require_once($aRoutes['paths']['config'].'bs_model.php');



$oModel = new BSModel();
$query = "SELECT radios.id as radio_id FROM radios left join parametros on radios.id = parametros.radio_id where radios.estado = 1 order by radios.id asc";
$aRadios= $oModel->Select($query);
$valor = 0;
$arr = array();

foreach ($aRadios as $radio) {
	$arr[] = array("radio_id" => $radio['radio_id']);
}


echo json_encode($arr);
?>