<?php include 'includes/head.php' ?>

	<!-- NAV BAR-->
<?php include 'includes/nav2.php' ?>

	<!-- CONTENT-->

<?php
if ($_GET['layout'] == "grid" ) {
  include 'includes/products-grid.php';
}else {
  include 'includes/products-list.php';
}
?>

	 <!-- FOOTER-->

<?php //include 'includes/footer.php' ?>
