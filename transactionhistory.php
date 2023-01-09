<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="transactionHist.css">
</head>

<body>

<header>
    <h1>Secure Bank</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="transfermoney.php">Transfer Money</a></li>
          <li><a href="transactionhistory.php">Transaction History</a></li>
        </ul>
      </nav>
</header>

<div class="container">
    <h1>Transaction History</h1>
    <div>
    <table>
        <tr>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
        </tr>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Balance']; ?> </td>
            
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<?php
    include 'footer.php';
?>
</body>
</html>