<?php 
require_once "gpa_details.php";

class GpaDetailsKhusus extends GpaDetails{
    public function tampil_data(){
        $sql = "SELECT * FROM gpa_details WHERE semester_gpa = 3";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>