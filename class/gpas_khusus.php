<?php
require_once "gpas.php";
class GpasKhusus extends Gpas{
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