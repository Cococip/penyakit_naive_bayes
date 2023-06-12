<?php
include "functions.php";

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}

// Fungsi untuk mendapatkan jumlah total data
function countData($q)
{
    global $db;
    $count = $db->get_var("SELECT COUNT(*) FROM tb_diagnosa WHERE kode_diagnosa LIKE '%$q%' OR nama_diagnosa LIKE '%$q%'");
    return $count;
}

// Fungsi untuk mendapatkan kata-kata awal dari sebuah string
function getWords($string, $limit)
{
    $words = explode(' ', $string);
    $words = array_slice($words, 0, $limit);
    $result = implode(' ', $words);
    return $result;
}

// Mengatur halaman saat ini
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$limit = 10; // Jumlah data per halaman

$q = isset($_GET['q']) ? esc_field($_GET['q']) : ''; // Kata kunci pencarian
$totalData = countData($q); // Total data
$totalPages = ceil($totalData / $limit); // Total halaman

// Memastikan halaman saat ini tidak melebihi total halaman yang tersedia
if ($page > $totalPages) {
    $page = $totalPages;
}

// Mengatur offset untuk query
$offset = ($page - 1) * $limit;

// Mengambil data dengan paging dan pengurutan
$rows = $db->get_results("SELECT * FROM tb_diagnosa 
                        WHERE kode_diagnosa LIKE '%$q%' OR nama_diagnosa LIKE '%$q%' 
                        ORDER BY kode_diagnosa ASC
                        LIMIT $offset, $limit");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Diagnosa | Admin</title>
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico" />
</head>

<body>
    <?php require "partials/navbar.php"; ?>
    <div class="container-fluid page-body-wrapper">
        <?php require "partials/sidebar.php"; ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-account-search-outline"></i>
                        </span> Diagnosa
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="panel-heading">
                                        <form class="form-inline">
                                            <div class="form-group" style="float:right;">
                                                <a class="btn btn-primary" href="diagnosa_tambah.php"><span class="mdi mdi-library-plus"></span> Tambah</a>
                                            </div>
                                            <input type="hidden" name="m" value="diagnosa" />
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Pencarian" name="q" value="<?= $_GET['q'] ?>" />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr class="">
                                                    <th>Kode</th>
                                                    <th>Nama Diagnosa</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($rows as $row) : ?>
                                                <tr>
                                                    <td><?= $row->kode_diagnosa ?></td>
                                                    <td><?= $row->nama_diagnosa ?></td>
                                                    <td><?= getWords($row->keterangan, 20) ?></td>
                                                    <td class="nw">
                                                        <a class="btn btn-xs btn-warning" href="diagnosa_ubah.php?ID=<?= $row->kode_diagnosa ?>"><span class="mdi mdi-table-edit"></span></a>
                                                        <a class="btn btn-xs btn-danger" href="aksi.php?act=diagnosa_hapus&ID=<?= $row->kode_diagnosa ?>" onclick="return confirm('Hapus data?')"><span class="mdi mdi-delete"></span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <!-- Tampilkan navigasi paging -->
                                        <ul class="pagination">
                                            <?php if ($totalPages > 1) : ?>
                                                <?php if ($page > 1) : ?>
                                                    <li class="page-item"><a class="page-link" href="?q=<?= $q ?>&page=<?= ($page - 1) ?>">Previous</a></li>
                                                <?php endif; ?>
                                                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>"><a class="page-link" href="?q=<?= $q ?>&page=<?= $i ?>"><?= $i ?></a></li>
                                                <?php endfor; ?>
                                                <?php if ($page < $totalPages) : ?>
                                                    <li class="page-item"><a class="page-link" href="?q=<?= $q ?>&page=<?= ($page + 1) ?>">Next</a></li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/dashboard.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
</body>

</html>
