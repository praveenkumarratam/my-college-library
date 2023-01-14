<?php
include "database.php";
$id = $_POST['did'];
$obj = new Query();
$obj->delete_data($id);
?>