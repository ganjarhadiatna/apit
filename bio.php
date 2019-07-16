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
<body class="image image-background" style="background-image: url('assets/img/bio/background.jpg');">
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
					<p>Ferferma Leather merupakan perusahaan yang bergerak di bidang Fashion, berdiri sejak tahun 2015. Ferferma leather menggunakan limbah kulit sapi sebagai bahan utama untuk produknya. Ferferma leather melakukan proses recycle/daur ulang sebagai konsep perusahaan.</p>
				</div>
				<div class="app-card">
					<p>Ferma Leather menggunakan limbah kulit sapi dan barang-barang bekas berbahan kulit sebagai bahan utama dari produknya, diterapkan untuk melakukan proses recycle, sebagai usaha membantu mengurangi limbah, mengurangi pencemaran lingkungan, mengurangi dampak negatif dari limbah, membantu membersihkan lingkungan dan menjaga kesehatan masyarakat sekitar.</p>
				</div>
				<div class="app-card">
					<p>
						Kami memberikan kualitas terbaik untuk Anda.
						<br>Jika Anda entah bagaimana kecewa dengan kualitas produk, kami memberikan garansi seumur hidup.
						<br>Kami yakin dengan kualitas produk & keahlian kami.
						<br>Nikmati Ferma!
					</p>
				</div>
			</div>
		</div>
		<?php include 'layout/footer.php'; ?>
	</div>
</body>
</html>