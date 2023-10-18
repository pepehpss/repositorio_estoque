<?php
    function con(){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "estoque";
        return new mysqli($hostname, $username, $password, $database);
    }
?>