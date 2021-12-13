@extends('user.layout.stats')

<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);
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
					<a class="nav-link active" href="/stats">Stats</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/edukasi">Edukasi</a>
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
<!-- Section Statistic -->
<section>
	<div class="container content">
		<h2 class="title text-center">STATISTIK KASUS&nbsp;<span class="subtitle">COVID-19</span></h2>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="container-card">
						<img src="image/illustration_positive.svg" alt="illustration" class="img-fluid mx-auto">
						<h5 class="status">POSITIF</h5>
						<h5 class="statistic"><?= $data[0]['positif']; ?></h5>
					</div>
				</div>
				<div class="col">
					<div class="container-card">
						<img src="image/illustration_negative.svg" alt="illustration" class="img-fluid mx-auto">
						<h5 class="status">SEMBUH</h5>
						<h5 class="statistic"><?= $data[0]['sembuh']; ?></h5>
					</div>
				</div>
				<div class="col">
					<div class="container-card">
						<img src="image/illustration_death.svg" alt="illustration" class="img-fluid mx-auto">
						<h5 class="status">MENINGGAL</h5>
						<h5 class="statistic"><?= $data[0]['meninggal']; ?></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Tracker -->
<section>
	<h2 class="subtitle text-center">PETA PERSEBARAN&nbsp;<span class="title">COVID-19</span></h2>
	<div class="container maps">
		<iframe src="https://peta.laporcovid19.org/" frameborder="0" width="100%" height="500px"></iframe>
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