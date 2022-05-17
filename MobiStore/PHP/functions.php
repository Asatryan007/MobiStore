
<?php

function db_result_assortment($connection,$class,$table,$where,$condition, $where1 = 'cash_price' ,$min = 0,$max = 9999999){
	
	
	
	$result = mysqli_query($connection, "SELECT * FROM $table WHERE $where ='$condition' and $where1  >= '$min' and $where1 < '$max' and `availability` = 1 ");
	
		if(@$_SESSION['user']){
			@$user_id = intval($_SESSION['user']['id']);
			$result1 = mysqli_query($connection,"SELECT DISTINCT assortment_id FROM basket WHERE customer_id = '$user_id'");
			$arr = array();
				while($row1 = mysqli_fetch_assoc($result1)){
					
					@$arr [] = intval($row1['assortment_id']);
				}
		}
while($row = mysqli_fetch_assoc($result) ) {
	if(@$_SESSION['user']){
		if(!in_array($row['assortment_id'],@$arr)){
					print('<figure class = "'.$class.'">
					<div class="pic_cont">
			
					<a href = "assortment_item.php">
						<img class = "image item_id" src="IMG/Phones/'.$row['image'].'"  data-id="'.$row['assortment_id'].'">
					</a>
			
					<figcaption>'.$row['model'].'</figcaption>
						<div class="price_list-cont">');
							if ($row['credit_price']!= 0){
							print('
								<p class="credit_price">'.$row['credit_price'].' դր</p>
								<p class="chash_price">Կանխիկ '.$row['cash_price'].' դր</p>
								<p class="credit-month"><span>Ամսական 12x</span> '.$row['credit_price_month'].' դր</p>');
							} else 
								print('<p class="credit_price">'.$row['cash_price'].' դր</p>
								</div>');
							
					
							print('<div class="btn_group">');
						
							if(@$_SESSION['user']){
								
							print('	<form action="delivery.php">
									<input type="hidden" name = "item_id" value = "'.$row['assortment_id'].'">
									<a href="delivery.php"><button class = "btn-1" type="submit" title = "Գնել"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Գնել</button></a>
									</form>');
							}else {
								print('
									<a href="login.php"><button class = "btn-1" type="submit" title = "Գնել"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Գնել</button></a>
									');
							}
						#basket part start
						if(!@$_SESSION['user']){ #checking user is logined or not
						print('
							
							<a href = "login.php">	
							<button  type = "submit" class  = "btn-2"  title = "Ավելացնել Զամբյուղ"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Զամբյուղ</button>
							</a>
							');
						}
				
						else{

						print('
							<form class = "form">
							<input type="hidden" name = "basket" value= "'.$row['assortment_id'].'">
								<button  type = "submit" class  = "btn-2"  title = "Ավելացնել Զամբյուղ"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Զամբյուղ</button>
							</form>');}
						#basket part end
						
				print('</div>
			</figure>');
					}
			}

		else //if user is not sign in
				{	print('<figure class = "'.$class.'">
					<div class="pic_cont">
						<a href = "assortment_item.php">
							<img class = "image item_id" src="IMG/Phones/'.$row['image'].'"  data-id="'.$row['assortment_id'].'">
						</a>
					<figcaption>'.$row['model'].'</figcaption>
						<div class="price_list-cont">');
							if ($row['credit_price']!= 0){
							print('
								<p class="credit_price">'.$row['credit_price'].' դր</p>
								<p class="chash_price">Կանխիկ '.$row['cash_price'].' դր</p>
								<p class="credit-month"><span>Ամսական 12x</span> '.$row['credit_price_month'].' դր</p>');
							}
							else 
								print('<p class="credit_price">'.$row['cash_price'].' դր</p>
								</div>');
							
								print('<div class="btn_group">');
						
						if(@$_SESSION['user']){
									
								print('	<form action="delivery.php">
										<input type="hidden" name = "item_id" value = "'.$row['assortment_id'].'">
										<a href="delivery.php"><button class = "btn-1" type="submit" title = "Գնել"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Գնել</button></a>
										</form>');
						}else {
								print('
										<a href="login.php"><button class = "btn-1" type="submit" title = "Գնել"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Գնել</button></a>
										');
								}
						#basket part start
						if(!@$_SESSION['user']){ #checking user is logined or not
						print('
							
									<a href = "login.php">	
										<button  type = "submit" class  = "btn-2"  title = "Ավելացնել Զամբյուղ"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Զամբյուղ</button>
									</a>
							');
						} else

						print('
							<form class = "form">
							<input type="hidden" name = "basket" value= "'.$row['assortment_id'].'">
								<button  type = "submit" class  = "btn-2"  title = "Ավելացնել Զամբյուղ"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Զամբյուղ</button>
							</form>');
						#basket part end
					print('
						</div>
			</figure>');}
		}
				
}
 



function item_result($connection,$table,$where,$condition){
	$product = mysqli_query($connection,"SELECT * FROM $table WHERE $where = '$condition'");
	$sug_product = mysqli_query($connection,"SELECT * FROM assortment WHERE assortment_id != '$condition'  ORDER BY RAND() LIMIT 4");
	 	$row = mysqli_fetch_assoc($product);
			print('<div class="image_cont">
				<img src="img/phones/'.$row['image'].'" class = "choosen_img" alt="'.$row['model'].'">
				<h2>'.$row['model'].'</h2>
				
				<h4 class = "suggested_title">Առաջարկվող Ապրանքներ</h4>
				<div class = "suggested">
				');
				
	while($sug_row = mysqli_fetch_assoc($sug_product)){
	print('	<figure >
						<div class="pic_cont">
				
						<a href = "assortment_item.php">
							<img class = "image item_id" src="IMG/Phones/'.$sug_row['image'].'"  data-id="'.$sug_row['assortment_id'].'">
						</a>
				
						<figcaption>'.$sug_row['model'].'</figcaption>
							<div class="price_list-cont">');
								if ($row['credit_price']!= 0){
								print('
									<p class="credit_price">'.$sug_row['credit_price'].' դր</p>
									<p class="chash_price">Կանխիկ '.$sug_row['cash_price'].' դր</p>
									<p class="credit-month"><span>Ամսական 12x</span> '.$sug_row['credit_price_month'].' դր</p>');
								} else 
									print('<p class="credit_price">'.$sug_row['cash_price'].' դր</p>
									</div>');
								
						
								print('<div class="btn_group">');
							
								if(@$_SESSION['user']){
									
								print('	<form action="delivery.php">
										<input type="hidden" name = "item_id" value = "'.$sug_row['assortment_id'].'">
										<a href="delivery.php"><button class = "btn-1" type="submit" title = "Գնել"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Գնել</button></a>
										</form>');
								}else {
									print('
										<a href="login.php"><button class = "btn-1" type="submit" title = "Գնել"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Գնել</button></a>
										');
								}
							#basket part start
							if(!@$_SESSION['user']){ #checking user is logined or not
							print('
								
								<a href = "login.php">	
								<button  type = "submit" class  = "btn-2"  title = "Ավելացնել Զամբյուղ"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Զամբյուղ</button>
								</a>
								');
							
							}
					
							else

							print('
								<form class = "form">
								<input type="hidden" name = "basket" value= "'.$sug_row['assortment_id'].'">
									<button  type = "submit" class  = "btn-2"  title = "Ավելացնել Զամբյուղ"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Զամբյուղ</button>
								</form>');
							#basket part end
						print('
							</div>
		</figure>');	
				}
				print('</div>
				</div>
			<div class="info_cont">
				<h2><img src="img/icons/configure.png" alt="">Ընդհանուր բնութագրեր</h2>
				<table>
						<tr>
							<td><strong>Մոդել</strong></td>
							<td class="td">'.$row['model'].'</td>
						</tr>
						<tr>
							<td><strong>Թողարկման տարին</strong></td>
							<td>'.$row['year_of_issue'].'</td>
						</tr>
						<tr>
							<td><strong>Հիշողություն</strong></td>
							<td>'.$row['parametr_1'].'</td>
						</tr>
						<tr>
							<td><strong>Օպերատիվ հիշողույթուն</strong></td>
							<td>'.$row['parametr_2'].'</td>
						</tr>
						<tr>
							<td><strong>Օպերացիոն համակարգը</strong></td>
							<td>'.$row['parametr_3'].'</td>
						</tr>
						<tr>
							<td><strong>Մարտկոցի հզորությունը</strong></td>
							<td>'.$row['parametr_4'].'</td>
						</tr>
						<tr>
							<td><strong>Կշիռ</strong></td>
							<td>'.$row['parametr_5'].'</td>
						</tr>
						<tr>
							<td><strong>SIM քարտի քանակ</strong></td>
							<td>'.$row['parametr_6'].'</td>
						</tr>
						<tr>
							<td><strong>Bluetooth</strong></td>
							<td>'.$row['parametr_7'].'</td>
						</tr>
						<tr>
							<td><strong>NFC</strong></td>
							<td>'.$row['parametr_8'].'</td>
						</tr>
						<tr>
							<td><strong>Wifi ցանց</strong></td>
							<td>'.$row['parametr_9'].'</td>
						</tr>

						<tr>
							<td><strong>Երաշխիք</strong></td>
							<td>'.$row['guarantee'].'</td>
						</tr>

						<tr>
							<td><strong>Կանխիկ արժեք</strong></td>
							<td>'.$row['cash_price'].' դր.</td>
						</tr>
						<tr>
							<td><strong>Ապառիկ արժեք</strong></td>
							<td>'.$row['credit_price'].' դր.</td>
						</tr>
				</table>');

				if(@$_SESSION['user']){
					print('
						
							<form action="delivery.php" method="GET">
								<a href="delivery.php">
									<input type="hidden" name = "item_id" value = "'.$row['assortment_id'].'">
									<button class="btn-buy">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Գնել</span>
									</button>
								</a>
							</form>
						');}
				else{
					print('
					<a href="login.php">
						<button class="btn-buy">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Գնել</span>
						</button>
					</a>');
				}
};

function select_for_comparison($connection,$name_select,$name_value){
		$result_apple = mysqli_query($connection,"SELECT assortment_id,model FROM assortment where brand = 'Apple'");
		$result_samsung = mysqli_query($connection,"SELECT assortment_id,model FROM assortment where brand = 'Samsung'");
		$result_xiaomi = mysqli_query($connection,"SELECT assortment_id,model FROM assortment where brand = 'Xiaomi'");
		$result_huawei = mysqli_query($connection,"SELECT assortment_id,model FROM assortment where brand = 'Huawei'");
		$result_nokia = mysqli_query($connection,"SELECT assortment_id,model FROM assortment where brand = 'Nokia'");
		print('
		<select name="'.$name_select.'" >
		<option selected disabled hidden>'.$name_value.'</option>');
		echo '<optgroup label = "Apple">';
		while($row = mysqli_fetch_assoc($result_apple)){
		
				print('
					<option value="'.$row['assortment_id'].'">'.$row['model'].'</option>
			 ');}
		echo '</optgroup>';	 
		echo '<optgroup label = "Samsung">';		 
		while($row = mysqli_fetch_assoc($result_samsung)){
		
				print('	
					<option value="'.$row['assortment_id'].'">'.$row['model'].'</option>
			 ');}
		echo '</optgroup>';	
		echo '<optgroup label = "Xiaomi">'; 
		while($row = mysqli_fetch_assoc($result_xiaomi)){
				print('	
					<option value="'.$row['assortment_id'].'">'.$row['model'].'</option>
			 ');}
		echo '</optgroup>';	 
		echo '<optgroup label = "Huawei">	';
		while($row = mysqli_fetch_assoc($result_huawei)){
		
				print('	
					<option value="'.$row['assortment_id'].'">'.$row['model'].'</option>
			 ');}
		echo '</optgroup>';	 
		echo '<optgroup label = "Nokia">';
		while($row = mysqli_fetch_assoc($result_nokia)){
				print('
					
					<option value="'.$row['assortment_id'].'">'.$row['model'].'</option>
			 ');		
			}
		echo '</optgroup>';	 
		
		
		print('</select>');

}

function comparative_tables($connection,$id,$where,$condition,$user_id){
	$result = mysqli_query($connection,"SELECT * FROM comparison,assortment WHERE customer_id = '$user_id' and $where = '$condition' and assortment_id = '$condition' order by comparison.id desc");
	$row = mysqli_fetch_assoc($result);
	print('
	<table id = "'.$id.'">
						<tr >
							<td colspan = "2">
								<a href = "assortment_item.php">
									<img class = "image item_id" src="IMG/Phones/'.$row['image'].'"  data-id="'.$row['assortment_id'].'">
								</a>
							</td>
						</tr>
						<tr>
							<th class="desc">Մոդել</th>
							<td>'.$row['model'].'</td>
						</tr>
						<tr>
							<th class="desc">Թողարկման տարի</th>
							<td>'.$row['year_of_issue'].'</td>
						</tr>
						<tr>
							<th class="desc">Հիշողություն</th>
							<td>'.$row['parametr_1'].'</td>
						</tr>
						<tr>
							<th class="desc">Օպերատիվ հիշողություն</th>
							<td>'.$row['parametr_2'].'</td>
						</tr>
						<tr>
							<th class="desc">Օպերացիոն համակարգ</th>
							<td>'.$row['parametr_3'].'</td>
						</tr>
						<tr>
							<th class="desc">Մարտկոցի հզորություն</th>
							<td>'.$row['parametr_4'].'</td>
						</tr>
						<tr>
							<th class="desc">Կշիռ</th>
							<td>'.$row['parametr_5'].'</td>
						</tr>
						<tr>
							<th class="desc">SIM</th>
							<td>'.$row['parametr_6'].'</td>
						</tr>
						<tr>
							<th class="desc">Արժեք</th>
							<td>'.$row['cash_price'].' դր</td>
						</tr>
					</table>
	');

}
?>


