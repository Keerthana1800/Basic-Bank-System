<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
    .logo-text{
      color: white;
      padding-top: 15px;
    }

    .main{
      text-align: center;
    }

    .main-img{
      width:100%;
      margin: 0;
    }

    .main-text{
      text-align: center;
      font-size: 40px;
    }

    .p2{
      font-size: 30px;
    }

    .button {
      background-color: #60B3EE;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 18px;
      margin: 4px 2px;
      border-radius: 5px;
    }

    .view-btn{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Bank logo -->
  <a class="navbar-brand" >
    <img src="bank.png" alt="logo" style="width:40px;">
  </a>
  <p class="logo-text">Bank of Sparks Foundation</p>
  </nav>
  <div class="main">
    <img src="mountain.webp" alt="Bank of Sparks Foundation" class="main-img">
  </div>
  <div class="main-text">
    <p>Welcome to Bank of Sparks Foundation</p>
    <p class="p2">Have multiple fund transfers with us !</p>
  </div>
  <div class="view-btn">
     <a href="viewusers.php" class="button">View All Customers</a>
  </div>
  <div class="view-btn">
     <a href="transactionDetails.php" class="button">Transaction Summary</a>
  </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
