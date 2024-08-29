<?php 
include "koneksi.php";
class GpaDetails extends Database{
    public function tampil_data(){
        $sql = "SELECT * FROM gpa_details JOIN gpas ON gpa_details.id_gpa = gpas.id_gpa WHERE semester_gpa != 3";
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
$nav = $gpaDetails->nav();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $nav; ?>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id_gpa</th>
            <th>semester</th>
            <th>semester_gpa</th>
            <th>student</th>
        </tr>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['id_gpa'] ?></td>
            <td><?= $row['semester'] ?></td>
            <td><?= $row['semester_gpa'] ?></td>
            <td><?= $row['  '] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>