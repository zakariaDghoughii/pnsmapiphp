<?php
require_once('espModel.php');
class EspeceModel {
    private $especeTable;

    public function __construct(EspeceTable $especeTable) {
        $this->especeTable = $especeTable;
    }

    public function getAllEspeces() {
        return $this->especeTable->getAllEspeces();
    }
}
?>