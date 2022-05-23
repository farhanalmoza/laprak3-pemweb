<?php

$returnHari = "";
$returnBulan = "";

// jika ada post
if (isset($_POST['submit'])) {
    if (isset($_POST['hari'])) {
        $hari = $_POST['hari'];
        if ($hari == 1) {
            $returnHari = "Hari yang dipilih adalah Senin";
        } else if ($hari == 2) {
            $returnHari = "Hari yang dipilih adalah Selasa";
        } else if ($hari == 3) {
            $returnHari = "Hari yang dipilih adalah Rabu";
        } else if ($hari == 4) {
            $returnHari = "Hari yang dipilih adalah Kamis";
        } else if ($hari == 5) {
            $returnHari = "Hari yang dipilih adalah Jumat";
        } else if ($hari == 6) {
            $returnHari = "Hari yang dipilih adalah Sabtu";
        } else if ($hari == 7) {
            $returnHari = "Hari yang dipilih adalah Minggu";
        }
    }

    // switch case untuk menampilkan bulan
    if (isset($_POST['bulan'])) {
        $bulan = $_POST['bulan'];
        switch ($bulan) {
            case 1:
                $returnBulan = "Bulan yang dipilih adalah Januari";
                break;
            case 2:
                $returnBulan = "Bulan yang dipilih adalah Februari";
                break;
            case 3:
                $returnBulan = "Bulan yang dipilih adalah Maret";
                break;
            case 4:
                $returnBulan = "Bulan yang dipilih adalah April";
                break;
            case 5:
                $returnBulan = "Bulan yang dipilih adalah Mei";
                break;
            case 6:
                $returnBulan = "Bulan yang dipilih adalah Juni";
                break;
            case 7:
                $returnBulan = "Bulan yang dipilih adalah Juli";
                break;
            case 8:
                $returnBulan = "Bulan yang dipilih adalah Agustus";
                break;
            case 9:
                $returnBulan = "Bulan yang dipilih adalah September";
                break;
            case 10:
                $returnBulan = "Bulan yang dipilih adalah Oktober";
                break;
            case 11:
                $returnBulan = "Bulan yang dipilih adalah November";
                break;
            case 12:
                $returnBulan = "Bulan yang dipilih adalah Desember";
                break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Farkhan | Laprak 3</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Farkhan 20081010060</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-primary active p-3" href="satu.php">Nomor Satu</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dua.php">Nomor Dua</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tiga.php">Nomor Tiga</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4 text-center">Nomor Satu</h1>
                    
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <!-- Form -->
                                <div class="col-md-6">
                                    <form action="" method="POST">
                                        <div class="row g-3 align-items-center mb-3">
                                            <div class="col-md-2">
                                                <label for="hari" class="col-form-label">Hari</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="number" id="hari" name="hari" class="form-control" min="1" max="7" placeholder="angka hari">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center mb-3">
                                            <div class="col-md-2">
                                                <label for="bulan" class="col-form-label">Bulan</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="number" id="bulan" name="bulan" class="form-control" min="1" max="12" placeholder="angka bulan">
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                                <!-- Hasil -->
                                <div class="col-md-6">
                                    <h4><?= $returnHari; ?></h4>
                                    <h4><?= $returnBulan; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Sidebar JS-->
        <script src="js/sidebar.js"></script>
    </body>
</html>
