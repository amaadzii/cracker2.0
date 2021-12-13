@extends('user.layout.vaccination')

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
					<a class="nav-link" href="/edukasi">Edukasi</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<div class="container content">
	<h2 class="title text-center">VAKSINASI&nbsp;<span class="subtitle">COVID-19</span></h2>
	<h4 class="text-center">Cari Informasi Tentang Covid-19</h4>

	<!-- Content -->
	<div class="container-card">
		<?php
		include "connection/connection.php";
		$result = mysqli_query($connection, "SELECT * FROM `info_vaksin`");
		foreach ($result as $row) {
			?>
			<div class="card-responsive">
				<?php echo '<img src="data:image;base64,' . base64_encode($row['ilustrasi']) . '" alt="infographic" class="img-fluid infographic mx-auto" >'; ?>
				<div class="text-center">
					<h5 class="infographic-title"><?php echo $row['judul'] ?></h5>
					<a href="/detail-vaksinasi?id=<?php echo $row['id_infovaksin']; ?>" class="btn btn-expand">Selengkapnya&nbsp;&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>
@endsection

@section('footer')
<footer>
	<div class="container footer img-fluid">
		<img src="image/logo.svg" alt="footer logo">
	</div>
</footer>
@endsection