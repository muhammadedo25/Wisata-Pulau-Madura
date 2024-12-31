<!-- <?php
		session_start();
		include("system/koneksi.php");
		?> -->
<!DOCTYPE html>
<html>

<head>
	<title>Traveller Madura</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>

<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<?php include('page/header.php') ?>
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<video src="asset/video.mp4" loop muted autoplay></video>
				<img src="images/page-banner.jpg" alt="Image of Bannner">
				<img src="images/page-banner2.jpg" alt="Image of Bannner">
				<img src="images/page-banner3.jpeg" alt="Image of Bannner">
			</div>
			<div class="container" itemprop="description">
				<h1>WELCOME TO DESTINATION OF GOD'S CREATION</h1>
				<h3>write your story by stepping foot in the beauty of god's creation</h3>
			</div>
			<div id="owl-four-nav" class="owl-nav"></div>
		</div>
		<div class="page-heading">
			<div class="container">
				<h2>Data Wisata</h2>
				<table class="table table-striped" style="font-size:2em;">
					<thead>
						<tr>
							<th scope="col">nama Destinasi</th>
							<th scope="col">Kota</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$data = mysqli_query($koneksi, ("SELECT * FROM object_Wisata"));
						while ($destinasi = mysqli_fetch_array($data)) {
						?>
							<tr>
								<td><?php echo $destinasi['nama_object'] ?></td>
								<td><?php echo $destinasi['kota'] ?></td>
								<td>
									<a href="edit.php?wisata=<?php echo $destinasi['nama_object'] ?>"><input type="button" value="Ubah"></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- Popular courses End -->

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>