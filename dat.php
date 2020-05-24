<?php
$user_name = ;
$password = ;
$database = ;
$server = ;
mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");

$order = "INSERT INTO `users` (`email`, `phonenumber`, `userename`, `password`, `bloodgroup`, `state`, `district`) VALUES ('".$email."','".$phno."','".$username."','".$password."','".$bgroup."','".$groups."','".$subgroups."')";
$result = mysql_query($order);
if($result){
    echo("<br>Input data is succeed");
} else{
    echo("<br>Input data is fail");
}
?>