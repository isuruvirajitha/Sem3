<?php
require_once 'Employee.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];

$emp = new Employee();
$emp->set_fname($fname);
$emp->set_lname($lname);
$emp->set_gender($gender);

Employee::insert($emp);
?>