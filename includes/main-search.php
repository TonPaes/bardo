<div style="padding-top: 2vw" >
  <form action="products.php" method="get">
    <div class="col-md-11" >
      <div  class="form-group">

        <input type="hidden" name="rank" value=<?php echo $_GET['rank'];?>>
        <input type="hidden" name="layout" value=<?php echo $_GET['layout'];?>>
        <input type="hidden" name="order" value=<?php echo $_GET['order'] ?>>
        <input type="hidden" name="minprice" value=<?php echo $_GET['minprice'] ?>>
        <input type="hidden" name="maxprice" value=<?php echo $_GET['maxprice'] ?>>
        <input type="text" class="form-control" name="search" placeholder="Enter para pesquisar" style=" width: 100%; height: 50px ;box-sizing: border-box;border: 2px solid #ccc; border-radius: 4px; font-size: 40px; background-color: white;  padding: 12px 20px 12px 40px;" >

      </div>
    </div>
  </form>
</div>

<div class="col-md-12" >
  <!--Usar printf aqui para fazer a interpolação-->
  <h3 style="text-align: left; " >Resultados para: <?php echo $_GET['search'] ?></h3>
  <h5  style="padding-left: 0vw; color: grey" > <?php echo "Exibição: ".$_GET['layout'] ."|      Ordenação: ".$_GET['order'] ." | Classificação: ".$_GET['rank']  ."| Preço mínimo:  R$". $_GET['minprice'] ." | Preço Máximo: R$". $_GET['maxprice']   ?> </h4>
</div>
