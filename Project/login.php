<?php // login.php
     $hn = 'localhost'; //hostname
    $db = 'id19770306_accounts'; //database
    $un = 'id19770306_hassanallozi'; //username
   $pw = 'G0$(91\+MP<fW}XU'; //password
   
   


$conn = new mysqli($hn,$un,$pw, $db);

if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['lphonenumber']) &&  isset($_POST['lpassword'])){
    
    $PN = $_POST['lphonenumber'];
    $PW = $_POST['lpassword'];
    
    $query ="";
    
  	
  	if ($conn->query($query) === TRUE){
   echo '  <script>const lol = document.getElementById("lol").style.display="none";</script>';
  	}
else{
  echo "Error: " . $query . "<br>" . $conn->error;
}


     
}
$conn->close();

 
?>
