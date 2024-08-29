<?php 
require_once "../koneksi.php";
class GpaDetails extends Koneksi{
    public function tampil_data(){
        $sql = "SELECT * FROM gpa_details";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>