<?php 
$connect2 = mysqli_connect("localhost","root","","order");

if ($connect2 == false ) {
die("Could not link: ".mysqli_connect_error());
}
?>