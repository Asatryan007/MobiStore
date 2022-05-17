<?php
	session_start();
	include	'php/db_connect.php';
	include	'php/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include_once 'php/keywords.php' ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/delivery.css"> <!-- CSS Link-->
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
		<main>
			<section class="container">
				<h2>Առաքում</h2>
				<?php
				$item_id = $_GET['item_id'];
				$product = mysqli_query($connection,"SELECT * FROM assortment WHERE assortment_id = '$item_id'");
				$row = mysqli_fetch_assoc($product);
				print('
					<div class="product">
						<div class="item">
							<img src="img/phones/'.$row['image'].'" alt="'.$row['model'].'">
						</div>
						<h3>'.$row['model'].'</h3>');
				?>
					<div class="item_quantity">
						<div class="input-group group-w">
							<form action="php/delivery_handler.php" method = "post">
							<input type="text" name = "quantity" readonly id="form-control" value = "1">
							</form>
							<div class="input-group-btn">
								<button id = "minus" type="button" onclick="CountofDetalis('down')"><i class="fa fa-minus" aria-hidden = "true"></i></button>

								<button id ="plus" type="button"  onclick="CountofDetalis('up')"><i class="fa fa-plus" aria-hidden = "true"></i></button>
							</div>
						</div>
					</div>
				<?php
				print('
					<div class="item_price">
						<div class="price">
							<span id = "price" value = "'.$row['cash_price'].'">'.$row['cash_price'].' </span> դր
						</div>
						<a href="assortment.php"><button class="btn"><i class="fa fa-times" aria-hidden="true"></i>Հեռացնել</button></a>
					</div>
				</div>');
				?>
				<script src="js/price_from_quantity.js"></script>
			</section>
			<section class="container">
				<div class="info-form">
					<form id = "form" action="php/delivery_handler.php" method="post">
						<div class = "personal_info">
							<label >էլ-հասցե *</label>
							<input type="email"  class ="input input-email" name = "email" placeholder="mobistore@">
					    </div>
						<div class = "personal_info">
							<label >Հեռախոսահամար*</label>
							<input type="text" class ="input input-phone"   name = "phone" placeholder="374 94-00-00-00" maxlength="11" >
						</div>
					    <div class = "personal_info">
							<label >Հասցե *</label>
							<input type="text"   class = "input" name = "address" placeholder="Քաղաք, Փողոց, տուն/շենք, բնակարան">
						</div>
						<div class = "personal_info">
							<label >Վճարման եղանակ *</label>
							
							<div class = "radio_box">
								<label for = "cash" class="radio_label" ><input id = "cash"  type="radio" name="payment_type" value="կանխիկ">Կանխիկ</label>
								<label for = "card" class = "radio_label"><input id = "card"  type="radio" name="payment_type" value="քարտով">Քարտով</label>
								<p class = "msg"></p>
							</div>
						</div>
						
						<div class = "personal_info">
							<label>Նշումներ</label>
							<textarea name="notes" id="comment_area"  rows="5" placeholder="Նշումներ"></textarea>
						</div>
						<input type="hidden" name = "quantity" readonly id="form-control-val" value = "1">
						<?php echo '<input type="hidden" name = "item_id" value="'.$row['assortment_id'].'">'?>
						
						<button type="submit" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Գնել</button>
					</form>
					<script src="js/validate_form.js"></script>
				</div>
			</section>
		</main>
		<script src="js/count.js"></script>

<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>