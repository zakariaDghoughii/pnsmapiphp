<?php
class EspeceTable {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllEspeces() {
        $query = "SELECT especes.*, especesdetails.* 
            FROM especes LEFT JOIN especesdetails 
            ON especes.idType = especesdetails.idType ";
        $result = $this->db->query($query);
        // $especes = $result->fetch_all(MYSQLI_ASSOC);
        $especes = array();
        while ($row = $result->fetch_assoc()) {
            $espece = array(
                'espece' => $row['espece'],
                'image' => $row['image'],
                'type' => $row['type'],
                'especesdetails' => array(
                    'idType' => $row['idType'],
                    'name' => $row['name'],
                    'desc' => $row['desc'],
                    'subDesc' => $row['subDesc'],
                    'imgDetails' => $row['imgDetails'],
                    'color' => $row['color'],
                ),
            );
            $especes[] = $espece;
        }
        return $especes;
 

    }
}
?>
