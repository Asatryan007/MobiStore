<?php
	session_start();
	include	'php/db_connect.php';
	include	'php/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<?php include_once 'php/keywords.php' ?>
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/style.css"> <!---CSS LINK --->
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
	<main class="main">

		
		<!--- Intro Start--->

		<section class="intro">
			<!-- Background for 480px start -->
			<div class="about_assortment">
				<div class="blur">
					
				</div>
				<div class="about_items">
						<p>Գերշահավետ Առաջարկ <br><br>
							Գերիջեցված Գներ
						</p>
						<a href="assortment.php"><button>Տեսնել Ավելին</button></a>
					</div>
			</div>
			<!-- Background for 480px end -->
			<!-- Slideshow container -->
						<div class="slideshow-container">
		
							  <!-- Full-width images with number and caption text -->
							  <div class="myslides fade">
			
								<img src="IMG/Slide/aboutsales.png">
								<h1 class="first-slide_title">MobiStore</h1>
								<p class="first-slide_text">Գերշահավետ Առաջարկ</p>
								<p class="first-slide_text_line2">Գերիջեցված Գներ</p>
								<a href="assortment.php"><input type="button" class="more-btn" value= "Ավելին"></a>
							  </div>
			
							  <div class="myslides fade">
								<img src="IMG/Slide/delivery.jpg">
								<h2 class = "second-slide_title">ՊԱՏՎԻՐԻ՛Ր <br> ՕՆԼԱՅՆ</h2>
								<p class="second-slide_text">MobiStore Առաքում</p>
								<a href="assortment.php"><input type="button" class="more-btn" value= "Ավելին"></a>
							  </div>
			
							  <div class="myslides fade">
								<img src="IMG/Slide/service.png">
							  </div>
						</div>
						<script src="js/slider.js"></script> <!-- JS  connect --> 
					<!-- Partners Information links -->
						<div class="about_partners">
							<div class="container">
								<h2>Պաշտոնական Գործընկերներ</h2>
								<ul class="partners_list">
									<a href="#apple"><li><img src="IMG/MobileIcons/apple.png" alt="Apple"></li></a>
									<a href="#samsung"><li><img src="IMG/MobileIcons/samsung.png" alt="Samsung"></li></a>
									<a href="#xiaomi"><li><img src="IMG/MobileIcons/xiaomi.png" alt="Xiaomi"></li></a>
									<a href="#nokia"><li><img class="nokia-icon" src="IMG/MobileIcons/nokia.png" alt="Nokia"></li></a>
									<a href="#huawei"><li><img src="IMG/MobileIcons/huawei.png" alt="Huawei"></li></a>
								</ul>
							</div>
		</div>
		</section>
		<!--- Intro End--->

		<!-- Benefits start-->
		<section class="benefits container">
			<div class="benefits-wrap">
				<h2 class="benefits-title">
					<span class="title__1letter">M</span><span class="title_letter_O">o</span><span class="title_letter">bi</span><span class="title__1letter">S</span><span class="title_letter">t</span><span class="title_letter_O">o</span><span class="title_letter">re</span>-ի առավելությունները
				</h2>
				<div class="benefits__cards">
					<div class="benefits_card">
						<div class="benefits_card-pic">
							<img src="IMG/customer-service.png" alt="Սպասարկում" class="benefits_card-design" disabled>
						</div>
						<h3 class="benefits_card-title">
							Սպասարկում
						</h3>
						<p class="benefits_card-desc">
							<strong>MobiStore-ը</strong>  առաջարկում է սպասարկման բարձր որակ, ինչն ապահովում է  անձնակազմի բարձր մասնագիտացումը:
						</p>
					</div>
					<div class="benefits_card">
						<div class="benefits_card-pic">
							<img src="img/best.png" alt="The Best" class="benefits_card-design">
						</div>
						<h3 class="benefits_card-title">
							Առցանց Խանութ
						</h3>
						<p class="benefits_card-desc">
							Լավագուններից մեկը Հայաստանում
						</p>

					</div>
					<div class="benefits_card">
						<div class="benefits_card-pic">
							<img src="IMG/fast-delivery.png" alt="Online-shopping" class="benefits_card-design">
						</div>
						<h3 class="benefits_card-title">
							Առաքում ամբողջ ՀՀ <div class="center-text">տարածքում</div>
						</h3>
						<p class="benefits_card-desc">
							Մենք հոգացել ենք այն մասին, որպեսզի առցանց գնումները լինեն պարզ, հաճելի և խնայեն Ձեր ժամանակը:

						</p>
					</div>
				</div>
				<div class="benefits_card-registr">
					<p class="button-text">Պատվիրելու և հավելյալ ծառայություններից օգտվելու հաամար</p> 
						<a href="register.php" class="registr_link">
							<button class="registr_button">Գրանցվիր</button>
						</a>
				</div>
		</section>
		<!-- Benefits end-->

		<!-- About Partners Start -->
		<section class="about container">

				<h2>Գործընկերների մասին</h2>
				<!-- About Apple -->

		<div id = "apple" class="grid_group">
			<div class="grid_item-1"><img src="img/mobileicons/apple.png" alt="Apple_logo"></div>
			<div class="grid_item-2">
					<p>
						<strong>Apple Inc.</strong>, ամերիկյան ընկերություն, զբաղվում է անհատական և պլանշետային համակարգիչների, նվագարկիչների, հեռախոսների, ծրագրային ապահովման արտադրությամբ։ Անհատական համակարգիչների և գրաֆիկական միջերեսով ժամանակակից բազմախնդիր օպերացիոն համակարգերի բնագավառի ռահվիրաներից մեկն է։ Գլխավոր գրասենյակը Կալիֆոռնիա նահանգի Կուպերտինո քաղաքում է։
						Նորարարական տեխնոլոգիաների և էսթետիկ ձևավորման շնորհիվ Էփլ ընկերությունն էլեկտրոնիկայի սպառողական արդյունաբերության մեջ ստեղծել է պաշտամունքի հավասարվող եզակի համբավ։ Ընկերությունն աշխարհում առաջին տեղն է զբաղեցնում շուկայական կապիտալիզացիայով, որի չափը 2016 թվականի հունվարի 11-ի դրությամբ կազմում է 538 միլիարդ ԱՄՆ դոլար։<br><br>
						Պաշտոնական կայքը ՝  <a href="https://www.apple.com/" target="_blank">www.apple.com</a>
					</p>
				</div>
		</div>
		<div id = "samsung" class="grid_group">
			<div class="grid_item-1"><img src="IMG/MobileIcons/samsung.png" alt="Samsung_logo"></div>
			<div class="grid_item-2">
					<p >
						<strong>Samsung</strong> հարավկորեական կազմակերպություն, որը հիմնադրվել է 1938 թվականին։ Համաշխարհային շուկայում հայտնի է որպես բարձր տեխնոլոգիական կոմպոնենտների, հեռահաղորդակցման սարքավորումների, կենցաղային տեխնիկայի, տեսալսողական սարքավորումերի արտադրող։ Կենտրոնական գրասենյակը գտնվում է Սեուլում։ <strong>Apple</strong>-ի գլխավոր մրցակիցն է։
						«Սամսունգ» բառը կորեերեն նշանակում է «երեք աստղ»։ Հնարավոր է այն կապված է հիմնադրի՝ Սամսունգ Լի Բյոնչխոլյայի երեք որդիների հետ:<br><br>
						Պաշտոնական կայքը ` <a href="https://www.samsung.com/ru/" target="_blank">www.samsung.com</a>
					</p>
			</div>
		</div>
		<div id= "xiaomi" class="grid_group">
			<div class="grid_item-1"><img  src="IMG/MobileIcons/xiaomi.png" alt="Xiaomi_logo"></div>
			<div class="grid_item-2">
					<p> 
						<strong>Xiaomi Inc</strong> չինական ընկերություն, որը մասնագիտացված է թվային էլեկտրոնային սարքերի արտադրության մեջ։ <strong>Xiaomi</strong> ապրանքանիշի ներքո հանդես են գալիս մի շարք խելացի սարքավորումներ՝ խելացի վարագույրներից մինչև էքստրեմալ պայմաններում աշխատելու համար նախատեսված ռոբոտներ։<br>
						Սյաոմին հիմնադրվել է ութ ընկերների կողմից 2010 թվականի ապրիլի 6-ին։ 2010 թվականի օգոստոսի 16-ին <strong>Xiaomi</strong>-ն թողարկեց իր առաջին սմարթֆոնը հիմնված Android օպերացիոն համակարգի վրա։
						2013 թվականի սեպտեմբերի 5-ին Սյաոմին հայտարարեց 3D հեռուստացույց պատրաստելու նոր գաղափարի մասին, որը պետք է ունենար 47 դյույմ անկյունագիծ և հավաքվեր Թայվանի Wistron գործարանում։
						Սյաոմիի խորհրդանիշը գլխարկով նապաստակն է՝ կարմիր աստղով և կարմիր փողկապը վզին։
						2014 թվականի նոյեմբերին Սյոմիի տնօրենը հայտարարեց սմարթֆոնների շուկայում առաջինը դառնալու ծրագրի մասին։
						2016 թվականից գործում է Սյաոմիի օնլայն խանութը։<br><br>
						Պաշտոնական կայքը ՝ <a href="https://www.mi.com/ru/" target="_blank">www.mi.com</a>
					</p>
			</div>
		</div>
		<div id ="nokia" class="grid_group">
			<div class="grid_item-1"><img src="IMG/MobileIcons/nokia.png" alt="nokia_logo"></div>
			<div class="grid_item-2">
					<p>
						<strong>Nokia Corporation</strong> ֆիննական անդրազգային ընկերություն, բջջային, ֆիքսված, լայնաշերտ և IP ցանցերի հեռահաղորդակցական սարքավորումների արտադրող։ 2000-ական թվականներին գերիշխում էր բջջային հեռախոսների համաշխարհային շուկայում (2013 թվականից Nokia ապրանքանիշի ներքո հեռախոսները թողարկվում են այլ արտադրողների կողմից)։<br>
						2013 թվականի սկզբի դրությամբ ընկերությունում աշխատում էր մոտ 100 հազար աշխատակից, 2000-ական թվականների վերջին աշխատակիցների թիվը հասել է 132 հազարի։ Ընկերության արտադրանքը վաճառվում է աշխարհի ավելի քան 150 երկրներում։ 2012 թվականին կորցրել է առաջին տեղը բջջային հեռախոսների շուկայում՝ զիջելով <strong>Samsung</strong>-ին՝ 19 տոկոս մասնաբաժնով 22 տոկոսի դիմաց։<br>
						2011-2012 թվականներին շուկայի մասնաբաժնի կորստի պայմաններում սկսել է ակտիվորեն համագործակցել Microsoft-ի հետ, ըստ էության, հրաժարվելով Symbian բջջային սարքերի համար սեփական օպերացիոն համակարգի աջակցությունից և MeeGo օպերացիոն համակարգի զարգացումից՝ անցնելով Windows Phone հարթակ:<br>
						Ընկերության գլխավոր գրասենյակը գտնվում է Հելսինկիի Էսպոո քաղաքում։<br><br>
						Պաշտոնական կայքը ՝ <a href="https://www.nokia.com/" target="_blank">www.nokia.com/</a>
					</p>
			</div>
		</div>
		<div id = "huawei" class="grid_group">
			<div class="grid_item-1"><img src="IMG/MobileIcons/huawei.png" alt="Huawei_logo"></div>
			<div class="grid_item-2">
				<p>
						<strong>Huawei Technologies</strong> հեռուստահաղորդակցության ոլորտում ամենամեծ չինական ընկերություններից։ Հիմնադրել է Չինաստանի ազգային ազատագրական բանակի նախկին անդամ Ժեն Չժենֆեյը 1987 թվականին։
						2006 թվականին ընկերությունը ցույնց տվեց աճ նոր սերնդի ցանցերի ոլորտում, ներառյալ նաև 3G ցանցում։<br>
						Դեռ 2010 թվականին ընկերությունը ուներ 8 մարզային գրասենյակ և 100 մասնաճյուղ ամբողջ աշխարհում։ <strong>Huawei-ն</strong> ունի 20 գիտահետազոտական կենտրոն տարբեր երկրներում՝ ներառյալ Չինաստան, ԱՄՆ, Գերմանիա, Թուրքիա, Հնդկաստան, Շվեդիա և Ռուսաստան։ Ընկերությունը ստեղծել է ժամանակակից ինովացիոն կենտրոններ Vodafone Group, BT Group, Telecom Italia, France Telecom, Telefonica, Deutsche Telekom ընկերությունների հետ:<br>
						2010 թվականի սեպտեմբերի 21-ին Հոնկոնգում Հուավեյն ներկայացրեց նախատիպը չունեցող DSL (Digital Subscriber Line)` 700 Մբիթ վայրկյանում։ Այդ ցուցագրումը համարվում է առաջինը իր դասում։ Ընկերության կարծիքով՝ SuperMIMO տեխնոլոգիայի շնորհիվ (համակարգ բազմաթիվ մուտքերով և ելքերով) այդ որոշումը թույլ է տալիս օպերատորներին կառուցել արդյունավետ և զարգացված ցանցեր՝ բարձր անցելիության մակարդակով։ Այդ օրինակը գերազանցում էր մյուս բոլոր DSL օրինակներին։ <br>
						2015 թվականին ընկերությունը դարձավ աշխարհում սմարթֆոնների երրորդ ամենամեծ արտադրողը։<br><br>
						Պաշտոնական կայքը ՝ <a href="https://www.huawei.com/en/" target="_blank">www.huawei.com</a>
					</p>
			</div>
		</div>
	</div>
		


					</section>

		<!-- About Partners End -->

	</main>
	<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
	<!-- Footer end -->
</body>
</html>