<?

$server="localhost";
      $username="root";
      $password="";
      $db="task1";

      $conn = new mysqli($server,$username,$password,$db);

      if ($conn->connect_error){
          die("connection failed");
      };
?>