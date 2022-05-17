<?php
	session_start();
	include	'php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include_once 'php/keywords.php' ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/profile.css"> <!---CSS LINK --->
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css"> <!-- Fa-fa conect -->
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> <!-- Jquery conect -->
	<script  type="text/javascript" src="js/script.js"></script> 
	<!--- Title in Browser--->
	<title>MobiStore</title>
</head>
<body>
	<button id = "to_top" onclick="topFunction()"><i class="fa fa-arrow-up" aria-hidden = "true"></i></button>
		<script src="js/to_top.js"></script>
	<!-- Header start -->
	<?php include_once 'php/header.php'; ?>
		<!-- Header end -->
		<!-- Content start -->
		<main>
			<section class="container">
				<div class="about_user">

					<div class="avatar">
						<?php
						if($_SESSION['user']['gender'] === 'male'){
						
							print('<img src="img/icons/user.png" alt="Male-User">');
						}
						elseif($_SESSION['user']['gender'] === 'female'){
							print('<img src="img/icons/female.png" alt="Female-User">');
						}
						?>
					</div>

					<div class="personal_info">
						<span class="span" ><?php print($_SESSION['user']['name']);echo "  "; print($_SESSION['user']['surname']);?></span>
						<span class="span">E-mail: <?= $_SESSION['user']['email'] ?></span> 
						<?php
								if(@$_SESSION['message']) {
									echo '<p class = "msg">'. $_SESSION['message'] .'</p>';
								}
								unset($_SESSION['message']);
							?>
						<form action="php/logout.php">
						<button class="btn"><i class="fa fa-sign-out"></i>Դուրս գալ</button>
						</form>
						<a class = 'configuration' href="configure.php"><i class="fa fa-cog" aria-hidden="true"></i>Կարգավորումներ</a>
						<?php 
							@$user_id = intval($_SESSION['user']['id']);
							$admin = mysqli_query($connection,"SELECT * from employee where customer_id = '$user_id'");

							if(mysqli_num_rows($admin)>0){
						?>
						<a class = 'configuration' href="admin_panel.php"><i class="fa fa-folder-open" aria-hidden="true"></i> Կառավարման կենտրոն</a>
						<?php }?>
					</div>
				</div>
				<div class="basket">

						<h2>Զամբյուղ</h2>

					<div class="basket_contents">
							
							<?php 

										
			$result = mysqli_query($connection, "SELECT DISTINCT  assortment.assortment_id, model,`image` FROM assortment,basket where customer_id = '$user_id' and basket.assortment_id = assortment.assortment_id;");
									if(mysqli_num_rows($result) == 0){
										print('
											<div class = "empty_box">
												<span class = "empty"><i class="fa fa-info-circle" aria-hidden="true"></i> Empty </span>
											</div>');
									}else {
										while($row = mysqli_fetch_assoc($result)){
											// if (in_array($row['assortment_id'],$basket_arr)){
												print('
											<div class = "product">
													
												<a href = "assortment_item.php">
													<div class = "product_img">
														<img class = "image item_id" src="IMG/Phones/'.$row['image'].'"  data-id="'.$row['assortment_id'].'">
													</div>
												</a>
												
												<div class="product_name">
													<span>'.$row['model'].'</span>
												</div>
												<div class = "btn-group">
														<form action="delivery.php" method="GET">
															<a href="delivery.php">
																<input type="hidden" name = "item_id" value = "'.$row['assortment_id'].'">
																<button class="basket_btn">
																	<i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Գնել</span>
																</button>
															</a>
														</form>
														<form id = "del_form" action = "php/del_from_basket.php" method = "get">
														<input type="hidden" name = "del_item_id" value= "'.$row['assortment_id'].'">
															<button class = "basket_btn" title = "Հեռացնել Զամբյուղից">
															<i class="fa fa-times" aria-hidden="true"></i> Հեռացնել
															</button>
														</form>
												</div> 	
											</div>');
												
											 }
											}	 
									
									
								?>			
								
					</div>
				</div>
			</section>
			<section class="container">
				<div class="order">
					<!-- Orders Content start -->
						<h2>Պատվերներ</h2>
					<div class="order_contents">
							
							<?php
							
	@$product_result = mysqli_query($connection, "SELECT assortment.assortment_id,orders.assortment_id,customer_id,model,`image`,quantity,`cash_price`,orders_date,order_fulfillment
								FROM assortment,orders where `assortment`.assortment_id = `orders`.assortment_id and customer_id = '$user_id' ");
						if(mysqli_num_rows($product_result)>0){
								while($row_product=mysqli_fetch_assoc($product_result)){
									
						print('
						<div class="ordered_product">
									
									<a href = "assortment_item.php">
										<div class = "product_img">
											<img class = "image item_id" src="IMG/Phones/'.$row_product['image'].'"  data-id="'.$row_product['assortment_id'].'">
										</div>
									</a>
									

								<div class="ordered_product_name">
									<span>'.$row_product['model'].'</span>
									
								</div>

									<div class="about_order">
										<div class="orders_date">
											<span><strong>Պատվերի օրը։ </strong> '.$row_product['orders_date'].'</span>
										</div>
										<div class="order_quantity">
											<span><strong>Քանակը։ </strong> '.$row_product['quantity'].'</span>
										</div>
										<div class="price">
											<span><strong>Գինը։ </strong> '.$row_product['cash_price'].' դր</span>
										</div>
										<div class="cost">
											<span><strong>Ընդհանուր։ </strong> '.intval($row_product['quantity'])*intval($row_product['cash_price']).' դր</span>
										</div>');
									if($row_product['order_fulfillment']==1){
										
									print('<div class="order_status-positive">
											<span><strong>Ուղարկաված է: </strong><i class="fa fa-check-circle" aria-hidden="true"></i></span>
											</div>');
									}else {
									print('
											<div class="order_status-negative">
												<span><strong>Ուղարկաված է: </strong> <i class="fa fa-times-circle" aria-hidden="true"></i> </span>
											</div>');
									}
						print('	</div>
							</div>
								
								');
								} // while bracket
							} else {
							print('
										<div class = "empty_box">
											<span class = "empty"><i class="fa fa-info-circle" aria-hidden="true"></i> Empty </span>
										</div>');
							} 
						
								?>
							
					
				</div>
				<!-- Orders Content end -->
			</section>
		</main>
		<script src="js/ajax_product_id.js"></script>
		<!-- Content end -->
		<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>