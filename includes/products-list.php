<?php require 'core/init.php' ?>
<div class=" container-fluid"  >

		<!--LEFTSIDE BAR-->
		<?php include 'includes/left-bar.php' ?>

		<!--PRODUCTS LIST-->
		<!--MAIN SEARCH FORM-->

		<div class="col-md-9 col-sm-12" >
			<div class="row">
			<?php include 'includes/main-search.php' ?>
			</div>
			<div class="list-group" >




				<!--PRODUTOS-->

				<!--QUERY PRODUTOS-->
				<?php include 'includes/products-query.php' ?>

					<!--ITEMS DA LISTA-->
				<?php	while($product = mysqli_fetch_assoc($result)) :?>
				<div class="list-group-item row ">
						<div class="col-md-4 col-sm-12 " >
						<img src="images/products/<?php echo $product['id']; ?>.jpg" style="width:18vw;height:20vw">
						</div>
						<div class="col-md-8">
							<h2 style=" color: #586262; " ><?php echo $product['name']?></h2>
							<h3 style=" color:grey; "><?php echo $product['price']?></h3>
							<h4 style=" color:grey; " >Disponível: 1</h4>
							<button type="button" class="btn btn-sm  btn-success" data-toggle="modal" data-target=#<?php echo $product['id']?>>
							<h4>Detalhes</h4>
						</div>
				</div>

				<!--MODAL-->
				<?php include 'includes/modal.php' ?>


			<?php endwhile;?>

			</div>
		</div>
	</div>
