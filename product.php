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
				<?php if (isset($_GET['id'])) { ?>
					<?php foreach ($data as $dt) { ?>
						<?php if ($_GET['id'] == $dt['id']) { ?>
							<div class="body-content" style="width: 1000px; margin: auto;">
								<div class="app-card ">
									<div class="app-product">
										<div class="col-1">
											<?php if (count($dt['images']) > 0) {?>
												<div class="product-image" id="banner">
													<?php foreach ($dt['images'] as $img) { ?>
														<div class="image image-full" style="background-image: url('assets/img/product/<?php echo $dt["id"]; ?>/<?php echo $img["image"]; ?>');"></div>
													<?php } ?>
												</div>
											<?php } else { ?>
												<div 
													class="image image-full"
													style="background-image: url('assets/img/product/<?php echo $dt["id"]; ?>/<?php echo $dt["cover"]; ?>');"></div>
											<?php } ?>
										</div>
										<div class="col-2">
											<div class="margin-5px txt-site txt-16 txt-bold">
												<h3><?php echo $dt['title']; ?></h3>
											</div>
											<table>
												<tr>
													<td>
														Barang
													</td>
													<td>:</td>
													<td>
														<?php echo $dt['title']; ?>
													</td>
												</tr>
												<tr>
													<td>
														Harga
													</td>
													<td>:</td>
													<td>
														<?php echo $dt['price']; ?>
													</td>
												</tr>
												<tr>
													<td>
														Kategori
													</td>
													<td>:</td>
													<td>
														<?php echo $dt['category']; ?>
													</td>
												</tr>
												<tr>
													<td>
														Material
													</td>
													<td>:</td>
													<td>
														<?php echo $dt['material']; ?>
													</td>
												</tr>
												<tr>
													<td>
														Pembuatan
													</td>
													<td>:</td>
													<td>
														<?php echo $dt['construction']; ?>
													</td>
												</tr>
												<tr>
													<td>
														Deskripsi
													</td>
													<td>:</td>
													<td>
														<?php echo $dt['description']; ?>
													</td>
												</tr>
												<tr>
													<td>
														Gambar lainnya
													</td>
													<td>:</td>
													<td>
														<?php echo count($dt['images']); ?> gambar
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				<?php } else { ?>
					<div class="margin-top-30px display-flex">
						<?php foreach ($data as $dt) { ?>
							<div class="df-card app-card">
								<a href="product.php?path=product&id=<?php echo $dt['id']; ?>">
									<div 
										class="image image-full"
										style="background-image: url('assets/img/product/<?php echo $dt["id"]; ?>/<?php echo $dt["cover"]; ?>');"></div>
								</a>
								<div class="margin-5px txt-site txt-14 txt-bold">
									<?php echo $dt['title']; ?>
								</div>
								<div class="txt-site txt-11 txt-thin">
									<?php echo $dt['category']; ?>
									<i class="fa fa-1x fa-circle" style="position: relative; top: -3px; font-size: 4pt;"></i>
									<?php echo $dt['price']; ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php include 'layout/footer.php'; ?>
	</div>
</body>
</html>