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
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<?php
		include "connection/connection.php";

		$id_infovaksin = $_GET['id'];

		$result = mysqli_query($connection, "SELECT * FROM `info_vaksin` WHERE `id_infovaksin` = '$id_infovaksin' ");

		foreach ($result as $row) {
			?>
			<div class="article text-center">
				<h3 class="infographic-title"><?php echo $row['judul'] ?></h3>
				<?php echo '<img src="data:image;base64,' . base64_encode($row['ilustrasi']) . '" alt="infographic" class="img-fluid" style="border-radius: 40px; width:60%; margin-top: 30px; box-shadow: 0px 1px 16px #dad6d6;" >'; ?>
			</div>
			<p class="date"><?php echo "Diposting tanggal " . $row['tgl_publikasi'] ?></p>
			<p class="lead"><?php echo $row['isi_info'] ?></p>
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