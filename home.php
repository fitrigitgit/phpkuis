<?php
session_start();
include "connection.php";
if (isset($_SESSION['id'])) {
	$query = "SELECT * FROM questions";
	$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$total = mysqli_num_rows($run);
?>

	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style1.css">

		<title>Tes Potensi Akademik!</title>
	</head>

	<body>
		<div>
			<nav class="navbar navbar-light bg-danger bg-gradient">
				<div class="container-fluid">
					<h4 class="text-white">Selamat Datang, -Nama Mahasiswa-</h4>
				</div>
			</nav>
		</div>
		<div class="container-fluid">

			<div class="card mt-5 bg-danger bg-gradient">

				<div class="card-body bg-white ">
					<h5 class="card-title text-center"> <strong> Selamat Datang Di Sistem Tes Potensi Akademik Universitas Nusa Putra </strong></h5><br>
					<p class="card-text text-center">Tes Potensi Akademik dapat membantu para mahasiswa Universitas Nusa Putra Kota Sukabumi dalam menentukan Program SCP (Study Complection Program)
						berdasarkan kemampuan dan potensi dasar masing-masing mahasiswa yang akan diukur dan dinilai melalui Sistem Tes Potensi Akademik ini.</p> <br>
					<div class="row">
						<div class="col-sm-4">
							<p>Terdiri dari 3 Sub Tes :</p>
							<ul>
								<li>1. Tes Verbal</li>
								<li>2. Tes Kuantitatif</li>
								<li>3. Tes Logika</li>
							</ul>
						</div>
						<div class="col-sm-4">
							<p>Waktu Pengerjaan :</p>
							<ul>
								<li>Tes Verbal = 20 Menit</li>
								<li>Tes Kuantitatif = 60 Mentit</li>
								<li>Tes Logika = 30 Menit</li>
							</ul>
						</div>
						<div class="col-sm-4">
							<p>Jumlah Total Soal = <?php echo $total; ?></p>
						</div>
					</div>
					<div class="row mt-5">
						<div class="position-relative">
							<a href="question.php?n=1" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x">Mulai</a>
						</div>
					</div>
				</div>

			</div>
			<div>
				<a href="exit.php" class="btn btn-danger mt-3 mb-2">Exit</a>
			</div>

			<ul>

				<li><strong>Estimated time for each question: </strong><?php echo $total * 0.05 * 60; ?> seconds</li>
				<li><strong>Score: </strong> &nbsp; +1 point for each correct answer</li>
			</ul>
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



	<html>

	<?php unset($_SESSION['score']); ?>
<?php } else {
	header("location: index.php");
}
?>