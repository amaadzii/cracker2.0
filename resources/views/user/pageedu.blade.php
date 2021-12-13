@extends('user.layout.education')

<?php
include "connection/connection.php";
$konten1 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM edukasi where id_edukasi = 1"));
$konten2 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM edukasi where id_edukasi = 2"));
$konten3 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM edukasi where id_edukasi = 3"));
$konten4 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM edukasi where id_edukasi = 4"));
?>

@section('header')
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-green justify-content-center">
	<div class="container-fluid">
		<a class="navbar-brand" href="/"><img src="image/logo.png" alt="Logo CRACKER"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/stats">Stats</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="/edukasi">Edukasi</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="/vaksinasi">Info Vaksinasi</a></li>
						<li><a class="dropdown-item" href="/rs-rujukan">RS Rujukan</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/infografis">Infografis</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
@endsection

@section('content')
<!-- Section Headline Edukasi -->
<section>
	<div class="container content">
		<h2 class="title text-center">EDUKASI</h2>
		<div class="container">
			<div class="row">
				<div class="col mx-auto my-auto">
					<img src="image/illustration_education_headline.svg" alt="illustration" class="img-fluid">
				</div>
				<div class="col">
					<div class="row content-list">
						<div class="col-4">
							<img src="image/illustration_pengertian_headline.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col-8">
							<h5><b>Apa itu Covid?</b></h5>
							<p>Mengenal COVID-19 dan penyebabnya.</p>
						</div>
					</div>
					<div class="row content-list">
						<div class="col-4">
							<img src="image/illustration_gejala_headline.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col-8">
							<h5><b>Gejala Covid</b></h5>
							<p>Mengenal apa saja gejala COVID-19 yang harus diperhatikan.</p>
						</div>
					</div>
					<div class="row content-list">
						<div class="col-4">
							<img src="image/illustration_pencegahan_headline.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col-8">
							<h5><b>Penanganan Covid</b></h5>
							<p>Mengenal cara mencegah dari penularan COVID-19.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Pengertian Covid -->
<section>
	<div class="container content">
		<div class="container">
			<div class="row">
				<div class="col-4 mx-auto my-auto">
					<img src="image/illustration_pengertian_headline.svg" alt="illustration" class="img-fluid">
				</div>
				<div class="col-8 mx-auto my-auto">
					<div class="row">
						<div class="col">
							<h4 class="subtitle">Apa Itu Covid?</h4>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<p><?php echo $konten1['konten']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Gejala Covid -->
<section>
	<div class="container content">
		<div class="container">
			<div class="row">
				<div class="col-4 mx-auto my-auto">
					<img src="image/illustration_gejala_headline.svg" alt="illustration" class="img-fluid">
				</div>
				<div class="col-8 mx-auto my-auto">
					<div class="row">
						<div class="col">
							<h4 class="subtitle">Gejala Covid</h4>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<p><?php echo $konten2['konten']; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img src="image/gejala_batuk.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col">
							<img src="image/gejala_demam.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col">
							<img src="image/gejala_sesak.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col">
							<img src="image/gejala_lelah.svg" alt="illustration" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Penanganan Covid -->
<section>
	<div class="container content">
		<div class="container">
			<div class="row">
				<div class="col-4 mx-auto my-auto">
					<img src="image/illustration_pencegahan_headline.svg" alt="illustration" class="img-fluid">
				</div>
				<div class="col-8 mx-auto my-auto">
					<div class="row">
						<div class="col">
							<h4 class="subtitle">Penanganan Covid</h4>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<p><?php echo $konten3['konten']; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img src="image/pencegahan_masker.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col">
							<img src="image/pencegahan_distancing.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col">
							<img src="image/pencegahan_cuci.svg" alt="illustration" class="img-fluid">
						</div>
						<div class="col">
							<img src="image/pencegahan_bersih.svg" alt="illustration" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('footer')
<footer>
	<div class="container footer img-fluid">
		<img src="image/logo.svg" alt="footer logo">
	</div>
</footer>
@endsection