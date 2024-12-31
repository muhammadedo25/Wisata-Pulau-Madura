<!-- <?php
		session_start();
		include("system/koneksi.php");
		?> -->
<header class="site-header">
	<!-- Top header Close -->
	<div class="main-header">
		<div class="container">
			<div class="logo-wrap">
				<h1 style="margin-top:1rem; font-size:3rem;"><a href="index.php">Traveller Madura</a></h1>
				<!-- <h1>Education</h1> -->
			</div>
			<div class="nav-wrap">
				<nav class="nav-desktop">
					<ul style="list-style-type: none;" class="menu-list">
						<li><a href="index.php">Home</a></li>
						<li class="menu-parent">Category
							<ul style="list-style-type: none;" class="sub-menu" style="z-index: 99999;">
								<li><a href="destinasi.php?kategori=Alam">Wisata Alam</a>

								</li>
								<li><a href="destinasi.php?kategori=Buatan">Wisata Buatan</a>

								</li>
								<li><a href="destinasi.php?kategori=Rohani">Wisata Rohani</a>

								</li>
							</ul>
						</li>
						<li class="menu-parent">Kota
							<ul style="list-style-type: none;" class="sub-menu" style="z-index: 99999;">
								<li><a href="destinasi.php?kota=Bangkalan">Bangkalan</a>

								</li>
								<li><a href="destinasi.php?kota=Sampang">Sampang</a>

								</li>
								<li><a href="destinasi.php?kota=Pamekasan">Pamekasan</a>

								</li>
								<li><a href="destinasi.php?kota=Sumenep">Sumenep</a>

								</li>
							</ul>
						</li>
						<li><a href="index.php#AboutUs">About</a></li>
						<?php
						if (isset($_SESSION['username'])) {
						?>
							<li><?php echo ($_SESSION['username']); ?></li>
							<li><a href="system/logout.php">Log Out</a></li>

						<?php
						} else {
						?>
							<li>
								<a href="page/login.php">Login /</a>
								<a href="page/signup.php">Register</a>
							</li>
						<?php
						}
						?>
					</ul>
				</nav>
				<div id="bar">
					<i class="fas fa-bars"></i>
				</div>
				<div id="close">
					<i class="fas fa-times"></i>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Header Close -->