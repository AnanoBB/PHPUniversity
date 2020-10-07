<?php

require_once("db.php");
         
        
        

    $sql ="SELECT  `product_name`, `description` FROM `products`";
    $result=$conn->query($sql);
      

      if($result->num_rows>0){
          while($row=$result->fetch_assoc()) {
          echo $row["product_name"];
          echo $row["description"];
      } ;
      }

    





?>