<!DOCTYPE html>
<html>
<head>
	<title>Sample Website</title>

	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
	<link rel="stylesheet" type="text/css" href="assets/icons/fontawesome/css/all.min.css">

	<script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>

	<script type="text/javascript">
    	$(document).ready(function () {
		    $('#banner').bxSlider({
		        auto: true,
		        autoHover: false,
		        controls: false,
		        autoControls: false,
		        stopAutoOnClick: false,
		        pager: false,
		    });
		});
    </script>
</head>
<body class="image image-all" style="background-image: url('assets/img/bio/background.jpg');">
	<div class="app">
		<?php include 'layout/panel.php'; ?>
		<div class="body">
			<div class="body-content" style="width: 600px; text-align: center; margin: auto;">
				<div class="app-card">
					<h1 class="padding-top-15px padding-bottom-15px">
						Ferma Leather
					</h1>
				</div>
				<div class="app-card">
					<p>Ferma Leather yang berfilosofi recycle/daur ulang yang mencoba mengajak masyarakat sekitar untuk ikut membantu meminimalisir banyaknya sampah yang sudah menjadi masalah selama bertahun - tahun silam, dengan filosofi recycle yang Ferma Leather terapkan mencoba mencari barang - barang yang sudah tak terpakai atau sudah usang dapat digunakan kembaii dan dapat dimanfaatkan lagi menjadi barang atau produk, Ferma Leather yang berdiri pada tahun 2015 hingga sekarang 2019.</p>
				</div>
				<div class="app-card">
					<p>Kami memberikan kualitas terbaik untuk Anda.
					<br>Jika Anda entah bagaimana kecewa dengan kualitas produk, kami memberikan garansi seumur hidup.
					<br>Kami yakin dengan kualitas produk & keahlian kami.
					Nikmati Ferma!</p>
				</div>
			</div>
		</div>
		<?php include 'layout/footer.php'; ?>
	</div>
</body>
</html>