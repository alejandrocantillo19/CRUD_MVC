<?php
require_once 'controllers/PacienteController.php';

$controller = new PacienteController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit': 
        $controller->edit();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>