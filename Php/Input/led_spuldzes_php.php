<?php
$PrecesNosaukums = $_POST['PrecesNosaukums'];
$PrecesFoto = $_FILES['PrecesFoto']['name'];
$PrecesRegularaCena = $_POST['PrecesRegularaCena'];
$PrecesAkcijasCena = $_POST['PrecesAkcijasCena'];
$Jauda = $_POST['Jauda'];
$Klase = $_POST['Klase'];
$Ligzda = $_POST['Ligzda'];
$DarbaMuzs = $_POST['DarbaMuzs'];

$host = 'localhost';
$login = 'root';
$dbname = '9000watts';

$insert1 = "INSERT INTO preces (prece,foto,regulara_cena,akcijas_cena) VALUES ('$PrecesNosaukums','$PrecesFoto','$PrecesRegularaCena','$PrecesAkcijasCena')";

$connect = mysql_connect($host,$login) or die('Could not connect database: ' . mysql_error());

mysql_select_db($dbname,$connect) or die('Could not find database' . mysql_error());

$result = mysql_query($insert1) or die('Insert into database was not correct: ' . mysql_error());

$id = mysql_insert_id();

$insert2 = "INSERT INTO led_spuldzes (id_prece,jauda,klase,ligzda,darba_muzs) VALUES ('$id','$Jauda','$Klase','$Ligzda','$DarbaMuzs')"; 

$result = mysql_query($insert2) or die('Insert into database was not correct: ' . mysql_error());


mysql_close($connect);
?>