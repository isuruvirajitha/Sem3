<?php
require 'Employee.php';

class EmployeeController{

    public static function getAll(){
        return Employee::getAll();
    }
}
?>