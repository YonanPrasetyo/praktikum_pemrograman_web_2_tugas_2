<?php 
require_once "../koneksi.php";
class Reports extends Koneksi{
    public function tampil_data(){
        $sql = "SELECT * FROM reports";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>