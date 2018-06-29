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
				<ul class="nav navbar-nav navbar-right " style="font-size: 20px; padding-left: 10vw" >
					<form action="products.php" method="get" class="navbar-form navbar-right" >
						<div class="form-group">
							<input type="text" name="search" class="form-control" placeholder="Pesquisar" >
						</div>
						<button type="submit" class="btn btn-default ">
							<i class="glyphicon glyphicon-search" style="color: #002255" ></i>
						</button>
					</form>
				</ul>
		    </div>
		</div>
	</nav>
