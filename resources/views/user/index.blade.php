@extends('user.layout.home')

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
					<a class="nav-link active" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/stats">Stats</a>
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
<!-- Section About -->
<section>
	<div class="container container-about"><br><br>
		<div class="row about">
			<div class="col-8">
				<h2 class="title">CRACKER</h2>
				<h4 class="subtitle-black">Sistem Informasi Terpusat&nbsp;<span class="subtitle-red">Covid-19 Tracker</span></h4>
				<p>Perangkat lunak sistem informasi terpusat COVID-19 CRACKER ini merupakan perangkat lunak berbasis website untuk mempermudah masyarakat dalam mendapat informasi yang kredibel seputar COVID-19 yang ada di Indonesia.</p>
			</div>
			<div class="col-4">
				<img src="image/cracker-about.svg" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<!-- Section Tracker -->
<section id="tracker">
	<div class="container headline">
		<div class="row">
			<div class="col-4">
				<div class="container container-statistic">
					<div class="row status">
						<h5>POSITIF:</h5>
					</div>
					<div class="row statistic">
						<h5><?= $data[0]['positif']; ?></h5>
					</div>
					<div class="row status">
						<h5>SEMBUH:</h5>
					</div>
					<div class="row statistic">
						<h5><?= $data[0]['sembuh']; ?></h5>
					</div>
					<div class="row status">
						<h5>MENINGGAL:</h5>
					</div>
					<div class="row statistic">
						<h5><?= $data[0]['meninggal']; ?></h5>
					</div>
				</div>
			</div>
			<div class="col-8">
				<div class="container maps">
					<iframe src="https://peta.laporcovid19.org/" frameborder="0" width="100%" height="300px"></iframe>
					<a href="page/stats.php" class="btn btn-all justify-content-center">Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Education -->
<section id="education">
	<div class="container headline text-center">
		<h2 class="title">EDUKASI</h2>
		<div class="container-fixed stacked-cards stacked-cards-slide-1">
			<ul>
				<li><img src="image/edukasi_headline_1.png" alt="Covid infographic"></li>
				<li><img src="image/edukasi_headline_2.png" alt="Covid infographic"></li>
				<li><img src="image/edukasi_headline_3.png" alt="Covid infographic"></li>
				<li><img src="image/edukasi_headline_4.png" alt="Covid infographic"></li>
				<li><img src="image/edukasi_headline_5.png" alt="Covid infographic"></li>
			</ul>
		</div>
		<a href="page/education.php" class="btn btn-all">Selengkapnya</a>
		<br><br>
	</div>
</section>

<!-- Section Infographic -->
<section id="infographic">
	<div class="container headline text-center">
		<h2 class="title">INFOGRAFIS</h2>
		<div class="container-fixed stacked-cards stacked-cards-slide-2">
			<ul>
				<li><img src="image/infografis_headline_1.jpg" alt="Covid infographic"></li>
				<li><img src="image/infografis_headline_2.jpg" alt="Covid infographic"></li>
				<li><img src="image/infografis_headline_3.jpeg" alt="Covid infographic"></li>
				<li><img src="image/infografis_headline_4.png" alt="Covid infographic"></li>
				<li><img src="image/infografis_headline_5.png" alt="Covid infographic"></li>
			</ul>
		</div>
		<a href="page/infographic.php" class="btn btn-all">Selengkapnya</a>
		<br><br>
	</div>
</section>

<!-- Section Hospital and Vaccination -->
<section>
	<div class="container headline">
		<div class="row text-center">
			<div class="col-sm">
				<div class="container container-statistic">
					<h3 class="title">RUMAH SAKIT RUJUKAN</h3>
					<div class="">
						<p>Dapatkan informasi detail mengenai rumah sakit rujukan pelayanan Covid-19 untuk memeriksakan kesehatan diri di sekitar wilayah terdekat anda.</p>
						<a href="/rs-rujukan" class="btn btn-all">Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="container container-statistic">
					<h3 class="title">INFORMASI VAKSINASI</h3>
					<div class="">
						<p>Dapatkan informasi detail dan ter-update mengenai vaksinasi yang sedang berlangsung dan didistribusikan di Indonesia.</p>
						<a href="/vaksinasi" class="btn btn-all">Selengkapnya</a>
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