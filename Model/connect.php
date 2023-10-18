<?php
    function con(){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "banco";
        return new mysqli($hostname, $username, $password, $database);
    }
?>