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
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/assortment_style.css"> <!---CSS LINK --->
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css"> <!-- Fa-fa conect -->
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script><!-- Jquery conect-->
	<script  type="text/javascript" src="js/script.js"></script><!-- Js conect-->
	<!--- Title in Browser--->
	<title>MobiStore</title>
</head>
<body>
	<button id = "to_top" class="to_top" onclick="topFunction()"><i class="fa fa-arrow-up" aria-hidden = "true"></i></button>
	<script src="js/to_top.js"></script> <!-- JS  Btn to top -->
		<!-- Header start -->
		<?php include_once 'php/header.php'; ?>
		<!-- Header end -->

	<main class="main">
		<section class="container">
			<nav id="navigation">
				<h3 class="nav_menu-title">Բրենդներ</h3>

					<ul class="assortment_list">
						<li data-f = "all" class="assortment_list-item"><img src="IMG/Icons/grid.png" alt="All"><span>Բոլորը</span></li>
						<li data-f ="apple" class="assortment_list-item"><img src="IMG/MobileIcons/apple.png" alt="Apple"><span>Apple</span></li>
						<li data-f = "samsung"class="assortment_list-item"><img src="IMG/MobileIcons/samsung.png" alt="Samsung"><span>Samsung</span></li>
						<li data-f = "xiaomi" class="assortment_list-item"><img src="IMG/MobileIcons/xiaomi.png" alt="Xiaomi"><span>Xiaomi</span></li>
						<li data-f = "nokia" class="assortment_list-item"><img src="IMG/MobileIcons/nokia.png" alt="Nokia"><span>Nokia</span></li>
						<li data-f = "huawei" class="assortment_list-item"><img src="IMG/MobileIcons/huawei.png" alt="Huawei"><span>Huawei</span></li>
					</ul>
					<script src="js/active_brand.js"></script>
			<!-- Range for price start -->
				<div class="filters">
					<div class="phone_comprison">
						<h3>Հեռախոսների համեմատում</h3>
					<?php if(@$_SESSION['user']['id']){ ?>
						<a href="compare.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>Համեմատել․․․</a>
					<?php }else{?>
						<a href="login.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>Համեմատել․․․</a>
					<?php }?>
					</div>
					<div class="filters_item filters-price">
						<h3 class="filters-price_title">Գին</h3>
						<form action="assortment.php" id = "price_filter" class="filters-price_inputs" method="get" >
							<label for="" class="filters-price_label">
								<input id = "min" type="number" min="10000" max="2000000" maxlength="8" placeholder="10000" name = "min" class="filters-price_input">
								<span class="filters-price_text">ԴՐ</span>
							</label>
							<span class="arrow"></span>
							<label id="last_lab" for="" class="filters-price_label">
								<input id = "max" type="number" min="10000" max="2000000" maxlength="1" placeholder = "2000000" name = "max" class="filters-price_input">
								<span class="filters-price_text">ԴՐ</span>
							</label>
							<button type="submit" class="btn" ><i class="fa fa-refresh" aria-hidden="true"></i></button>
							<button class = "btn"><i class="fa fa-filter" aria-hidden="true"></i></button>
						</form>

						
					</div>
				</div>
				<!-- Range for price end -->
			</nav>
			
			<div class="content">
			<?php
			@$min = $_GET['min'];
			@$max = $_GET['max'];
					
			if($min !=null and $max != null){
                        if ($max < $min){
                            $max =intval($min)+intval($max);
                            $min = $max - $min;
                            $max = $max - $min; 
                        }
                        db_result_assortment($connection,"apple","assortment","brand","Apple","cash_price",$min,$max);
                        db_result_assortment($connection,"samsung","assortment","brand","Samsung","cash_price",$min,$max);
                        db_result_assortment($connection,"xiaomi","assortment","brand","Xiaomi","cash_price",$min,$max);
                        db_result_assortment($connection,"huawei","assortment","brand","Huawei","cash_price",$min,$max);
                        db_result_assortment($connection,"nokia","assortment","brand","Nokia","cash_price",$min,$max);
				}
            elseif($min != null){
                        db_result_assortment($connection,"apple","assortment","brand","Apple","cash_price",$min);
                        db_result_assortment($connection,"samsung","assortment","brand","Samsung","cash_price",$min);
                        db_result_assortment($connection,"xiaomi","assortment","brand","Xiaomi","cash_price",$min);
                        db_result_assortment($connection,"huawei","assortment","brand","Huawei","cash_price",$min);
                        db_result_assortment($connection,"nokia","assortment","brand","Nokia","cash_price",$min);
                    }
            elseif($max != null){
                        db_result_assortment($connection,"apple","assortment","brand","Apple","cash_price",0,$max);
                        db_result_assortment($connection,"samsung","assortment","brand","Samsung","cash_price",0,$max);
                        db_result_assortment($connection,"xiaomi","assortment","brand","Xiaomi","cash_price",0,$max);
                        db_result_assortment($connection,"huawei","assortment","brand","Huawei","cash_price",0,$max);
                        db_result_assortment($connection,"nokia","assortment","brand","Nokia","cash_price",0,$max);
            		}
			else{
				db_result_assortment($connection,"apple","assortment","brand","Apple");
				db_result_assortment($connection,"samsung","assortment","brand","Samsung");
				db_result_assortment($connection,"xiaomi","assortment","brand","Xiaomi");
				db_result_assortment($connection,"huawei","assortment","brand","Huawei");
				db_result_assortment($connection,"nokia","assortment","brand","Nokia");
			}

				

				
        	?>
			</div>
			<script src="js/ajax_product_id.js"></script>
			<script src="js/assortment_filter.js"></script>
			<script  src="js/form_handler.js"></script>

		</section>
	</main>
	<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
	<!-- Footer end -->
</body>
</html>