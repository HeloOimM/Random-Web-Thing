<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     <?php include "style.css"?>
    .submit {
    width:650px;
    height:50px;
    }
    table {
    text-align:left;
    }
    input {
    position:relative;
    top:13px;
    }
    td {
    text-align:left;
    }
    h3 {
    position:relative;
    left:270px;
    }
    a {
    position:relative;
    left:290px;
    }
    .submit {
    width:640px;
    }
     </style>
</head>
<body>
    <div><div><h3>EDIT ORDER</h3></div>
    <form action="editpage.php" method="post">
<div>
    <?php include "connectorder.php";
    $id = $_GET['id'];
    $sql = "select * from `order`.emp5 where id ='$id'";
    $query = mysqli_query($connect2, $sql);
    foreach ($query as $value) {?>
    <input type="text" value = "<?php echo $value['id']?>" name="id" hidden>
    <input type="text" value = "<?php echo $value['user']?>" name="user" hidden>
    <table>
    <tr>
    <td><label for="item">Item</label></td>
    <td>:</td>
    <td><input type="text" value="<?php echo $value['item']?>" name="item" required></td>
    </tr>
    <tr>
    <td><label for="amount">Amount</label></td>
    <td>:</td>
    <td><input type="number" value="<?php echo $value['amount']?>" name="amount" required></td>
    </tr>
    <tr>
    <td><label for="price">Price</label></td>
    <td>:</td>
    <td><input type="text" value="<?php echo $value['price']?>" name="price" required></td>
    </tr>
    <tr>
    <td><label for="unique_number">Unique Number</label></td>
    <td>:</td>
    <td><input type="text" value="<?php echo $value['unique_number']?>" name="unique_number" required></td>
    </tr>
    <td><label for="image">Image Link</label></td>
    <td>:</td>
    <td><input type="text" value="<?php echo $value['Image']?>" name="image" required></td>
    </tr>
    </table>
    <div><input type="submit" value="Submit" class="submit"><a href="home.php">View Table</a></div>
    </div>
    <?php
    }?>
</div>
</form>
</div>

</body>
</html>