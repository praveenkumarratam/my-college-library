<?php
 include "database.php";
 $id = $_POST['Student_id'];
 $name = $_POST['Student_name'];
 $class = $_POST['Student_class'];
 $sem = $_POST['Student_sem'];
 $book = $_POST['Student_book'];
 $mobile = $_POST['Student_mobile'];

 $obj = new Query();
 $obj->update_data($id, $name, $class, $sem, $mobile, $book);

?>