<?php
include("system/koneksi.php");
include("system/session_login.php");
$wisata = ($_GET['wisata']);
$data = mysqli_query($koneksi, ("SELECT * FROM object_Wisata WHERE nama_object = '$wisata'"));
$destinasi = mysqli_fetch_array($data);
$object = $destinasi['id_object'];

$data2 = mysqli_query($koneksi, ("SELECT * FROM fasilitas WHERE id_object = '$object'"));

?>

<!DOCTYPE html>
<html>

<head>
	<title>Traveller Madura</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		.bintang-rating {
			padding-left: 20%;
			padding-bottom: 1em;

		}

		.bintang-rating input {
			display: none;

		}

		.bintang-rating input+label {
			cursor: pointer;
			text-shadow: 1px 1px 0 #ffe400;
			font-size: 3em;

		}


		.bintang-rating input[type="checkbox"]:checked+label {
			color: #ffe400;

		}


		.bintang-rating label:active {
			transform: scale(0.8);
			transition: 0.3s ease;
		}
	</style>
</head>
<script src="https://kit.fontawesome.com/2bc309c78c.js" crossorigin="anonymous"></script>

<body>
	<!-- <body class="full-width"> -->
	<div id="page" class="site">
		<?php include("page/Header.php"); ?>
		<!-- Header Close -->
		<section class="page-content" id="course-page">
			<div class="container">
				<main class="course-detail">
					<h2 style="margin-left:20%;font-family:'Courier New', Courier, monospace"><?php echo $destinasi['nama_object']; ?></h2>
					<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($destinasi['gambar']) . '" class="rounded" alt="" width="500">' ?>

					<article>
						<section class="course-intro">
							<h3>Deskripsi</h3>
							<p style="text-align:Justify;"><?php echo $destinasi['deskripsi']; ?></p>
						</section>

						<section class="course-objective">
							<h3>Fasilitas</h3>
							<p>Wisata yang satu ini memiliki fasilitas seperti berikut:</p>
							<ul>
								<?php
								while ($fasilitas = mysqli_fetch_array($data2)) {
								?>
									<li><?php echo $fasilitas['fasilitias']; ?></li>
								<?php } ?>
							</ul>

							<h3>Lokasi</h3>
							<p itemprop="location"><i class="fas fa-map-marker-alt"></i> <?php echo $destinasi['alamat']; ?></p>
							<a href="<?php echo $destinasi['url_maps']; ?>"><input type="button" class="button" value="G-Maps"></a>

							<h3>Tiket masuk</h3>
							<p>anda dapat memasuki kawasan destinasi ini dengan membayar tiket masuk sebesar Rp.<?php echo $destinasi['harga_tiket']; ?></p>

							<h3>Testimoni</h3>
							<div class="row">

								<?php
								$testimoni = mysqli_query($koneksi, ("SELECT wisatawan.nama_wisatawan, testimoni.tanggal_testimoni, object_wisata.nama_object, testimoni.testimoni, testimoni.nilai FROM testimoni INNER JOIN wisatawan USING (id_wisatawan) INNER JOIN object_wisata USING (id_object) WHERE id_object ='$object'"));
								while ($testi = mysqli_fetch_array($testimoni)) {

								?>
									<hr>
									<div class="rewiew-content">
										<header>
											<p><?php echo $testi['testimoni']; ?></p>
										</header>
										<footer>
											<span>
												<div class="bintang-rating" style="padding: 0;">
													<h4><?php echo $testi['nama_wisatawan'] ?></h4>
													<?php for ($i = 0; $i < $testi['nilai']; $i++) {
													?>
														<p style="color: #ffe400;" name="rating[]" id="rating99">
															<label for="rating99" class="fa-solid fa-star"></label>
														<?php	} ?>
														<p style="padding-left: 10px;"><?php echo $testi['tanggal_testimoni']; ?></p>
												</div>
											</span>
										</footer>
									</div>
								<?php } ?>
							</div>
						</section>
					</article>
				</main>
				<aside>
					<div class="reserve-course">
						<h2>Beri Testimoni</h2>
						<form method="POST" action="system/komentar.php">
							<input name="nama" type="hidden" placeholder="Write your message" value="<?php echo $_SESSION["username"]; ?>">
							<input name="wisata" type="hidden" placeholder="Write your message" value="<?php echo $destinasi['nama_object']; ?>">
							<input type="date" style="width:100%; margin-bottom:5%;" name="tanggal" placeholder="Tanggal hari ini" required>
							<div class="bintang-rating">
								<input type="checkbox" name="rating[]" id="rating1">
								<label for="rating1" class="fa-solid fa-star"></label>
								<input type="checkbox" name="rating[]" id="rating2">
								<label for="rating2" class="fa-solid fa-star"></label>
								<input type="checkbox" name="rating[]" id="rating3">
								<label for="rating3" class="fa-solid fa-star"></label>
								<input type="checkbox" name="rating[]" id="rating4">
								<label for="rating4" class="fa-solid fa-star"></label>
								<input type="checkbox" name="rating[]" id="rating5">
								<label for="rating5" class="fa-solid fa-star"></label>
							</div>


							<textarea name="komen" placeholder="Write your message" required></textarea>
							<input type="submit" value="Submit">
						</form>
					</div>
					<!-- New Letter Ends -->

				</aside>
			</div>
		</section>

		<!-- End of Query Section -->
		<?php include("page/Footer.php") ?>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>