<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        include "connect.php";
        $mysqli = con();
        $queryselect = "SELECT * FROM produto";
        $returnmy = $mysqli->query($queryselect);
        $productslist=[];
        while($row = $returnmy->fetch_array(MYSQLI_ASSOC)){
            $productslist[] = $row;
        };
        $jsonresponse=(object)["products"=>$productslist];
        echo json_encode($jsonresponse);
    }
?>