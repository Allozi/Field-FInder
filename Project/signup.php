<?php

require_once 'login.php';

$conn = new mysqli($hn,$un,$pw, $db);

if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['sphonenumber']) && isset($_POST['sfullname']) && isset($_POST['spassword'])){
    
    $PN = $_POST['sphonenumber'];
    $FN = $_POST['sfullname'];
    $PW = $_POST['spassword'];
    
    $query ="INSERT INTO `accounts`(`Full_name`, `Phone_number`, `Password`) VALUES ('$FN',$PN,'$PW');";
    
  	
  	if ($conn->query($query) === TRUE){
   echo '  <script>const lol = document.getElementById("lol").style.display="none";</script>';
  	}
else{
  echo "Error: " . $query . "<br>" . $conn->error;
}


     
}
$conn->close();

 ?>