<?php
require_once "../class/gpa_details_khusus.php";

// inisialisasi objek gpaDetailsKhusus
$gpaDetails = new GpaDetailsKhusus();
$data = $gpaDetails->tampil_data();
$no = 1;

?>

<!-- memanggil template untuk bagian atas -->
<?php require_once "../template/header.php"; ?>
    <table class="table table-striped table-dark">
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
<!-- mamanggil template untuk bagian bawah -->
<?php require_once "../template/footer.php"; ?>