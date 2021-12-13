@extends('user.layout.infographic')

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
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="/vaksinasi">Info Vaksinasi</a></li>
						<li><a class="dropdown-item" href="/rs-rujukan">RS Rujukan</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="/infografis">Infografis</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
@endsection

@section('content')
<div class="container content">
	<div class="row">
		<div class="col-4">
			<img src="image/illustration_infographic.svg" alt="illustration" class="img-fluid">
		</div>
		<div class="col-8">
			<div class="row">
				<h2 class="title">INFOGRAFIS</h2>
			</div>
			<div class="row">
				<p>Informasi dan data COVID-19 yang disampaikan dalam bentuk visual agar mudah dipahami.</p>
			</div>
		</div>
	</div>
</div>

<!-- Infographic Content -->
<div class="container-card">
	<?php
	include "connection/connection.php";

	$result = mysqli_query($connection, "SELECT * FROM `infografis`");

	foreach ($result as $row) {

		?>
		<div class="card-responsive">
			<button type="button" class="btn btn-image" data-bs-toggle="modal" data-bs-target="#infographicModal-<?php echo $row['id_infografis']; ?>">
				<?php echo '<img src="data:image;base64,' . base64_encode($row['gambar']) . '" alt="infographic" class="img-fluid infographic mx-auto">'; ?>
			</button>
			<div class="text-center">
				<h5 class="infographic-title"><?php echo $row['judul'] ?></h5>
				<p class="infographic-date"><?php echo $row['tgl_publikasi'] ?></p>
			</div>

			<!--Bootstrap modal -->
			<div class="modal fade" id="infographicModal-<?php echo $row['id_infografis']; ?>" tabindex="-1" role="dialog" aria-labelledby="infographicModal-<?php echo $row['id_infografis']; ?>Label" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<!-- Modal heading -->
						<div class="modal-header text-center">
							<h5 class="modal-title" id="infographicModal-<?php echo $row['id_infografis']; ?>Label">
								<h5 class="infographic-title"><?php echo $row['judul'] ?></h5>
							</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>

						<!-- Modal body with image -->
						<div class="modal-body text-center">
							<?php echo '<img src="data:image;base64,' . base64_encode($row['gambar']) . '" alt="infographic" class="img-fluid infographic-expand mx-auto" ></button>'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	?>
</div>
@endsection

@section('footer')
<footer>
	<div class="container footer img-fluid">
		<img src="image/logo.svg" alt="footer logo">
	</div>
</footer>
@endsection