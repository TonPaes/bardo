<?php include 'includes/head.php';
      include 'includes/nav2.php';
?>
<?php if (($_POST['a'] == 1)){
    echo"<h2>Boleto e informações enviadas para: <h2>". $_POST['email'];

}
?>
<form action=<?php echo $_SERVER['PHP_SELF']?> method="post">
  <div class="form-group">
    <h3>Endereço de email</h3>
    <input type="text" name="email"class="form-control" id="email">
  </div>
<h3>Forma de pagamento</h3>
<div class="checkbox">
  <label><input type="checkbox" value="">Parcelar</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">A vista</label>
</div>
<button type="submit" class="btn btn-lg btn-secondary"> 	Enviar
</button>
<input type="hidden" name="a" value="1">
</form>

<?php include 'includes/footer.php' ?>
