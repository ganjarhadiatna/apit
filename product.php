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

<?php include 'dataProduct.php'; ?>

<body class="image image-background" style="background-image: url('assets/img/product/background.jpg');">
	<div class="app">
		<?php include 'layout/panel.php'; ?>
		<div class="body">
			<div class="body-content">
				<div class="app-card" style="width: 400px; text-align: center; margin: auto;">
					<h1 class="padding-top-15px padding-bottom-15px">
						Product
					</h1>
				</div>
				<div class="margin-top-30px display-flex">
					<?php foreach ($data as $dt) { ?>
						<div class="df-card app-card">
							<div 
								class="image image-full"
								style="background-image: url('assets/img/product/<?php echo $dt["id"]; ?>/<?php echo $dt["cover"]; ?>');"></div>
							<div class="margin-5px txt-site txt-18 txt-bold">
								<?php echo $dt['title']; ?>
							</div>
							<div class="txt-site txt-12 txt-thin">
								<?php echo $dt['category']; ?>
								<i class="fa fa-1x fa-circle" style="position: relative; top: -3px; font-size: 4pt;"></i>
								<?php echo $dt['price']; ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php include 'layout/footer.php'; ?>
	</div>
</body>
</html>