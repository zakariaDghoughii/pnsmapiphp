<?php
require_once('model.php');
require_once('view.php'); // Make sure the correct filename is used for the view

class EspeceController {
    private $model;
    private $view;

    public function __construct(EspeceModel $model, EspeceView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function getEspece() {
        $especes = $this->model->getAllEspeces();

        // echo "Data from the model : ";
        // print_r($especes);

        $this->view->renderJSON($especes);
    }
}
?>
