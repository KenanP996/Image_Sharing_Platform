<?php
  
  echo "Hello World from Keno";

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'Image_Sharing_Platform';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;



  $mysqli->close();

?>
<?php
$sql = "SELECT * FROM `todo`";
?>