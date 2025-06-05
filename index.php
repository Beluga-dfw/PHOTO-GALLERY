<?php
require_once 'controllers/Index_costume_Controller.php';

$controller = new CostumeController();
$costumes = $controller->getCostumes();

include 'views/Index_Costume.php';
?>
