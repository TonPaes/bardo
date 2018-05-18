<?php require 'core/init.php' ?>	
	
	<div class=" container-fluid"  >
		<!--product's grid-->
		<div class="col-md-12 col-sm-12" >
			<div class="list-group" >
				<div class="row"  style="padding-top: 2vw" >
					
				</div>	
				<?php  
				$sql = "SELECT * FROM products WHERE categories = 'violino'";
				$result = $db->query($sql);
				$total = 0.0;
				while ($product = mysqli_fetch_assoc($result) ) :
				?>
				
				<div class="list-group-item row ">
						<div class="col-md-4 col-sm-12 " >				
						<img src=<?php echo $product['image'] ?> style="width:145px;height:140px">
						</div>
						<div class="col-md-8">
							<h3 style=" color: #586262; " ><?php echo $product['title'] ?></h2>
							<h4 style=" color:grey; "><?php printf("%.2f", $product['price']) ?></h3>
							<h5 style=" color:grey; " >Disponível: 1</h4>
							<button type="button" class="btn btn-sm  btn-fail" data-toggle="modal" data-target="#details-1">
								<h5>Remover da Lista</h4>
							</button>
						</div>
				</div>
				<?php $total += $product['price']?>
				<?php endwhile; ?>
				<div class="col-md-6" >
						
					</div>
					<div class="col-md-6 row" style="padding-top: 2vw"	 >
						<hr>
						<h2 class="col-md-6" >Total:</h2>
						<h2 class="col-md-6" style=" float: right; color:#006788;" ><?php printf("%.2f	",$total) ?></h2>
						<hr>
						<hr>
						<div class="col-md-8" style="float: right" >
							<button type="button" class="btn btn-sm  btn-success" style="float: right;" >
							 	<h4  >Finalizar compra</h4>
							</button>
							<button type="button" class="btn btn-sm  btn-fail " >
							 	<h4  >Continuar Navegando</h4>
							</button>
						</div>
					</div>
			</div>	
		</div>
	</div>