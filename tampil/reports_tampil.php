<?php
require_once "../class/reports.php";

$reports = new Reports();
$data = $reports->tampil_data();
$no = 1;

?>

<?php require_once "../template/header.php"; ?>
    <table class="table table-striped table-dark">
        <tr>
            <th>No</th>
            <th>id_warnings</th>
            <th>id_gpa_detail</th>
            <th>id_guidance</th>
            <th>id_achievments</th>
            <th>id_sholarship</th>
            <th>id_student_withdrawls</th>
            <th>id_tuition_areas</th>
            <th>report_date</th>
            <th>status</th>
            <th>has_acc_academic_advisor</th>
            <th>has_acc_head_of_program</th>
        </tr>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['id_warnings'] ?></td>
            <td><?= $row['id_gpa_detail'] ?></td>
            <td><?= $row['id_guidance'] ?></td>
            <td><?= $row['id_achievments'] ?></td>
            <td><?= $row['id_sholarship'] ?></td>
            <td><?= $row['id_student_withdrawls'] ?></td>
            <td><?= $row['id_tuition_areas'] ?></td>
            <td><?= $row['report_date'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['has_acc_academic_advisor'] ?></td>
            <td><?= $row['has_acc_head_of_program'] ?></td>
        </tr>
        <?php } ?>
    </table>
<?php require_once "../template/footer.php"; ?>