<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.html">Penawaran Spesial</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Cari Produk..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cari Produk...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="pull-right" style="padding:2px;">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<?php if (isset($_SESSION['email'])) : ?>
								<li><?php 
										$sql = "SELECT nama FROM user WHERE email = '" . $_SESSION['email'] . "'";
										$result = mysqli_query($db,$sql);
										//echo $result;
										$row = mysqli_fetch_array($result);
										echo $row['nama'];								?></li>
										<li><a href="profile.php">Profil</a></li>
								<li><a href="resPassword.php">Ganti Password</a></li>
								<li><a href="index.php?logout_user='1'">Logout</a></li>
							<?php endif ?>

							<?php if (!isset($_SESSION['email'])) : ?> 
								<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Sign Up</a></li>
							<?php endif ?>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>Halaman</span> Utama</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.html">Events</a><i>/</i></li>
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="products.html">Best Deals</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0858) 61934625</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">anonymouse14@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	