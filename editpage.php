<?php include "connectorder.php";
$id = $_POST['id'];
$user = $_POST['user'];
$item = $_POST['item'];
$amount = $_POST['amount'];
$price = $_POST['price'];
$unique_number = $_POST['unique_number'];
$image = $_POST['image'];
$sql = "update emp5 set item = '$item', unique_number = '$unique_number', amount = '$amount', price = '$price', image = '$image' where id = $id";
$query = mysqli_query($connect2, $sql);
if ($query) {
echo "<script>
alert('Item Edited');
location.href = 'home.php';
</script>";
}
else {
echo "<script>alert('Failed');
location.href = 'index.php'</script>";
}

?>
