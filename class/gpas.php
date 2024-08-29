<?php 
require_once "../koneksi.php";
class Gpas extends Koneksi{
    public function tampil_data(){
        $sql = "SELECT * FROM gpas";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}



?>