

	<header class="header">
				<div class="container"> 		<!--- Width of content part--->
					<div class="header__body">
						<a href="index.php" class="header__logo">
							<img src="IMG/Logo.png" alt="MobiStore">
						</a>

						<div class="header__burger">
							<span></span>
						</div>
						<nav class="header__menu">
							<ul class="header__list">
								<li>
									<a href="index.php"  class="header__link ">Գլխավոր</a>
								</li>
								<li>
									<a href="assortment.php"   class="header__link">Տեսականի</a>
								</li>
								<li>
									<a href="about.php"  class="header__link">Մեր մասին</a>
								</li>
								<li>
									<a href="contact.php"  class="header__link">Կապ</a>
								</li>

								<li>
								<?php
									if (@$_SESSION['user']){
										print('<a href="profile.php"  class="header__link">Իմ էջը</a>');
									}
									else print('<a href="login.php"  class="header__link">Մուտք</a>');
								?>
								</li>

							</ul>
						</nav>
						<script src="js/active_link.js"></script>
					</div>
				</div>
		</header>

