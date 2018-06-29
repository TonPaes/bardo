<?php
include 'core/init.php';
if(isset($_POST['inserir'])){
  $inserir = $_POST['inserir'];
  $sql = "INSERT INTO user (code)
  VALUES
  ('$inserir')";
  $result = $db->query($sql);
}
if(isset($_POST['retirar'])){
  $remover = $_POST['retirar'];
  $sql = "DELETE FROM user
  WHERE
  code =".$remover;
  $result = $db->query($sql);
}
?>
