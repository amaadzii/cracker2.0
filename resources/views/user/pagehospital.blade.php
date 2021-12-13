@extends('user.layout.hospital')

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
<!-- Section Headline -->
<div class="container content">
	<div class="container">
		<div class="row">
			<div class="col my-auto">
				<div class="row">
					<div class="col">
						<h2 class="subtitle">RUMAH SAKIT&nbsp;<span class="title">RUJUKAN</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<p>Daftar rumah sakit yang dapat dikunjungi untuk menangani pasien COVID-19.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<img src="image/illustration_hospital.svg" alt="illustration" class="img-fluid mx-auto">
			</div>
		</div>
	</div>
</div>

<!-- Section List of Hospital -->
<section id="hospital-list">
	<h2 class="title text-center">DAFTAR&nbsp;<span class="subtitle">RUMAH SAKIT</span>&nbsp;RUJUKAN</h2>
	<div class="container text-center">
		<div class="row justify-content-center mx-auto">
			<div class="col text-center">
				<form class="form-inline mx-auto">
					<div class="form-group justify-content-center mx-auto">
						<select class="form-select my-2" id="category" name="category" required="">
							<?php
							$category = (isset($_GET['category'])) ? $_GET['category'] : "";
							?>
							<option value="" selected disabled hidden>Pilih Filter</option>
							<option value="Provinsi" <?php if ($category == "Provinsi") echo "selected"; ?>>Provinsi</option>
							<option value="Nama_RS" <?php if ($category == "Nama_RS") echo "selected"; ?>>Nama Rumah Sakit</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control my-2" id="keyword" name="keyword" placeholder="Kata kunci.." required="" value="<?php if (isset($_GET['keyword']))  echo $_GET['keyword']; ?>">
						<button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						<a href="/rs-rujukan" class="btn btn-danger"><i class="fa fa-redo" aria-hidden="true"></i></a>
					</div>
				</form>
			</div>
		</div><br>
	</div>
	<div class="container">
		<table class="table table-bordered table-hover">
			<thead class="bg-thead text-center">
				<tr>
					<th scope="col" class="bg-thead">No</th>
					<th scope="col" class="bg-thead">Provinsi</th>
					<th scope="col">Nama Rumah Sakit</th>
					<th scope="col">Alamat</th>
					<th scope="col">Telepon</th>
				</tr>
			</thead>
			<?php
			include "connection/connection.php";

			$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;

			$inputCategory = (isset($_GET['category'])) ? $_GET['category'] : "";

			$inputKeyword = (isset($_GET['keyword'])) ? $_GET['keyword'] : "";

            // total data every page
			$limit = 10;

			$limitStart = ($page - 1) * $limit;

            // condition if search parameter is empty
			if ($inputCategory == "" && $inputKeyword == "") {
				$query = mysqli_query($connection, "SELECT * FROM rs_rujukan LIMIT " . $limitStart . "," . $limit);
			} else {
                // condition if parameter search category is filled
				$query = mysqli_query($connection, "SELECT * FROM rs_rujukan WHERE $inputCategory LIKE '%$inputKeyword%' LIMIT " . $limitStart . "," . $limit);
			}

			$no = $limitStart + 1;

			while ($data = mysqli_fetch_array($query)) {
				?>
				<tbody>
					<tr>
						<td class="text-center"><?php echo $no; ?></td>
						<td><?php echo $data['provinsi']; ?></td>
						<td><?php echo $data['nama_rs']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['no_telp']; ?></td>
					</tr>
				</tbody>
				<?php
				$no++;
			}
			?>
		</table>
		<ul class="pagination">
			<?php
                // if page = 1, then LinkPrev is disabled
			if ($page == 1) {
				?>
				<!-- link Previous Page disable -->
				<li class=" page-link disabled"><a href="#">Previous</a></li>
				<?php
			} else {
				$LinkPrev = ($page > 1) ? $page - 1 : 1;

				if ($inputCategory == "" && $inputKeyword == "") {
					?>
					<li class="page-item"><a class="page-link" href="rs-rujukan?page=<?php echo $LinkPrev; ?>">Previous</a></li>
					<?php
				} else {
					?>
					<li class="page-item"><a class="page-link" href="rs-rujukan?category=<?php echo $inputCategory; ?>&keyword=<?php echo $inputKeyword; ?>&page=<?php echo $LinkPrev; ?>">Previous</a></li>
					<?php
				}
			}
			?>

			<?php
            // condition if search parameter is empty
			if ($inputCategory == "" && $inputKeyword == "") {
				$query = mysqli_query($connection, "SELECT * FROM rs_rujukan");
			} else {
                // condition if parameter search category is filled
				$query = mysqli_query($connection, "SELECT * FROM rs_rujukan WHERE $inputCategory LIKE '%$inputKeyword%'");
			}

            // calculate all data
			$totalData = mysqli_num_rows($query);

            // calculate remaining page
			$totalPage = ceil($totalData / $limit);

            // total link number 
			$totalNumber = 3;

            // first link number
			$startNumber = ($page > $totalNumber) ? $page - $totalNumber : 1;

            // last link number
			$endNumber = ($page < ($totalPage - $totalNumber)) ? $page + $totalNumber : $totalPage;

			for ($i = $startNumber; $i <= $endNumber; $i++) {
				$linkActive = ($page == $i) ? ' class="link-active"' : '';
				if ($inputCategory == "" && $inputKeyword == "") {
					?>
					<li class="page-item link-active" <?php echo $linkActive; ?>><a class="page-link" href="/rs-rujukan?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

					<?php
				} else {
					?>
					<li class="page-item link-active" <?php echo $linkActive; ?>><a class="page-link" href="rs-rujukan?category=<?php echo $inputCategory; ?>&keyword=<?php echo $inputKeyword; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php
				}
			}
			?>

			<!-- link Next Page -->
			<?php
			if ($page == $totalPage) {
				?>
				<li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
				<?php
			} else {
				$linkNext = ($page < $totalPage) ? $page + 1 : $totalPage;
				if ($inputCategory == "" && $inputKeyword == "") {
					?>
					<li class="page-item"><a class="page-link" href="rs-rujukan?page=<?php echo $linkNext; ?>">Next</a></li>
					<?php
				} else {
					?>
					<li class="page-item"><a class="page-link" href="rs-rujukan?category=<?php echo $inputCategory; ?>&keyword=<?php echo $inputKeyword; ?>&page=<?php echo $linkNext; ?>">Next</a></li>
					<?php
				}
			}
			?>
		</ul>
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