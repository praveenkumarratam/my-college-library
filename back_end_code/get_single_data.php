<?php
include "database.php";
$id = $_POST['std_id'];
$obj = new Query();
$obj->get_single_data($id);
?>