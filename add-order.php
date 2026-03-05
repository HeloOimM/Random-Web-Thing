<?php include "connectorder.php";
session_start();
$userorder = $_SESSION["username"];
$item = $_POST['item'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$unique_number = $_POST['unique_number'];
$image = $_POST['image'];
$sql = "insert into emp5 values('','$userorder','$item','$unique_number','$amount','$price', '$image')";
$query = mysqli_query($connect2, $sql);
if ($query) {
echo "<script>
alert('Item Created!');
location.href = 'index.php';
</script>";
}
else {
echo "<script>alert('Failed');
location.href = 'addorder.php'</script>";
}

?>
