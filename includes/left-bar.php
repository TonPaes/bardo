<div class="col-md-3 col-sm-0 " >

      <div class="form-group">

        <!--RANKING-->
        <h3 style="text-align: center; " >Classificar por:</h3>
        <div class="btn-group" role="group" aria-label="Basic example" style="padding-left: 7vw">
          <?php
          $queryByPrice = $_GET;
          $queryByPrice['rank'] = 'preço' ;
          $queryByPrice = http_build_query($queryByPrice);
          ?>
          <a href=<?php  echo "products.php?" . $queryByPrice ?>>
            <button type="button" class="btn btn-lg btn-secondary">
              <i class="glyphicon glyphicon-usd" style="color: #002255; " ></i>
            </button>
          </a>
          <?php
          $queryByRel = $_GET;
          $queryByRel['rank'] = 'relevancia' ;
          $queryByRel= http_build_query($queryByRel);
          ?>
          <a href=<?php  echo "products.php?" . $queryByRel ?>>
            <button type="button" class="btn btn-lg btn-secondary">
              <i class="glyphicon glyphicon-stats" style="color: #002255; " ></i	>
            </button>
          </a>
        </div>

        <!--LAYOUT-->
        <h3 style="text-align: center; " >Visualização:</h3>
        <div class="btn-group" role="group" aria-label="Basic example" style="padding-left: 7vw">
          <?php
          $queryList = $_GET;
          $queryList['layout'] = 'list' ;
          $queryList = http_build_query($queryList);
          ?>
          <a href=<?php  echo "products.php?" . $queryList ?>>
            <button type="button" class="btn btn-lg btn-secondary">
              <i class="glyphicon glyphicon-list" style="color: #002255; " ></i>
            </button>
          </a>
          <?php
          $queryGrid = $_GET;
          $queryGrid['layout'] = 'grid' ;
          $queryGrid = http_build_query($queryGrid);
          ?>
          <a href=<?php  echo "products.php?" . $queryGrid ?>>
            <button type="button" class="btn btn-lg btn-secondary">
              <i class="glyphicon glyphicon-th" style="color: #002255; " ></i	>
            </button>
          </a>
        </div>

        <!--ORDER-->
        <h3 style="text-align: center; " >Ordenar por:</h3>
        <div class="btn-group" role="group" aria-label="Basic example" style="padding-left: 7vw">
          <?php
          $queryAsc = $_GET;
          $queryAsc['order'] = 'asc';
          $queryAsc = http_build_query($queryAsc);
          ?>
            <a href=<?php  echo "products.php?" . $queryAsc?>>
              <button type="button" class="btn btn-lg btn-secondary">
                <i class="glyphicon glyphicon-sort-by-order" style="color: #002255; " ></i>
              </button>
            </a>
            <?php
            $queryDsc = $_GET;
            $queryDsc['order'] = 'dsc';
            $queryDsc = http_build_query($queryDsc);
            ?>
            <a href=<?php  echo "products.php?" . $queryDsc?> >
              <button type="button" class="btn btn-lg btn-secondary">
                <i class="glyphicon glyphicon-sort-by-order-alt" style="color: #002255; " ></i>
              </button>
            </a>
        </div>

        <!--CATEGORIES-->
        <h3 style="text-align: center; " >Categorias:</h3>
        <?php include 'includes/category-buttons.php' ?>

        <!--PRICERANGE-->
        <div>
          <form action="products.php" method="get">
            <h3 style="text-align: center; " >Preço:</h3>
            <input type="hidden" name="rank" value=<?php echo $_GET['rank'];?>>
            <input type="hidden" name="layout" value=<?php echo $_GET['layout'];?>>
            <input type="hidden" name="order" value=<?php echo $_GET['order'] ?>>
            <input type="hidden" name="search" value=<?php echo $_GET['search'] ?>>
            <input type="text" class="form-control" placeholder="min" name="minprice" style=" width: 100%; height: 30px ;box-sizing: border-box;border: 2px solid #ccc; border-radius: 4px; text-align: center; font-size: 25px; background-color: white;  padding: 1px 2px 1px 4px;" >
            <input type="text" class="form-control" name="maxprice" placeholder="Max"  style=" width: 100%; height: 30px ;box-sizing: border-box;border: 2px solid #ccc; border-radius: 4px; text-align: center; font-size: 25px; background-color: white;  padding: 1px 2px 1px 4px;">
            <div>
              <button type="submit" class="btn btn-lg btn-secondary"> 	<i class="glyphicon glyphicon-search" style="color: #002255" ></i>
  						</button>
            </div>
          </form>
        </div>

      </div>
      </div>
