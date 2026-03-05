<?php include "connectuser.php";
$user = $_POST['user'];
$password = $_POST['password'];
$check = "SELECT * FROM emp5 WHERE user = ? and password = ?";
$checkstmt = mysqli_prepare($connect1, $check);
mysqli_stmt_bind_param($checkstmt, "ss", $user, $password);
mysqli_stmt_execute($checkstmt);
$result = mysqli_stmt_get_result($checkstmt);

if (mysqli_num_rows($result) > 0 ) {
session_start();
$_SESSION["username"] = $user;
echo "<script>alert('Success');
location.href = 'index.php'</script>";
}
else {
echo "<script>alert('Failed');
location.href = 'loginpage.php'</script>";
}

?>
