
<footer>
  	 <div class="footer-container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4><strong>Ինֆորմացիա</strong></h4>
  	 			<ul>
  	 				<li><a href="https://www.google.com/maps/place/Zoravar+Andranik/@40.171375,44.5127895,19z/data=!3m1!4b1!4m5!3m4!1s0x406abc58b0b80d47:0x7ab4038211e2def2!8m2!3d40.1713747!4d44.5133662" target="_blank" 
										>Մեր հասցեն</a></li>
  	 				<li><a  href="about.php">Մեր Մասին</a></li>
					<li><a  href="contact.php">Կապ Մեզ Հետ</a></li>
					<li><a  href="assortment.php">Տեսականի</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4><strong>Հղումներ</strong></h4>
				<ul>
					<li>
                    <?php
						if (@$_SESSION['user']){
					         print('<a href="profile.php">Իմ էջը</a>');
									}
						else print('<a href="login.php">Մուտք</a>');
					?>
                    </li>
					<li><a href="vacancy.php">Աշխատատեղեր</a></li>
					<?php if (!@$_SESSION['user']){?>
					<li><a  href="register.php">Գրանցում</a></li>
					<?php } ?>
					<li><?php
						if (@$_SESSION['user']){
					         print('<a href="compare.php">Համեմատել</a>');
									}
						else print('<a href="login.php">Համեմատել</a>');
					?></li>
				</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4><strong>Կապ</strong></h4>
					<ul >
					<li><a class="footer_link" href="https://www.google.com/maps/place/Zoravar+Andranik/@40.171375,44.5127895,19z/data=!3m1!4b1!4m5!3m4!1s0x406abc58b0b80d47:0x7ab4038211e2def2!8m2!3d40.1713747!4d44.5133662" target="_blank">Ք. Երեվան,Տիգրան մեծի պողոտա</a></li>
					<li><a href="mailto:vardan.asatryan.02@mail.ru" style="text-transform: lowercase;">mobistore@company.org</a></li>
					<li><a href="tel: +37494596003">+374 77 007700</a></li>
					
									
					</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4><strong>Սոցիալ Մեդիա</strong></h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
		<div class="footer_down">
			<div class="container">
				<p>Terms | Privacy |© 2022 MobiStore. All Rights Reserved. </p>
			</div>
		</div>
</footer>
