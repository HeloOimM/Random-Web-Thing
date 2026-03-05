<?php include "connectuser.php";
$user = $_POST['user'];
$password = $_POST['password'];
$check = "SELECT * FROM emp5 WHERE user = ?";
$checkstmt = mysqli_prepare($connect1, $check);
mysqli_stmt_bind_param($checkstmt, "s", $user);
mysqli_stmt_execute($checkstmt);
$result = mysqli_stmt_get_result($checkstmt);

if (mysqli_num_rows($result) > 0 ) {
echo "<script> alert('User already exist blud!');
location.href = 'signup.php';
</script>";
exit();
}

$insert = "INSERT INTO emp5 (user, password) VALUES (?, ?)";
$insertstmt = mysqli_prepare($connect1, $insert);
mysqli_stmt_bind_param($insertstmt, "ss", $user, $password);

if (mysqli_stmt_execute($insertstmt)) {
echo "<script>
alert('Account Successfully Created!');
location.href = 'index.php';
</script>";
}
else {
echo "<script>alert('Failed');
location.href = 'index.php'</script>";
}

?>
