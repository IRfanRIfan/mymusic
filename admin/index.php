<?php 
include '../inc/koneksi.php';
include '../inc/fungsi.php';
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: ceklogin.php");
	exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo ambilprofilweb('meta_desc'); ?>">
  <meta name="keywords" content="<?php echo ambilprofilweb('meta_key'); ?>">
  <meta name="author" content="">
  <title>Administrator - <?php echo ambilprofilweb('title_site'); ?></title>
  <!-- Bootstrap core CSS -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../image/newslogo.png" sizes="196x196" />
  <!-- Summer Note -->
  <head>
  <!-- ... tag lainnya ... -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <div class="container">
  <img class="navbar-brand" src="../image/newslogo.png" style="width: 85px; height: 65px; margin-left: 2px;">
    <a class="navbar-brand" href="#">MUSIK NEWS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
    </div>
  </div>
</nav>

<!-- --------------------------- -->


<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .sidebar {
    height: 100%;
    width: 195px;
    position: fixed;
    background-color: #333;
    padding-top: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .sidebar a {
    padding: 15px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: background-color 0.3s;
  }

  .sidebar a i {
    margin-right: 10px; /* Ruang antara ikon dan teks */
  }

  .sidebar a:hover {
    background-color: #555;
  }

  .content {
    margin-left: 250px;
    padding: 16px;
  }
</style>
<br><br><br>

<div class="sidebar">

  <a href="#kategori"><i class="fas fa-th-list"></i> Kategori</a>
  <a href="#berita"><i class="fas fa-newspaper"></i> Berita</a>
  <a href="#useradmin"><i class="fas fa-user"></i> Admin</a>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <a href="logout.php" style="background-color: red; padding: 10px; display: inline-block; text-decoration: none; color: white; width:100%;">
  <i class="fas fa-sign-out-alt"></i> Log Out
</a>

</div>

<div class="content">
  <!-- ... konten halaman Anda ... -->
</div>



<!-- ------------------------------------ -->

  <!-- Page Content -->
	<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">HALAMAN ADMINISTRATOR</h1>
        <br><br><br>
        <div class="container">

        <style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .navbar-item {
    width: 220px;
    
    padding: 15px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    background-color: #333;
    transition: background-color 0.3s, color 0.3s, transform 0.3s, box-shadow 0.3s;
    border-radius: 5px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    margin: 10px;
  }

  .navbar-item:hover {
    background-color: #555;
    color: #fff;
    transform: scale(1.05); /* Peningkatan ukuran pada hover */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Efek shadow lebih besar pada hover */
  }

  .navbar-item i {
    margin-right: 8px;
  }

  .row {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }
</style>

<!-- Tambahkan Font Awesome (jika belum ada) ke dalam bagian <head> dari dokumen HTML -->
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<br><br>
<div class="row">
 
  <div class="col-sm">
    <a class="nav-link navbar-item" href="./"><i class="fas fa-home"></i> Home</a>
  </div>
  <div class="col-sm">
    <a class="nav-link navbar-item" href="?mod=kategori"><i class="fas fa-th-list"></i> Kategori</a>
  </div>
  <div class="col-sm">
    <a class="nav-link navbar-item" href="?mod=berita"><i class="fas fa-newspaper"></i>Add Berita</a>
  </div>
  <div class="col-sm">
    <a class="nav-link navbar-item" href="?mod=useradmin"><i class="fas fa-user-plus"></i> Add Admin</a>
  </div>
</div>


        <style>
          .welcome-message {
          font-size: 58px;
          font-weight: bold;
}

        </style>
  			<div class="lead mt-5">
    			<?php 
    				$mod = isset($_GET['mod']) ? $_GET['mod'] : '';
    				switch ($mod) {
    					case 'useradmin':
    						include("useradmin.php");
    						break;
    					case 'konfigurasi':
                include("konfigurasi.php");
                break;
              case 'kategori':
                include("kategori.php");
                break;
              case 'berita':
                include("berita.php");
                break;
    					default:
              echo '<p class="welcome-message">Selamat Datang  ' . $_SESSION['nama'] . ' </p>';

    						break;
    				}
    			 ?>
    		</div>
        <br><br><br><br><br><br>
    		<div class="card-footer text-muted mt-5">
    		musiknews_fan&ni'matul@2023
  			</div>
		</div>
      </div>
    </div>
	</div>

  <!-- Bootstrap core JavaScript -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript"> 
    $(document).ready(function() {
      $('.summernote').summernote({
        tabsize: 2,
        height: 300
      });
    });
  </script>
</body>

</html>