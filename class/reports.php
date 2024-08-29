<?php 
require_once "../koneksi.php";
// membuat class Reports mewarisi class Koneksi
class Reports extends Koneksi{
    // membuat method tampil_data untuk menampilkan semua data dari tabel reports
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