<?php require 'core/init.php' ?>
	<div class=" container-fluid"  >

		<!--LEFTSIDE BAR-->
		<?php include 'includes/left-bar.php' ?>

		<!--PRODUCTS GRID-->
		<div class="col-md-9 col-sm-12" >
			<div class="row" >

				<!--MAIN SEARCH-->
				<?php include 'includes/main-search.php' ?>

				<!--PRODUCTS-->
				<?php include 'includes/products-query.php'?>

				<?php while($product = mysqli_fetch_assoc($result)) :?>

				<!--ITEN?S DA LISTA-->
				<div class="col-md-4">
					<div class="thumbnail" >
						<img src="images/products/<?php echo $product['id']; ?>.jpg" style="float:left;width:17vw;height:17vw">
						<div class="caption">
							<h3 style=" color: #586262;"><?php echo $product['name']; ?> </h4>
							<h4 style=" color:grey;">R$<?php echo $product['price']; ?></h4>
							<h5 style=" color:grey;">Disponível: 1</h5>
							<button type="button" class="btn btn-sm btn-block btn-success" data-toggle="modal" data-target=#<?php echo $product['id']?>>
							<h4>Detalhes</h4>
						</div>
					</div>
				</div>


				<!--MODAL-->
				<?php include 'includes/modal.php' ?>

				<?php endwhile; ?>
			</div>
		</div>
	


	</div>
