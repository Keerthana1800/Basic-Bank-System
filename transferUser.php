<?php
include_once('config.php') ;

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * from customer_table where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // sender account

    $sql = "SELECT * from customer_table where id=$toUser";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


  // if sender balance is low then insufficient balance
 if($amnt > $sql1['accountbalance'])
    {

      echo '<script>alert("Low Balance. Fund Transfer not possible.")</script>';
    }

 else if($amnt == 0){
     echo '<script>alert("Invalid Amount")</script>';

 }
    else {

        //Transferring amount from sender's to receiver's account
        $newCredit = $sql1['accountbalance'] - $amnt;
        $sql = "UPDATE customer_table set accountbalance=$newCredit where id=$from";
        mysqli_query($conn,$sql);



        $newCredit = $sql2['accountbalance'] + $amnt;
        $sql = "UPDATE customer_table set accountbalance=$newCredit where id=$toUser";
        mysqli_query($conn,$sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction('sender','receiver', 'amounttransferred') VALUES ('$sender','$receiver','$amnt')";
        $tns=mysqli_query($conn,$sql);
        if($tns){
          echo "<script>alert('Transaction Successfull!');
          window.location='transactionDetails.php';
</script>";
        }

        $newCredit= 0;
        $amnt =0;


    }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Transfer Details</title>
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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Bank logo -->
  <a class="navbar-brand" >
    <img src="bank.png" alt="logo" style="width:40px;">
  </a>
  <p class="logo-text">Bank of Sparks Foundation</p>

<ul class="navbar-nav">
<li class="list-customer">
  <a class="nav-link1" href="allCustomers.php">View All Customers</a>
</li>
</ul>
  </nav>
  <div class="container">
        <h1>Transaction Here</h1>
        <form method="post" name="tcredit"><br/>
            <?php
                global $rows;
                include_once('config.php') ;
                if(isset($_GET['id'])){


                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customer_table where id=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_array($query);
              }
            ?>
            <label>From: </label><br/>
        <div class="table-responsive">
        <table class="table text-center table-striped table-hover tableStyle">

            <tr>
                <td><?php  echo $rows['id']; ?></td>
                <td><?php  echo $rows['name']; ?></td>
                <td><?php  echo $rows['emailid'] ;?></td>
                <td><?php  echo $rows['accountbalance'];?></td>
            </tr>

        </table>
              </div>
            <label>To: </label>
        <select class=" form-control" name="to" style="margin-bottom:5%;" required >
            <option value="" disabled selected>  </option>
            <?php
                include_once('config.php') ;
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customer_table where id!=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_array($query)) {
            ?>
                <option class="table text-center table-striped " value="<?php echo $rows['id'];?>" >

                    <?php echo $rows['name'] ;?>

                </option>
            <?php
                }
            ?>
        </select> <br>
            <label>Amount: </label>
            <input type="number" id="amm" class="form-control" name="amount" min="0" required/>
                <div class="text-center btn3">
            <button class="btn btnStyle1 mt-5" name="submit" type="submit" >Proceed</button>
            </div>
        </form>
    </div>


  </body>
</html>
