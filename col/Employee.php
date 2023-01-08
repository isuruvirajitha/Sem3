<?php
class Employee{
    private $id;
    private $name;
    private $gender;
    private $city;


    public function set_id($id){
        $this->id = $id;
    }

    public function get_id(){
        return $this->id;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_gender($gender){
        $this->gender = $gender;
    }

    public function get_gender(){
        return $this->gender;
    }

    public function set_city($city){
        $this->city = $city;
    }

    public function get_city(){
        return $this->city;
    }

    public static function getAll(){
        $emps = [];

        $con = new mysqli("localhost","root","","sem3-col");

        $sql = "SELECT * FROM employee";

        $rs = $con->query($sql);

        while ($row = $rs->fetch_assoc()) {
            $emp = new Employee();
            $emp->set_id($row['id']);
            $emp->set_name($row['name']);
            $emp->set_gender($row['gender']);
            $emp->set_city($row['city']);
            array_push($emps,$emp);
        }

        return $emps;
    }
}
?>