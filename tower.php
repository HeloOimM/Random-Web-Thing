<?php include "connect.php";
$tower = $_POST['obby'];
$difficulty = $_POST['difficulty'];
$uniqueID = $_POST['unique_id'];
$sql = "insert into cruds.emp5 values('','$tower','$difficulty','$uniqueID')";
$query = mysqli_query($connect, $sql);
if ($query) {
echo "<script>
alert('Obby Created');
location.href = 'crudtable.php';
</script>";
}
else {
echo "<script>alert('Failed');
location.href = 'crudtable.php'</script>";
}
?>