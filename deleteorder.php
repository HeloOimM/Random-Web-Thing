<?php include "connectorder.php";
$id = $_GET['id'];
$sql = "delete from order.emp5 where id = $id";
$query = mysqli_query($connect2, $sql);
if ($query) {
echo "<script>
alert('Item Deleted');
location.href = 'home.php';
</script>";
}
else {
echo "<script>alert('Failed');
location.href = 'home.php'</script>";
}
?>