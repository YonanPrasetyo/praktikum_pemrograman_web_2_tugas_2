<?php 
require_once "gpa_details.php";

// membuat class GpaDetailsKhusus mewarisi class GpaDetails
class GpaDetailsKhusus extends GpaDetails{
    // membuat method tampil_data untuk menampilkan data dari tabel gpa_details yang semester_gpa = 3
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