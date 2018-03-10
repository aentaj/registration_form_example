<?php 

//connection for login/authentication
//echo "inside db_connect.php<br>";
$sql_link = mysqli_connect("localhost", "root", "root") or die(mysqli_error($sql_link));
//echo "post mysql_connect<br>";
mysqli_query($sql_link,"SET NAMES 'utf8'");
mysqli_query($sql_link,'SET CHARACTER SET utf8');
//echo "pre mysql_select_db<br>";
mysqli_select_db($sql_link,"spare1")or die(mysqli_error($sql_link));
echo "post mysql_select_db<br>";

?>

