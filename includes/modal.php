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
              <form  action="carrinho.php" method="post">
                  <input type="hidden" name="inserir" value=<?php echo $product['id'];?>>
                  <button type="submit" class="btn btn-primary" style="font-weight: bolder" ><h4>Comprar agora!</h4></button>
              </form>
              <form  action=<?php echo $_SERVER['PHP_SELF']?> method="post">
                  <input type="hidden" name="inserir" value=<?php echo $product['id'];?>>
                  <button type="submit" class="btn btn-outline-primary" style="font-weight: bolder" > <h4>Adicionar ao carrinho</h4></button>
              </form>
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
