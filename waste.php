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
						<p>Limbah adalah buangan atau material dari sisa-sisa bahan produksi yang kebanyakan dari pabrik diuntuk di buang karena dianggap tidak ada nilai-nilai didalamnya</p>
					</div>
					<div class="app-card">
						<p>Asal limbah adalah sisa material atau buangan yang bermula dari proses berakhirnya teknologi yang dilakukan dan dari proses alam yang dimana dengan adanya material tersebut tidak bermanfaat bagi lingkungan dan tidak mempunyai nilai.</p>
					</div>
					<div class="app-card">
						<p>Pada dasar datangnya berbagai limbah yang sering kita temui dari kegitan manusia, entah itu kegiatan industri maupun rumah tangga yang berdampak negatif kepada lingkungan dan juga kesehatan manusia.</p>
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