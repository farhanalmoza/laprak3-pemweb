<?php

$tinggi = 0;
// jika ada submit
if (isset($_POST["submit"])) {
    $tinggi = $_POST["tinggi"];

    // tampilkan segitiga menghadap kanan atas menggunakan for
    for ($i = $tinggi; $i > 0; $i--) {
        for ($j=1; $j <= $tinggi; $j++) { 
            if ($j >= $i) {
                $fKananAtas .= "*";
            } else {
                $fKananAtas .= "&nbsp;";
            }
        }
        $fKananAtas .= "<br>";
    }

    // tampilkan segitiga menghadap kanan bawah menggunakan for
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j=1; $j <= $tinggi; $j++) { 
            if ($j >= $i) {
                $fKananBawah .= "*";
            } else {
                $fKananBawah .= "&nbsp;";
            }
        }
        $fKananBawah .= "<br>";
    }

    // tampilkan segitiga menghadap kanan atas menggunakan while
    $i = $tinggi;
    while ($i > 0) {
        $j = 1;
        while ($j <= $tinggi) {
            if ($j >= $i) {
                $wKananAtas .= "*";
            } else {
                $wKananAtas .= "&nbsp;";
            }
            $j++;
        }
        $wKananAtas .= "<br>";
        $i--;
    }

    // tampilkan segitiga menghadap bawah atas menggunakan while
    $i = 1;
    while ($i <= $tinggi) {
        $j = 1;
        while ($j <= $tinggi) {
            if ($j >= $i) {
                $wKananBawah .= "*";
            } else {
                $wKananBawah .= "&nbsp;";
            }
            $j++;
        }
        $wKananBawah .= "<br>";
        $i++;
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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="satu.php">Nomor Satu</a>
                    <a class="list-group-item list-group-item-action list-group-item-primary active p-3" href="dua.php">Nomor Dua</a>
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
                    <h1 class="mt-4 text-center">Nomor Dua</h1>
                    
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <!-- Form -->
                                <form action="" method="POST">
                                    <div class="row g-2 align-items-center mb-3">
                                        <div class="col-md-2">
                                            <label for="tinggi" class="col-form-label">Tinggi segitiga</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="range" class="form-range" min="0" max="10" id="tinggi" name="tinggi" value="<?= $tinggi; ?>">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h3 class="mb-3">Segitiga Menggunakan For</h3>
                                    <h4>Menghadap kanan atas</h4>
                                    <?= $fKananAtas; ?>
                                    <h4>Menghadap kanan bawah</h4>
                                    <?= $fKananBawah; ?>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Segitiga Menggunakan While</h3>
                                    <h4>Menghadap kanan atas</h4>
                                    <?= $wKananAtas; ?>
                                    <h4>Menghadap kanan bawah</h4>
                                    <?= $wKananBawah; ?>
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
