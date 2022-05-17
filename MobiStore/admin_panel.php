<?php
	session_start();
	include	'php/db_connect.php';
    $uid = $_SESSION['user']['id'];
    $admin = mysqli_query($connection, "SELECT position FROM employee Where customer_id = '$uid' ");
    $row = mysqli_fetch_assoc($admin);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/admin_panel.css"> <!---CSS LINK --->
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
			<div class="add_content">
                <h2>Ավելացնել ապրանք</h2>
                <span>*լրացնել բոլոր դաշտերը</span>
                <form action="php/admin_handler.php" method="post" enctype="multipart/form-data">
                    <div class="form_group">
                        <label>Brand</label>
                        <input type="text" required name  = "brand" placeholder="Apple/Samsung/Xiaomi/Nokia/Huawei">
                    </div>
                    <div class="form_group">
                        <label>Model</label>
                        <input type="text" required name = "model" placeholder="Iphone 13 Pro Sierra Blue">
                    </div>
                    <div class="form_group">
                        <label>Ապրանքի Անվանումը</label>
                        <input type="text" required name="product_name"  placeholder="Phone/TV/Accessories">
                    </div>
                    <div class="form_group">
                        <label>Թողարկման տարին</label>
                        <input type="number" required name="year_of_issue" min = "2018" maxlength="4" placeholder="2022">
                    </div>
                    <div class="form_group">
                        <label>Նկարը</label>
                        <input type="file" required id="formImage" name="image" accept=".jpg, .png, .gif, .jpeg">
                        <div id ="formPreview">
                        </div>
                    </div>
                    <div class="form_group">
                        <label>Հիշողությունը</label>
                        <input type="text" required name = "parametr_1" placeholder="Parametr 1">
                    </div>
                    <div class="form_group">
                        <label>RAM</label>
                        <input type="text" required name="parametr_2" placeholder="Paramaetr 2">
                    </div>
                    <div class="form_group">
                        <label>Օպերացիոն համակարգ</label>
                        <input type="text" required name = "parametr_3" placeholder="Parametr 3">
                    </div>
                    <div class="form_group">
                        <label>Մարտկոց</label>
                        <input type="text" required name="parametr_4" placeholder="Parametr 4">
                    </div>
                    <div class="form_group">
                        <label>Քաշ</label>
                        <input type="text" required name="parametr_5" placeholder="Parametr 5">
                    </div>
                    <div class="form_group">
                        <label>SIM</label>
                        <input type="text" required name="parametr_6" placeholder="Parametr 6">
                    </div>
                    <div class="form_group">
                        <label>Blutooth</label>
                        <input type="text" required name="parametr_7" placeholder="Parametr 7/Այո/Ոչ">
                    </div>
                    <div class="form_group">
                        <label>Wifi</label>
                        <input type="text" required name="parametr_8" placeholder="Parametr 8/Այո/Ոչ">
                    </div>
                    <div class="form_group">
                        <label>NFC</label>
                        <input type="text"  required name="parametr_9" placeholder="Parametr 9/Այո/Ոչ">
                    </div>
                    <div class="form_group">
                        <label>Կանխիկ գին</label>
                        <input type="number" required min = "0" name="cash_price" placeholder="Կանխիկ գին">
                    </div>
                    <div class="form_group">
                        <label>Ապառիկ գին</label>
                        <input type="number" required min = "0" name="credit_price" placeholder="Ապառիկ գին" >
                    </div>
                    <div class="form_group">
                        <label>Ամսեկան(12 ամիս)</label>
                        <input type="number" required name="credit_monthly" min = "0" placeholder="Ամսեկան վճարի արժեք 12 ամիս">
                    </div>
                    <div class="form_group">
                        <label>Առկայություն</label>
                        <span>1- առկա է</span>
                        <span>0- առկա չէ</span>
                        <input type="number"  required name="availability" placeholder="1/0" min= "0" max = "1" maxlength="1">
                    </div>
                    <?php if($row['position'] == 'Admin'){ ?>
                    <button class="btn" name="add" type="submit">
                        Ավելացնել
                    </button>
                    <?php }else{ ?>
                    <button disabled class="btn" name="add" type="submit">
                        Ավելացնել
                    </button>
                    <?php } ?>
                </form>
                <?php
						if(@$_SESSION['message']) {
							echo '<p class = "msg">'. $_SESSION['message'] .'</p>';
						}
						unset($_SESSION['message']);
					?>
            </div>
            <script src="js/image_reader.js"></script>

            <div class="update_conent">
                <h2>Թարմացնել/Ապաակտիվացնել ապրանքը</h2>
                <form action="php/admin_handler.php" method="post">
                    <h3>Պայմանը -</h3><span>ըստ ինչ պայմանի թարմացվի</span>
                    <div class="form_group">
                        <label>Model</label>
                        <input type="text" name = "model" placeholder="Ըստ մոդելի">
                    </div>
                    <div class="form_group">
                        <label>ID</label>
                        <input type="text" name = "id" placeholder="Ըստ ID -ի">
                    </div>
                    <h3>Թարմացումը</h3>
                    <div class="form_group">
                        <label>Կանխիկ գին</label>
                        <input type="number"  min = "0" name="cash_price" placeholder="Կանխիկ գին">
                    </div>
                    <div class="form_group">
                        <label>Ապառիկ գին</label>
                        <input type="number"  min = "0" name="credit_price" placeholder="Ապառիկ գին" >
                    </div>
                    <div class="form_group">
                        <label>Ամսեկան(12 ամիս)</label>
                        <input type="number"  name="credit_monthly" min = "0" placeholder="Ամսեկան վճարի արժեք 12 ամիս">
                    </div>
                    <div class="form_group">
                        <label>Առկայություն</label>
                        <span>1- առկա է</span>
                        <span>0- առկա չէ</span>
                        <input type="number"   name="avaibility" placeholder="1/0" min= "0" max = "1" maxlength="1">
                    </div> 
                    <button type="submit" class="btn" name = "update">Թարմացնել</button>
                </form>
                <?php
						if(@$_SESSION['message_upd']) {
							echo '<p class = "msg">'. $_SESSION['message_upd'] .'</p>';
						}
						unset($_SESSION['message_upd']);
				?>
            </div>
            <div class="feedbacks">
            <h2>Feedbacks</h2>
                <div class="feedback_content">
                    <?php 
                        $result = mysqli_query($connection,"SELECT * FROM feedbacks order by feedback_id desc  limit 50");
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div class="feedback">
                            <span>Email: <?php echo $row['email']?></span> 
                            <span class="feed">Թեմա։ <?php echo $row['topic']?> </span>
                            <span class="feed">Հաղորդագրություն</span>
                            <p><?php echo $row['feedback']?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="orders">
            <h2>Պատվերներ</h2>
                <div class="orders_content">
                    <?php 
                        $result = mysqli_query($connection,"SELECT * FROM orders,assortment,customer where customer.customer_id = orders.customer_id and   orders.assortment_id = assortment.assortment_id order by order_id desc limit 100 ");
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <table class="order">
                            <tr>
                                <td>Նկար</td>
                                <td><img src="img/Phones/<?= $row['image'] ?>" alt="<?= $row['model'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Մոդել</td>
                                <td><?= $row['model'] ?></td>
                            </tr>
                            <tr>
                                <td>Անուն Ազգանուն</td>
                                <td><?= $row['name'] ?> <?= $row['surname'] ?></td>
                            </tr>
                            <tr>
                                <td>Հեռ․</td>
                                <td><?= $row['phone'] ?></td>
                            </tr>
                            <tr>
                                <td>Վճարման եղանակ</td>
                                <td><?= $row['payment_type'] ?></td>
                            </tr>
                            <tr>
                                <td>Նշումներ</td>
                                <td><?= $row['notes'] ?></td>
                            </tr>
                            <tr>
                                <td>Պատվերի ամսաթիվ</td>
                                <td><?= $row['orders_date'] ?></td>
                            </tr>
                            <tr>
                                <td>Քանակ</td>
                                <td><?= $row['quantity'] ?></td>
                            </tr>
                            <tr>
                                <td>Պատվերի վիճակ 1 ուղարկված է/0 հակ․ դեպքում</td>
                                <td>
                                    <form class="form_status">
                                        <input type="hidden" name = "user_id" value="<?=$row['customer_id']?>">
                                        <input type="hidden" name = "item_id" value="<?=$row['assortment_id']?>">
                                        <input type="number" name = "status" min="0" max = "1" value="<?= $row['order_fulfillment']?>">
                                        <button type="submit" name="accept" class="btn">Հաստատել</button>
                                    </form>
                                </td>
                            </tr>
                            
                        </table>
                    <?php } ?>
                    <script src="js/form_handler.js"></script>
                </div>
            </div>
			</section>

		</main>
		<!-- Content end -->
		<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>