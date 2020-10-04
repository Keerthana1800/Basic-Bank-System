<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>All Customers</title>
    <style>
    .logo-text, .nav-link1{
      color: white;
      padding-top: 15px;
    }
    .list-home{
      padding-left: 1100px;
    }
    .nav-link1:hover{
      color: white;
    }
    .container{
      padding-top: 30px;
      text-align: center;
    }
    .button {
      background-color: #60B3EE;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      border-radius: 5px;
    }

    </style>
  </head>
  <body>
    <?php
    require 'config.php';
    $query = "SELECT * FROM customer_table";
    $result = mysqli_query($conn,$query);
?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Bank logo -->
    <a class="navbar-brand" >
    <img src="bank.png" alt="logo" style="width:40px;">
    </a>
    <p class="logo-text">Bank of Sparks Foundation</p>
    <ul class="navbar-nav">
    <li class="list-home">
      <a class="nav-link1" href="index.php">Home</a>
    </li>
  </ul>
    </nav>
    <div class="container">

           <div class="row">
               <div class="col">
                   <div class="table-responsive-sm">
                   <table class="table table-hover tableStyle table-sm table-res">
                       <thead>
                           <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Email Id</th>
                           <th scope="col">Balance</th>
                           <th scope="col">Transfer Money</th>
                           </tr>
                       </thead>
                       <tbody>
               <?php
                   while($rows=mysqli_fetch_assoc($result)){
               ?>

                       <tr>
                       <td><?php echo $rows['Name']?></td>
                       <td><?php echo $rows['Email Id']?></td>
                       <td><?php echo $rows['Account Balance']?></td>
                        <td><a href="transferUser.php?name= <?php echo $rows['Name'] ;?>"> <button type="button" class="button">Transfer</button></a></td>

                   </tr>
                  <?php
                    }
                        ?>

                       </tbody>
                   </table>
                   </div>
               </div>
           </div>

</div>



  </body>
</html>
