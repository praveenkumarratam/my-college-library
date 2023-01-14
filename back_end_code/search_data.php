<?php
include "database.php";
$name = $_POST['name'];
$obj = new Query();
$obj->search_data($name);
?>