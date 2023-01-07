<table border="1" width="100%">
    <thead>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?php
            require_once 'Employee.php';
            $emps = Employee::getAll();
            foreach($emps as $emp){
                echo "<tr>";
                echo "<td>",$emp->get_id(),"</td>";
                echo "<td>",$emp->get_fname(),"</td>";
                echo "<td>",$emp->get_lname(),"</td>";
                echo "<td>",$emp->get_gender(),"</td>";
                echo "<td><a href='updateEmployee.php?id=".$emp->get_id()."'>","Update","</a></td>";
                echo "<td>",$emp->get_gender(),"</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

