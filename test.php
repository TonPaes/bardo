<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
include 'core/init.php';
include 'includes/session.php';

if ( isset($_POST['inserir'])) {
  $Qinsert = $_POST['inserir'];
  $sql1 = "INSERT INTO cart (code) VALUES ( " .$Qinsert. ")"; 
}

?>
<form  action=<?php echo $_SERVER['PHP_SELF']?> method="post">
  <input type="hidden" name="inserir" value="1">
  <button type="submit" name="button">AAAAAAAAAAAA</button>
</form>

</body>
</html>
