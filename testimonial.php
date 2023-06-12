<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dr.Abal-Abal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/virus.gif" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="service.php" class="nav-item nav-link">Cara Pengunaan</a>
                        <a href="menu.php" class="nav-item nav-link">Tabel Para Meter</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.php" class="dropdown-item">Pengembang</a>
                                <a href="testimonial.php" class="dropdown-item">Tabel Probabilitas</a>
                            </div>
                        </div>
                    </div>
                    <a href="perhitungan/deteksi.php" class="btn btn-primary py-2 px-4">Deteksi Sekarang</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tabel Probabilitas</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Testimonial Start -->
        <div class="container">
            <div class="container">
            <style>
    table {
      font-family: Arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-left: auto;
      margin-right: auto;
      padding: 10px;
    }
    
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
            <table>
  <thead>
    <tr>
      <th>No.</th>
      <th>Diagnosa</th>
      <th>Gejala 1</th>
      <th>Gejala 2</th>
      <th>Gejala 3</th>
      <th>Probabilitas Menular (Gejala 1)</th>
      <th>Probabilitas Tidak Menular (Gejala 1)</th>
      <th>Probabilitas Menular (Gejala 2)</th>
      <th>Probabilitas Tidak Menular (Gejala 2)</th>
      <th>Probabilitas Menular (Gejala 3)</th>
      <th>Probabilitas Tidak Menular (Gejala 3)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Asma</td>
      <td>7</td>
      <td>3</td>
      <td>1</td>
      <td>7/33</td>
      <td>26/33</td>
      <td>3/33</td>
      <td>30/33</td>
      <td>1/33</td>
      <td>32/33</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Cacingan</td>
      <td>2</td>
      <td>2</td>
      <td>1</td>
      <td>2/27</td>
      <td>25/27</td>
      <td>2/27</td>
      <td>25/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Asam urat</td>
      <td>0</td>
      <td>0</td>
      <td>1</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Muntaber</td>
      <td>1</td>
      <td>2</td>
      <td>2</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>2/27</td>
      <td>25/27</td>
      <td>2/27</td>
      <td>25/27</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Cacar</td>
      <td>0</td>
      <td>2</td>
      <td>1</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>2/27</td>
      <td>25/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Amandel</td>
      <td>2</td>
      <td>0</td>
      <td>0</td>
      <td>2/27</td>
      <td>25/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Tipes</td>
      <td>2</td>
      <td>1</td>
      <td>1</td>
      <td>2/27</td>
      <td>25/27</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Katarak</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>9</td>
      <td>TBC</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Maag</td>
      <td>8</td>
      <td>3</td>
      <td>0</td>
      <td>8/33</td>
      <td>25/33</td>
      <td>3/33</td>
      <td>30/33</td>
      <td>0/33</td>
      <td>33/33</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Demam berdarah</td>
      <td>6</td>
      <td>2</td>
      <td>1</td>
      <td>6/27</td>
      <td>21/27</td>
      <td>2/27</td>
      <td>25/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>12</td>
      <td>Bronkhitis</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>13</td>
      <td>Rematik</td>
      <td>3</td>
      <td>0</td>
      <td>1</td>
      <td>3/27</td>
      <td>24/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>14</td>
      <td>Darah tinggi</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>15</td>
      <td>Myalgia</td>
      <td>0</td>
      <td>1</td>
      <td>1</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>16</td>
      <td>Paru-paru</td>
      <td>1</td>
      <td>0</td>
      <td>2</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>2/27</td>
      <td>25/27</td>
    </tr>
    <tr>
      <td>17</td>
      <td>Ginjal</td>
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>18</td>
      <td>Diabetes</td>
      <td>1</td>
      <td>1</td>
      <td>0</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>19</td>
      <td>Ispa</td>
      <td>0</td>
      <td>1</td>
      <td>1</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>20</td>
      <td>Hipertiroid</td>
      <td>1</td>
      <td>0</td>
      <td>0</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>21</td>
      <td>Vertigo</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>1/27</td>
      <td>26/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>1/27</td>
      <td>26/27</td>
    </tr>
    <tr>
      <td>22</td>
      <td>Hipotensi</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>23</td>
      <td>Gagal ginjal</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
    <tr>
      <td>24</td>
      <td>Stroke</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
      <td>0/27</td>
      <td>27/27</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
        <!-- Testimonial End -->
        

        <?php include ("foot.php");?>