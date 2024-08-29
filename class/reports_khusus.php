<?php 
require_once "reports.php";

class ReportsKhusus extends Reports{
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