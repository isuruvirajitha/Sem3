<?php
    require 'EmployeeController.php';
?>
<html>
<head>
    <title>Employee Table</title>
</head>
<body>
    <table border="1" width="100%">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>City</th>
        </thead>
        <tbody>
            <?php
                $emplist = EmployeeController::getAll();
                foreach($emplist as $emp){
                    echo "<tr>";
                    echo "<td>",$emp->get_id(),"</td>";
                    echo "<td>",$emp->get_name(),"</td>";
                    echo "<td>",$emp->get_gender(),"</td>";
                    echo "<td>",$emp->get_city(),"</td>";
                    echo "</tr>";

                }
            ?>
        </tbody>
    </table>
</body>
</html>