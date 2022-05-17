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
	<link rel="stylesheet" href="CSS/about.css"> <!---CSS LINK --->
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css"> <!-- Fa-fa conect -->
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> <!-- Jquery conect -->
	<script  type="text/javascript" src="js/script.js"></script> 
	<!--- Title in Browser--->
	<title>MobiStore</title>
</head>
<body>
	<button id = "to_top" onclick="topFunction()"><i class="fa fa-arrow-up" aria-hidden = "true"></i></button>
		<script src="js/to_top.js"></script>
		<?php include_once 'php/header.php'; ?>
	<main>

		<section class="container">
			<div class="infopage">
				<h2>Մեր մասին</h2>
				<p>
					<strong>«MobiStore»</strong> խանութների ցանցը բջջային հեռախոսների վաճառքով զբաղվող ամենամեծ ցանցն է Հայաստանում: <strong>«MobiStore» -ն</strong> իր գործունեությունն իրականացնում է 2021թ.-ից: Հետագայում իր բարեխիղճ և բարձրորակ ծառայությունների մատուցման շնորհիվ ընկերությունը արագորեն նվաճեց հաճախորդների վստահությունը և կարճ ժամանակում ընդլայնեց իր գործունեության աշխարհագրությունը: Տվյալ պահին «MobiStore»-ը ներկայացնում է մասնագիտացված խանութ-սրահներ քաղաք Երևանում և բոլոր մարզերում:
				</p>
				<p>
					<strong>«MobiStore»-ի</strong> կարգախոսն է « Միայն լավագույնը» և այդ կարգախոսին հավատարիմ լինելով՝ ընկերությունը համագործակցում է միայն բաձրորակ ապրանք արտադրող համաշխարհային բրենդների հետ, ինչպիսիք են՝ <strong><a href="https://www.samsung.com/ru/" target="_blank">Samsung</a>, <a href="https://www.nokia.com/" target="_blank">Nokia</a>, <a href="https://www.apple.com/" target="_blank"> Apple</a>, <a href="https://www.mi.com/ru/" target="_blank">Xiaomi</a>, <a href="https://www.huawei.com/en/" target="_blank">Huawei</a></strong> և այլ ապրանքանիշները: Հանդիսանալով վերոնշյալ ընկերությունների պաշտոնական ներկրողը Հայաստանում` հաճախորդներին առաջարկում է միայն որակյալ ապրանք՝ տրամադրելով 1 տարվա պաշտոնական երաշխիք անմիջապես արտադրողից: Ընկերությունն իր հաճախորդին առաջարկում է ոչ միայն բջջային հեռախոսներ, այլ նաև բազմատեսակ տեխնիկա՝ հեռուստացույցներ, պլանշետներ և այլն: Ընկերության խանութ-սրահներն աշխատում են շաբաթը 7 օր, ընկերությունը համագործակցում է Հայաստանում գործող գրեթե բոլոր առաջատար բանկերի հետ, ապառիկը ձևակերպվում է տեղում և այս ամենը ուղղված է միայն հաճախորդների հարմարավետ, արագ և շահավետ գնումներ կատարելուն: Ընկերության կազմի մեջ մտնում է նաև մասնագիտացված սպասարկման կենտրոնը, որն ապահովում է <strong>MobiStore</strong> խանութների ցանցից ձեռք բերված տեխնիկայի ինչպես երաշխիքային, այնպես էլ հետերաշխիքային սպասարկումը: Չնայած առկա տեխնիկայի բարձրորակ ապրանքատեսականու հսկայական ծավալներին՝ իր որդեգրած քաղաքականության շնորհիվ ընկերությունն օրեցօր աճում և ընդլայնվում է՝ իր հաճախորդներին ներկայանալով տեխնիկայի ավելի լայն ու ժամանակակից տեսականիով:
				</p>
				<p><strong>Հեռ.: +374 77 007700, +374 96 009600</strong></p>
				<p><strong>E-mail: info@mobistore.am </strong></p>
			</div>
			<div class="about_credit">
				<h2>Ապառիկի պայմաններ</h2>
				<p>
						<strong>«MobiStore»</strong> խանութների ցանցում ապառիկով գնումների հնարավորություն ունեն 
					20 տարին լրացած  ՀՀ քաղաքացիները:
					Ապառիկը ձևակերպելիս գները մնում են անփոփոխ:<br>
					<strong>Տարեկան տոկոսադրույքը՝</strong> 0%<br>
					<strong>Կանխավճարը ՝</strong> սկսած 0%-ից  <br>
					<strong>Հաշվի սպասարկման վճարը` ամսական սկսած ընդհանուր արժեքի 0,75%-ից, 
					կախված բանկի ընտրությունից:</strong><br>
					Կախված բանկի ընտրությունից վերոնշյալ վճարները և պայմանները կարող են փոփոխվել:<br>

					<strong>Համագործակցում ենք հետևյալ բանկերի հետ.</strong>  
					<ul>
						<li>«ԱԿԲԱ – Կրեդիտ Ագրիկոլ Բանկ» ՓԲԸ</li>    

						<li>«Յունիբանկ» ԲԲԸ</li>     

						<li>«Ինեկոբանկ» ՓԲԸ </li>  

						<li>«ՎՏԲ - Հայաստան բանկ» ՓԲԸ </li> 

						<li>«Կոնվերս Բանկ»  ՓԲԸ</li>  

						<li> «Ամերիաբանկ» ՓԲԸ</li> 
						 </ul> 
				</p>
			</div>
		</section>

	</main>
	<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
	<!-- Footer end -->
</body>
</html>