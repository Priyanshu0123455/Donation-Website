

<?php
//change mysqli_connect(host_name,username, password); 
$connection = mysqli_connect("localhost:3309", "root", "");
$db = mysqli_select_db($connection, 'demo');
?>
