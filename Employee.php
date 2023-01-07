<?php
class Employee{
    private $id;
    private $fname;
    private $lname;
    private $gender;

    public function set_id($id){
        $this->id = $id;
    }

    public function get_id(){
        return $this->id;
    }

    public function set_fname($fname){
        $this->fname = $fname;
    }

    public function get_fname(){
        return $this->fname;
    }

    public function set_lname($lname){
        $this->lname = $lname;
    }

    public function get_lname(){
        return $this->lname;
    }

    public function set_gender($gender){
        $this->gender = $gender;
    }

    public function get_gender(){
        return $this->gender;
    }

    public static function insert($employee){
        $con = new mysqli("localhost","root","","sem3-online");
        
        $sql = "INSERT INTO employee (fname,lname,gender) VALUES ('".$employee->get_fname()."','".$employee->get_lname()."','".$employee->get_gender()."')";

        $con->query($sql);

        $con->close();
    }

    public static function getAll(){

        $employees =[];
        $con = new mysqli("localhost","root","","sem3-online");
        
        $sql = "SELECT * FROM employee";

        $rs = $con->query($sql);

        while ($row = $rs->fetch_assoc()) {
            $emp = new Employee();
            $emp->set_id($row['id']);
            $emp->set_fname($row['fname']);
            $emp->set_lname($row['lname']);
            $emp->set_gender($row['gender']);
            array_push($employees,$emp);
        }



        $con->close();

        return $employees;
    }
}
?>