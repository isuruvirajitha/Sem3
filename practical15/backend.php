<?php
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        echo "This is a GET request";
    }else if ($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "This is a POST request";
    }
?>