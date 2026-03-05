<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     <?php include "style.css"?>
     input {
    position:relative;
    top:15px;
     }
     tr, td {
    text-align:left;
     }
    button  {
    width:650px;
    height:50px;
    }     
    a {
    position:relative;
    left:290px;
    top:20px;
    }
    </style>
</head>
<body>
    <div><div></div>
    <form action="add-order.php" method="post">
<div>
    <table>
        <tr><td><label for="item">Item</label></td><td>:</td><td>
        <input type="text" placeholder="Enter Item" name="item" required></td></tr>

      <tr><td><label for="amount">Amount</label></td><td>:</td><td>
        <input type="number" placeholder="Enter Amount" name="amount" required></td></tr>

<tr><td><label for="price">Price</label></td><td>:</td><td>
        <input type="text" placeholder="Enter Price" name="price" required></td></tr>
<tr><td><label for="unique_number">Unique Number</label></td><td>:</td><td>
        <input type="text" placeholder="Enter Unique Number" name="unique_number" required></td></tr>
<tr><td><label for="image">Image</label></td><td>:</td><td>
        <input type="text" placeholder="Enter Image Link" name="image" required></td></tr>
</table>
    <div><button class="submit" type="submit" value="Submit">Submit</button><br><a href="index.php">View Order</a></div>
    

</div>
</form>
</div>
</body>

</html>
