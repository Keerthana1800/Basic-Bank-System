<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Transaction Details</title>
    <style >
      .logo-text, .nav-link1{
        color: white;
        padding-top: 15px;
      }
      .list-customer{
        padding-left: 1100px;
      }

      .nav-link1:hover{
        color: white;
      }
    </style>
  </head>
  <body>
    <body>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Bank logo -->
    <a class="navbar-brand" >
      <img src="bank.png" alt="logo" style="width:40px;">
    </a>
    <p class="logo-text">Bank of Sparks Foundation</p>

  <ul class="navbar-nav">
  <li class="list-customer">
    <a class="nav-link1" href="index.php">Home</a>
  </li>
  </ul>
    </nav>
    <div class="divStyle">
        <h2 class="text-center">Transaction Summary</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table text-center table-striped table-hover tableStyle ">
            <thead>
            <tr>

            <th>From</th>
            <th>To</th>
            <th>Amount Transferred</th>

            </tr>
        </thead>
        <tbody>
            <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
                ?>
            <tr>

            <td><?php echo $rows['Sender']; ?></td>
            <td><?php echo $rows['Receiver']; ?></td>
            <td><?php echo $rows['Amount Transferred']; ?> </td>

            <?php
            }

            ?>



        </tbody>
    </table>
    </div>
        </div>
  </body>
</html>
