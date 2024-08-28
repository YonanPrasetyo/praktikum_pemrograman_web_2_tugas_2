<?php 
include "koneksi.php";
class Gpas extends Database{
    public function tampil_data(){
        $sql = "SELECT * FROM gpas";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}

$gpas = new Gpas();
$data = $gpas->tampil_data();
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
    </nav>
    <table border="1" cellspacing="0" style="margin: 10px;">
        <tr>
            <th>No</th>
            <th>student</th>
            <th>cumulative_gpa</th>
        </tr>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['id_student'] ?></td>
            <td><?= $row['cumulative_gpa'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>