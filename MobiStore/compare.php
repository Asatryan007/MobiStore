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
	<link rel="stylesheet" href="CSS/compare.css">
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
				<h2>Համեմատում</h2>

				<?php
					
					if(@$_SESSION['flag']['bool']== 0){
				?>
				<div class="select_box">
				<form action = "php/comparison_handler.php" method = "GET">
					<span>Ընտրեք առաջին հեռախոսը <?php select_for_comparison($connection,'item_id_1','Հեռախոս 1')?></span>
											<span>Ընտրեք երկրորդ հեռախոսը <?php select_for_comparison($connection,'item_id_2','Հեռախոս 2')?> </span>
								<button class="btn" type="submit">Համեմատել</button>
				</form>
				</div>
					
				<?php
				
					}else if($_SESSION['flag']['bool']== 1){
						@$user_id = $_SESSION['user']['id'];
						$item_id_1 = $_SESSION['items']['item_1'];
						$item_id_2 = $_SESSION['items']['item_2'];
					print('<div class="compare_tables">	');
						comparative_tables($connection,'item_1','item_id_1',$item_id_1,$user_id);
						comparative_tables($connection,'item_2','item_id_2',$item_id_2,$user_id);
						
						print('
						</div>
						<form action="php/comparison_reset.php" method="post">
						<input type="hidden" name = "reset" value ="0">
						<button class = "btn" type="submit">Վերադառնալ Հեռախոսներ ընտրելուն</button>
					</form>');
					$_SESSION['flag']['bool']=  0;
						
					 }
						if(@$_SESSION['message']) {
							echo '<p class = "msg">'. $_SESSION['message'] .'</p>';
						}
						unset($_SESSION['message']);
						
				?>
					<script src="js/ajax_product_id.js"></script>
					
					

			
			</section>
		</main>
		<!-- Content End -->

		<!-- Footer start -->
<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>