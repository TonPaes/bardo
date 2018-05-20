<?php require 'core/init.php' ?>
	<div class=" container-fluid"  >
		<!--Left side bar-->
		<div class="col-md-3 col-sm-0 " >
			<form style="padding-top:7vw ">
	  			<div class="form-group">
	  				<h3 style="text-align: center; " >Lista - Grade:</h3>
	  				<div class="btn-group" role="group" aria-label="Basic example" style="padding-left: 7vw">
		  				<a href="products-list.php">
		  					<button type="button" class="btn btn-lg btn-secondary">
		  						<i class="glyphicon glyphicon-list" style="color: #002255; " ></i>
		  					</button>
		  				</a>
				 		<a href="products-grid.php">
				 			<button type="button" class="btn btn-lg btn-secondary">
				 				<i class="glyphicon glyphicon-th" style="color: #002255; " ></i	>
				 			</button>
				 		</a>
	  				</div>
	  				<h3 style="text-align: center; " >Ascendente - Descendente:</h3>
	  				<div class="btn-group" role="group" aria-label="Basic example" style="padding-left: 7vw">
	  					<button type="button" class="btn btn-lg btn-secondary">
	  						<i class="glyphicon glyphicon-sort-by-order" style="color: #002255; " ></i>
	  					</button>
				 		<button type="button" class="btn btn-lg btn-secondary">
				 			<i class="glyphicon glyphicon-sort-by-order-alt" style="color: #002255; " ></i>
				 		</button>
	  				</div>
					<h3 style="text-align: center; " >Categoria:</h3>
	  				<div class="btn-group " role="group" aria-label="Basic example" style="padding-left: 2vw">
	  					<?php
	  						$query = "SELECT * FROM categories";
	  						$result = $db->query($query);
	  						while($cat = mysqli_fetch_assoc($result)):
	  					 ?>
	  					<button type="button" class="btn btn-lg btn-secondary">
	  						<img src=<?php echo $cat['icon'] ?> style="float:left;width:25px;height:25px">
	  					</button>
	  					<?php endwhile; ?>
	  				</div>
					<div>
	  					<h3 style="text-align: center; " >Preço:</h3>
	  					<input type="text" class="form-control" placeholder="min" style=" width: 100%; height: 30px ;box-sizing: border-box;border: 2px solid #ccc; border-radius: 4px; text-align: center; font-size: 25px; background-color: white;  padding: 1px 2px 1px 4px;" >
	  					<input type="text" class="form-control" placeholder="Max" style=" width: 100%; height: 30px ;box-sizing: border-box;border: 2px solid #ccc; border-radius: 4px; text-align: center; font-size: 25px; background-color: white;  padding: 1px 2px 1px 4px;">
	  				</div>
	  			</div>
			</form>
		</div>
		<!--Fim left side Bar-->

		<!--products grid-->
		<div class="col-md-9 col-sm-12" >
			<div class="row" >
				<div style="padding-top: 2vw" >
					<form action="#">
						<div class="col-md-11" >
							<div  class="form-group">
								<input type="text" class="form-control" placeholder="Violino Nhureson" style=" width: 100%; height: 50px ;box-sizing: border-box;border: 2px solid #ccc; border-radius: 4px; font-size: 40px; background-color: white;  padding: 12px 20px 12px 40px;" >
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-12" >
				<h4  style="padding-left: 2vw; color: grey" > Grade - Violinos - Ascendente - Preço Min. R$2000,00</h4>
				</div>
				<?php
					$sql = "SELECT * FROM products WHERE subcat = 'string'";
					$result = $db->query($sql);
					while($product = mysqli_fetch_assoc($result)) :
		 		?>
				<div class="col-md-4">
					<div class="thumbnail" >
						<img src="images/products/<?php echo $product['id']; ?>.jpg" style="float:left;width:17vw;height:17vw">
						<div class="caption">
							<h3 style=" color: #586262;"><?php echo $product['name']; ?> </h4>
							<h4 style=" color:grey;">R$<?php echo $product['price']; ?></h4>
							<h5 style=" color:grey;">Disponível: 1</h5>
							<button type="button" class="btn btn-sm btn-block btn-success" data-toggle="modal" data-target= #<?php echo $product['id']?> >
							<h4>Detalhes</h4>
						</div>
					</div>
				</div>
				<!--MODAL-->
				<div id=<?php echo $product['id']?> class="modal fade">
					<div class="modal-dialog modal-lg" >
						<div class="modal-content" >
							<div class="modal-header" >
								<button  type="button" class="close" data-dismiss="modal">&times; </button>
								<h2 class="modal-title" >Detalhes do produto</h2>
							</div>
							<div class="modal-body" >
								<div class="container-fluid" >
									<div class="row">
										<div class="col-md-5 col-sm-12" >
											<img src="images/products/<?php echo $product['id']; ?>.jpg" style="float:left;width:100%;height:100%">
										</div>
										<div  class="col-md-7 col-sm-12 "  style="padding-left: 10vw" >
											<h2><?php echo $product['title']; ?></h2>
											<h4 style=" color:grey;"  > Usado </h4>
											<hr>
											<h2 style=" color:#006788;">R$<?php echo $product['price']; ?></h2>
											<h4 style="color:#309930 " ><?php printf("12 x R$ %.2f", $product['price']/12) ?> </h4>
											<h4 style="color:#309930 " >Frete grátis! </h4>
											<hr>
											<button type="button" class="btn btn-primary" style="font-weight: bolder" ><h4>Comprar agora!</h4></button>
											<button type="button" class="btn btn-outline-primary" style="font-weight: bolder" > <h4>Adicionar ao carrinho</h4></button>
										</div>
									</div>
									<hr>
									<div>
										<h2>Informações Adicionais:</h2>
										<h4>
											<?php echo $product['description']; ?>
										</h4>
									</div>
								</div>
							</div>
							<div class="modal-footer" >
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<!--Fim Modal-->
		</div>
		<!--Fim ProdGrid-->
	</div>



	</div>
