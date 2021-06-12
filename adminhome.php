<?php
session_start();
if (isset($_SESSION['admin'])) {
?>

	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

		<title>Admin Page</title>
	</head>

	<body>
		<div>
			<nav class="navbar navbar-expand-lg navbar-light bg-danger bg-gradient ">
				<div class="container-fluid">
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active text-white" aria-current="page" href="adminhome.php">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Data Master
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="players.php">Daftar Mahasiswa</a></li>
									<li><a class="dropdown-item" href="jurusan.php">Daftar Jurusan</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white" href="allquestions.php">Soal TPA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white" href="daftarhasil.php">Hasil TPA</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Admin
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="#">Profile</a></li>
									<li><a class="dropdown-item" href="exit.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="container-fluid">
			<div class="mt-3">
				<h3><i class="fas fa-home"></i> Home</h3>
			</div>
			<div class="col-sm-12">
				<div class="card border-danger mb-5 mt-5 bg-white" style="max-width: 100rem;">

					<div class="card-body text-dark text-center">
						<h4 class="card-title mt-3"> <strong> Hai Admin,</strong></h4>
						<p class="card-text mb-3">Selamat Datang Di Sistem Tes Potensi Akademik Universitas Nusa Putra.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-sm-4">
					<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
						<div class="card-header">Daftar Mahasiswa</div>
						<div class="card-body ">
							<h5 class="card-title"><i class="fas fa-user-graduate"></i>110</h5>
							<p class="card-text"></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
						<div class="card-header">Soal TPA</div>
						<div class="card-body">
							<h5 class="card-title"><i class="fas fa-file-alt"></i>120 Soal</h5>
							<p class="card-text"></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
						<div class="card-header">Hasil TPA</div>
						<div class="card-body"><i class="fas fa-folder-open"></i>
							<h5 class="card-title"></h5>
							<p class="card-text"></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer text-center text-white bg-danger bg-gradient">
			Copyright | TPA 2021.
		</div>
		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
	</body>

	</html>

<?php } else {
	header("location: admin.php");
}
?>