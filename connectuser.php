<?php 
$connect1 = mysqli_connect("localhost","root","","user");

if ($connect1 == false ) {
die("Could not link: ".mysqli_connect_error());
}
?>