<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'></head>
        <body class='container bg-dark'>
        <nav class='navbar navbar-expand-lg bg-dark navbar-dark'>
            <div class='container-fluid'>
                <div class='collapse navbar-collapse' id='navbarNav'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a class='nav-link' href='tampil/gpas_tampil.php'>gpa</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='tampil/gpa_details_tampil.php'>gpa details</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='tampil/reports_tampil.php'>reports</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='tampil/gpas_khusus_tampil.php'>gpa khusus</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='tampil/gpa_details_khusus_tampil.php'>gpa details khusus</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='tampil/reports_khusus_tampil.php'>reports khusus</a>
                        </li>
                    </ul>
                </div>
            </div>    
        </nav>
<?php 
require_once "template/footer.php";
?>