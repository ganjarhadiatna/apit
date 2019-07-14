<script type="text/javascript">
	var path = '<?php echo $_GET['path']; ?>';
	$(document).ready(function() {
		console.log(path)
		$('.link-menu').removeClass('active');
		$('#'+path).addClass('active');
	});
</script>
<div>
	<div>
		<div class="footer">
			<div class="col-1">
				<a href="index.php?path=index">
					<button class="menu-icon">
						<div class="fa fa-lg fa-bars"></div>
					</button>
				</a>
			</div>
			<div class="col-2">
				<ul class="menu">
				    <li>
				    	<a href="waste.php?path=waste" class="link-menu" id="waste">
				    		Waste
				    		<div class="line"></div>
				    	</a>
				    </li>
				    <li>
				    	<a href="recycle.php?path=recycle" class="link-menu" id="recycle">
				    		Recycle
				    		<div class="line"></div>
				    	</a>
				    </li>
				    <li>
				    	<a href="product.php?path=product" class="link-menu" id="product">
				    		Product
				    		<div class="line"></div>
				    	</a>
				    </li>
				    <li>
				    	<a href="bio.php?path=bio" class="link-menu" id="bio">
				    		Bio
				    		<div class="line"></div>
				    	</a>
				    </li>
				</ul>
			</div>
		</div>
	</div>
</div>