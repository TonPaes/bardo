<?php require_once 'core/init.php';?>
<nav class="navbar navbar-fixed-top" style=" background-color: #215273 " >
		<div class="container-fluid">
			<div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" 	data-target="#myNavbar" style="color: white">
		    		<span class="icon-bar" ></span>
		    		<span class="icon-bar"></span>
		    		<span class="icon-bar"></span>
				</button>
				<a href="index.php" style=" padding-left: 3vw; font-size:30px; font-weight: bolder; color: white; " class="navbar-brand ">
				<img src="images/icons/icon-clave.png" style="float:right;width:110px;height:30px">
				</a>
			</div>
			<div class="collapse navbar-collapse navbar-right " id="myNavbar">
				<ul class="nav navbar-nav" style="font-size: 20px; padding-right: 5vw; color: white;" >
					<li> <a href="products.php?search=Cordas" class="nav-btn" > <img src="images/icons/icon-violin.png" style="float:left;width:1.8vw;height:1.8vw">Cordas</a></li>
					<li><a href="products.php?search=Palhetas" class="nav-btn" > <img src="images/icons/icon-clarinet.png" style=" float:left; width:1.8vw; height:1.8vw"> Palhetas</a></li>
					<li><a href="products.php?search=Metal" class="nav-btn"> <img src="images/icons/icon-trumpet.png" style="float:left;width:1.8vw;height:1.8vw">
				    		 Metais</a></li>
					<li><a href="products.php?search=Percurssão" class="nav-btn"> <img src="images/icons/icon-drum.png" style="float:left;width:1.8vw;height:1.8vw"> Percurssão</a></li>
				</u>
				<ul class="nav navbar-nav navbar-right " style="font-size: 17px; padding-left: 10vw; padding-top: 10px " >
					<a href="carrinho.php" style=" color: white; font-weight:;"  > <img src="images/icons/icon-cart.png" style="float:left;width:25px;height:25px; ">
					<?php

					$sql = "SELECT * FROM user";
					$aa = $db->query($sql);
					echo " ".mysqli_num_rows($aa)." Itens| ";
					while ($compra = mysqli_fetch_assoc($aa) ){
						$sql = "SELECT * FROM pro WHERE id =".$compra['code'];
						$result = $db->query($sql);
						while ($product = mysqli_fetch_assoc($result) ){
								$total += $product['price'];
							}
						}
					printf("R$%.2f", $total);
					?>
					</a>
				</ul>
		    </div>

		</div>
	</nav>
