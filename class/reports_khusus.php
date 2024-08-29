<?php 
require_once "reports.php";
// membuat class ReportsKhusus mewarisi class Reports
class ReportsKhusus extends Reports{
    // membuat method tampil_data untuk menampilkan data dari tabel reports yang status = 'Approved'
    public function tampil_data(){
        $sql = "SELECT * FROM reports WHERE status = 'Approved'";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>