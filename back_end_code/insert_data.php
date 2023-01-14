<?php
include "database.php";
$name = $_POST['name'];
$class = $_POST['class'];
$semister = $_POST['semister'];
$mobile_number = $_POST['mobile_no'];
$book = $_POST['book'];

$obj = new Query();
$obj->insert_data($name, $class, $semister, $mobile_number, $book);
?>