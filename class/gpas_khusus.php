<?php
require_once "gpas.php";
// membuat class GpasKhusus mewarisi class Gpas
class GpasKhusus extends Gpas{
    // membuat method tampil_data untuk menampilkan data dari tabel gpas yang cumulative_gpa = 3
    public function tampil_data(){
        $sql = "SELECT * FROM gpas WHERE cumulative_gpa = 3";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>