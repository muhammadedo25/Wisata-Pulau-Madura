<?php
// include ("system/session_login.php")
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
</head>

<body>
	<div id="page" class="site">
		<?php
		include("page/Header.php");
		if (isset($_GET['kota'])) {
			$kota = ($_GET['kota']);
			$data = mysqli_query($koneksi, ("SELECT * FROM object_Wisata WHERE kota = '$kota'"));
		} elseif (isset($_GET['kategori'])) {
			$kota = ($_GET['kategori']);
			if ($kota == "Alam") {
				$kategori = 1;
			} elseif ($kota == "Buatan") {
				$kategori = 2;
			} else {
				$kategori = 3;
			}
			$data = mysqli_query($koneksi, ("SELECT * FROM object_Wisata WHERE id_kategori = '$kategori'"));
		}
		?>

		<section class="page-heading">
			<div class="container">
				<h2>Destination in <?php echo $kota; ?></h2>
			</div>
		</section>
		<section class="upcomming events-section">
			<div class="container">
				<?php
				while ($destinasi = mysqli_fetch_array($data)) {
					$wisata = $destinasi['nama_object'];
				?>
					<div class="event-wrap">
						<div class="img-wrap" itemprop="image">
							<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($destinasi['gambar']) . '" class="rounded" alt="" width="500">' ?>
						</div>
						<div class="details">
							<a href="post-single.php?wisata=<?php echo $wisata ?>">
								<h3 itemprop="name"><?php echo $destinasi['nama_object']; ?></h3>
							</a>
							<?php
							$readmore = substr($destinasi['deskripsi'], 0, 150);
							?>
							<p itemprop="description"><?php echo $readmore ?>...</p>

							<h5>Tiket Masuk Rp.<?php echo $destinasi['harga_tiket']; ?></h5>
							<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> <?php echo $destinasi['alamat']; ?></h5>

						</div>
					</div>
				<?php } ?>
			</div>
		</section>
		<!-- Upcomming Events Closed -->

		<?php include("page/Footer.php") ?>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>