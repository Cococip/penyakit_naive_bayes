<?php
include '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dr.Abal-Abal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    

    <!-- Favicon -->
    <link href="../img/virus.gif" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-syringe"></i> Dr.Abal-Abal</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <a href="../service.php" class="nav-item nav-link">Cara Pengunaan</a>
                        <a href="../menu.php" class="nav-item nav-link">Tabel Para Meter</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.php" class="dropdown-item">Pengembang</a>
                                <a href="../testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                    </div>
                    <a href="deteksi.php" class="btn btn-primary py-2 px-4">Deteksi Sekarang</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Parameter Gejala</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Parameter</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <div class="page-body-wrapper mt-4">
        <section class="contactus" id="konsultasi">
            <div class="container">
                <div class="row mb-5 pb-5 justify-content-center">

                    <div class="col-sm-9" data-aos="fade-up" data-aos-offset="-500">
                        <h3 class="font-weight-medium text-dark mt-5 mt-lg-0 text-center" >Konsultasi</h3>
                        <h5 class="text-dark mb-5 text-center">Isi Biodata dibawah ini untuk Mendiagnosa Penyakitmu</h5>
                        <form method="POST">
                            <?php
                            $success = false;
                            if ($_POST) {
                                $nama = $_POST['nama'];
                                $jk = $_POST['jk'];
                                $umur = $_POST['umur'];
                                $alamat = $_POST['alamat'];

                                $selected = (array) $_POST['gejala'];

                                $success = true;

                                if ($nama == '' || $jk == '' || $umur == '' || $alamat == '') {
                                    $success = false;
                                    print_msg('Isikan nama, jenis kelamin, umur dan alamat!');
                                } else if (!$selected) {
                                    $success = false;
                                    print_msg('Belum ada gejala yang dipilih!');
                                }
                            }
                            $_SESSION['data'] = $_POST;
                            ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="nama" value="<?= set_value('nama') ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                        <select class="form-control" name="jk">
                                            <option value="">&nbsp;</option>
                                            <?= get_jk_option(set_value('jk')) ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Umur <span class="text-danger">*</span></label>
                                        <input class="form-control" type="number" name="umur" value="<?= set_value('umur') ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Alamat <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="alamat" value="<?= set_value('alamat') ?>">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Aksi</th>
                                                <th>No</th>
                                                <th>Nama Gejala</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $q = esc_field($_GET['q']);
                                        $rows = $db->get_results("SELECT * FROM tb_gejala 
      							        WHERE kode_gejala LIKE '%$q%' OR nama_gejala LIKE '%$q%'
       							        ORDER BY kode_gejala");
                                        $no = 1;
                                        foreach ($rows as $row) : ?>
                                            <tr>
                                                <td><input type="checkbox"  name="gejala[]" value="<?= $row->kode_gejala ?>" /></td>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row->nama_gejala ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Submit Diagnosa</button>
                            </div>
                        </form>
                        <script>
                            $(function() {
                                $("#checkAll").click(function() {
                                    $('input:checkbox').not(this).prop('checked', this.checked);
                                });
                            });
                        </script>
                        <div class="col-sm-12">
                            <?php if ($success) include '../konsultasi_hasil.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Fitur</h4>
                        <a class="btn btn-link" href="../index.php">Home</a>
                        <a class="btn btn-link" href="../service.php">Cara Penggunaan</a>
                        <a class="btn btn-link" href="../team.php">Parameter</a>
                        <a class="btn btn-link" href="../menu.php">Pengembang</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Kontak</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Yogyakarta</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 898 531 9471</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>20330035@janabadra.web.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Jadwal</h4>
                        <h5 class="text-light fw-normal">Buka</h5>
                        <p>Sak Tangine</p>
                        <h5 class="text-light fw-normal">Tutup</h5>
                        <p>Sak Ngantuk e</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Slogan</h4>
                        <p>Tombo Teko Loro Lungo.</p>
                   </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>