<?php 
require_once "../koneksi.php";
// membuat class Gpas mewarisi class Koneksi
class Gpas extends Koneksi{
    // membuat method tampil_data untuk menampilkan semua data dari tabel gpas
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