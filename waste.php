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
		    $('#image').bxSlider({
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
<body class="image image-background" style="background-image: url('assets/img/waste/background.jpg');">

	<div class="app">
		<?php include 'layout/panel.php'; ?>
		<div class="body">
			<div class="body-content grid grid-2x gap-25px">
				<div class="col-1">
					<div class="app-card">
						<h1 class="padding-top-15px padding-bottom-15px">WASTE/LIMBAH</h1>
					</div>
					<div class="app-card">
						<p>
							limbah merupakan material dari sisa-sisa bahan produksi yang tidak terpakai dan di buang. Limbah dapat menjadi masalah bagi lingkungan apabila dibuang begitu saja. Limbah dapat mencemari lingkungan karena bahan-bahannya yang tidak mudah terurai dan mengandung bahan kimia yang berbahaya, sehingga dapat berdampak negatif bagi kesehatan manusia. Sumber limbah didapatkan dari Industri besar maupun industri rumahan. 
						</p>
					</div>
					<div class="app-card">
						<p>
							Limbah yang masih dapat diolah dapat digunakan menjadi bahan untuk produk yang baru. Ferma leather merupakan industri rumahan yang menggunakan sebagian besar produknya dari pemanfaatan limbah kulit sapi. Memanfaatkan limbah yang masih dapat diolah merupakan usaha untuk mengurangi penumpukan limbah dan mengurangi pencemaran lingkungan, sehingga industri yang melakukan proses recycle perlu didukung keberadaannya baik oleh pemerintah dan masyarakat.
						</p>
					</div>
				</div>
				<div class="col-2">
					<div class="place-image" id="image">
						<?php for ($i = 1; $i <= 2; $i++) { ?>
							<div 
								class="image image-all"
								style="background-image: url('assets/img/waste/<?php echo $i; ?>.jpg');" ></div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php include 'layout/footer.php'; ?>
	</div>

</body>
</html>