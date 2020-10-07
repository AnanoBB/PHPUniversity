<?
     require_once("db.php");
   



$product_name = $conn->real_escape_string($_REQUEST['product_name']);
$description = $conn->real_escape_string($_REQUEST['description']);

 

$sql = "INSERT INTO products (`product_name`, `description`) VALUES ('$product_name', '$description')";
if($conn->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
 

$conn->close();

?>