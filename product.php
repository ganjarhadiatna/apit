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
<body>
	<div class="app">
		<?php include 'layout/panel.php'; ?>
		<div class="body">
			<div class="body-content">
				<div class="app-card">
					<h1 class="padding-top-15px padding-bottom-15px">Product</h1>
				</div>
			</div>
		</div>
		<?php include 'layout/footer.php'; ?>
	</div>
</body>
</html>