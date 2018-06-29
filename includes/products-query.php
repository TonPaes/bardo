<?php
  $qSearch = $_GET['search'];
  $qMax = 999999;
  $qMin = 0;
  if ($_GET['minprice'] != NULL ) {
    $qMin = $_GET['minprice'];
  }
  if ($_GET['maxprice'] != NULL) {
    $qMax = $_GET['maxprice'];
  }
  $sql = "SELECT * FROM pro WHERE search LIKE '%" . $qSearch ."%' AND price BETWEEN ". $qMin . " AND " .$qMax;
  if ($_GET['order'] == dsc && $_GET['rank'] == 'preço' ) {
    $sql = $sql . " ORDER BY price DESC";
  }
  else if ($_GET['order'] == asc && $_GET['rank'] == 'preço') {
    $sql = $sql . " ORDER BY price ASC";
  }
  else if ($_GET['order'] == dsc && $_GET['rank'] == 'relevancia') {
    $sql = $sql . " ORDER BY id DESC";
  }
  else {
    $sql = $sql . " ORDER BY id ASC";
  }

  $result = $db->query($sql);
?>
