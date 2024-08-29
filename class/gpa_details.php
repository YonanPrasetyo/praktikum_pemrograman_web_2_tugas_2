<?php 
require_once "../koneksi.php";

// membuat class GpaDetails mewarisi class Koneksi
class GpaDetails extends Koneksi{
    // membuat method tampil_data untuk menampilkan semua data dari tabel gpa_details
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