<?php 
include "koneksi.php";
class GpaDetails extends Database{
    public function tampil_data(){
        $sql = "SELECT * FROM gpa_details";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}

$gpaDetails = new GpaDetails();
$data = $gpaDetails->tampil_data();
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="gpas.php">gpa</a>
        <a href="gpa_details.php">gpa details</a>
        <a href="reports.php">reports</a>
        <a href="gpa_details_gpa3.php">hahaha</a>
    </nav>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id_gpa</th>
            <th>semester</th>
            <th>semester_gpa</th>
        </tr>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['id_gpa'] ?></td>
            <td><?= $row['semester'] ?></td>
            <td><?= $row['semester_gpa'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>