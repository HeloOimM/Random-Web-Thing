 <?php
    session_start(); 
    if (!isset($_SESSION["username"]))  {
    header("Location:loginpage.php");
    exit();
        }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script>
<?php include "random.js"?>
document.addEventListener('DOMContentLoaded', (event) => {
    const exLinks = document.querySelectorAll('.delete');

    exLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
    confirm = confirm("U want to delete? If yes press OK, If no press cancel :)");
            if (confirm) {
                window.location.href = this.href;
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', (event) => {
    const exLinks = document.querySelectorAll('.Upper2');
    exLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
    confirm = confirm("U sure u want to log out?");
            if (confirm) {
                window.location.href = this.href;
            }
        });
    });
});
</script>
    <style><?php include "style.css" ?>
</style>
</head>
<body>
    <div class="wrap">
    <div class="header"><a class="Upper1" href="signup.php">Sign Up</a><a class="Upper2" href="loginpage.php">
    <?php
    if (strlen($_SESSION["username"]) > 9) {
    echo substr($_SESSION["username"],0,6) . "...";
    }
    else {
    echo $_SESSION["username"];
    }
    ?>
    </a>
</div>
<form method="get">
    <input type="text" class="search" name="search" placeholder="Search Stuff" value="<?php echo $_GET['search']??''?>">
    <button type="submit" class="search-submit">Search</button>
</form>
    <button class="add"><a href="addorder.php" class="linkadd">Add Order</a></button>
    <div class="usertables">
    <table>
        <tr>
        <th>No</th>
        <th>Item</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Unique ID</th>
        <th>Image</th>
        <th>Action</th>
        </tr>
        <?php include "connectorder.php";
        $search = "";
        $user = $_SESSION["username"] ?? null;
        if (isset($_SESSION["username"]) && isset($_GET['search']) && $_GET['search'] !== "") {
        $search = mysqli_real_escape_string($connect2, $_GET['search']);
        $sql = "select * from order.emp5 WHERE user = '$user' AND (item LIKE '%$search%'
        OR unique_number LIKE '%$search%' OR price LIKE '%$search%')";
        }
        elseif (isset($_SESSION["username"])) {
        $sql =  "select * from `order`.emp5 WHERE user LIKE '$user'";
        }
        else {
        
        }
        $query = mysqli_query($connect2,$sql );
        $no = 1;
        foreach ($query as $value) {
      ?>

      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $value['item'] ?></td>
        <td><?php echo $value['amount'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['unique_number'] ?></td>
        <td><img src="<?php echo $value['Image'] ?>" alt=""></td>
    <td><a href="editorder.php?id=<?php echo $value['id']; ?>" class="edit">Edit</a>
 <a href="deleteorder.php?id=<?php echo $value['id']?>"  class="delete">Delete</a></td>
        </tr>
    <?php $no +=1;
        }?>
    </table>
</div>
</div>

</body>
</html>