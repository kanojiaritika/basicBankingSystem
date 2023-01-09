<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="transfermoneyStyle.css">

</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
?>


<header>
    <h1>Secure Bank</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="transfermoney.php">Transfer Money</a></li>
          <li><a href="transactionhistory.php">Transaction History</a></li>
        </ul>
      </nav>
</header>

<div class="transfer">
    <h2 class="customer-head">Select Transferor</h2>
        <table class="customer-table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Balance</th>
                <th>Operation</th>
            </tr>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" >SELECT</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
        </table>
</div>
<?php
    include 'footer.php';
?>

</body>
</html>