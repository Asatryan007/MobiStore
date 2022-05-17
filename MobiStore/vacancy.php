<?php

session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/vacancy.css"> <!---CSS LINK --->
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
	<!-- Content Start -->
	<main>

		<section class="container">
			<div class="vacancy_info">
					<h3 class="vacancy_info-title">Աշխատանքային պարտականությունները</h3>
							<p class="vacancy_conditions">
			-Հաճախորդներին տրամադրել անհրաժեշտ տեղեկատվություն <br>
			-Իրականացնել վաճառքի պրոցեսը՝ խորհրդատվությունից մինչև ձևակերպում <br>
			-Իրականացնել գանձապահական աշխատանքների վարումը <br>
			-Վարել հաճախորդների տվյալների բազան, ներքին համակարգի աշխատանքի վերաբերյալ հաշվետվություններ ներկայացնել <br>
			-Պատասխանել մուտքային հեռախոսազանգերին <br>
			-Հաղորդակցվել այլ բաժինների հետ՝ կապված ծառայության մատուցման ընթացքում 
			առաջացած խնդիրների լուծման և ընկերության
			ու հաճախորդների միջև լավ հարաբերությունների պահպանման հետ <br>
			-Իրականացնել բովանդակալից գործառույթներ<br>
			Աշխատանքային գրաֆիկը՝ 10:00-20։00 կամ 11։00-21։00 <br>
			Աշխատանքային օրերը՝ 6 օր <br>
			Աշխատավարձը՝ բարձր <br>

			 <br><br><br>
			<strong>Պահանջվող որակավորումը</strong><br>
			-Կրթություն` բարձրագույն<br>
			 -Տարիքը՝ 23-35 տարեկան <br>
			-Որակներ՝ բարեհամբույր, պարտաճանաչ <br>
			-Համակարգչային ծրագրերի իմացություն` MS OFFICE <br> 
			-Լեզուների իմացություն` հայերեն, ռուսերեն, անգլերեն (ցանկալի) <br>
			-1C ծրագրի իմացությունը կդիտարկվի որպես առավելություն <br>
			-Աշխատանքային փորձը սպասարկման ոլորտում ՊԱՐՏԱԴԻՐ է (ցանկալի է տեխնիկայի ոլորտում) <br>
						</p>
				
				</div>

			<div class="vacancy_news">
				<h3 class="title_for_cv">Աշխատանքի դիմելու հայտ</h3>
					<p>Աշխատանքի դիմելու համար կարող եք ձեռ ռեզյումեն ուղարկել մեր Էլ-հասցեին <br>Էլ-հասցե ։ mobistore@company.org</p>

			</div>
		</section>

	</main>
	<!-- Content end -->
<!-- Footer start -->
<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>