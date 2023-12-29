<?php
require_once('controller.php');
require_once('model.php');
require_once('view.php'); // Make sure the correct filename is used for the view

// Connect to MySQL
$db = new mysqli('localhost', 'root', '', 'app');

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$model = new EspeceModel(new EspeceTable($db));
$view = new EspeceView();
$controller = new EspeceController($model, $view);
$controller->getEspece();

// Close the database connection
$db->close();
?>
