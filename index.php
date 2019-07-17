<!DOCTYPE html>
<html>
<head>
	<title>Website Kasbon</title>

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
<body>
	<div class="app">
		<?php include 'layout/panel.php'; ?>
		<div class="body">
			<div class="banner" id="banner" style="width: 100%;">
				<?php for ($i = 1; $i <= 4; $i++) { ?>
					<div 
						class="body-image"
						style="background-image: url('assets/img/covers/<?php echo $i; ?>.jpg');" >
						<div class="desc-banner post-middle">
							<h1>
								we use Recycle for better life.
							</h1>
							<p>
								kami menggunakan daur ulang untuk kehidupan yang lebih baik.
							</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<!-- <div class="logo-float">
			<div class="lf-line"></div>
			<div class="image image-all" style="background-image: url('assets/img/logo/logo3.png');"></div>
		</div> -->
		<?php include 'layout/footer.php'; ?>
	</div>
</body>
</html>