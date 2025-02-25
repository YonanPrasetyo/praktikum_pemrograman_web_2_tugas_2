<?php
require_once "../class/gpas.php";

// inisialisasi objek Gpas
$gpas = new Gpas();
$data = $gpas->tampil_data();
$no = 1;
?>

<!-- memanggil template untuk bagian atas -->
<?php require_once "../template/header.php"; ?>
    <table class="table table-striped table-dark">
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

<!-- memanggil template untuk bagian bawah -->
<?php require_once "../template/footer.php"; ?>