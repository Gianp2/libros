<?php
session_start();
require_once __DIR__ . '/../config/config.php';

$controller = $_GET['controller'] ?? 'home';
$action     = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = __DIR__ . '/../app/Controllers/' . $controllerName . '.php';

if (!file_exists($controllerFile)) {
    http_response_code(404);
    echo "Controlador no encontrado";
    exit;
}

require_once $controllerFile;
$controllerObj = new $controllerName();

if (!method_exists($controllerObj, $action)) {
    http_response_code(404);
    echo "Acción no encontrada";
    exit;
}

$controllerObj->$action();
