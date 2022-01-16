<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css">




 @import url('https://fonts.googleapis.com/css?family=Titillium+Web');


        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            max-height:900px ;
            max-width:800px ;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    
    body {

  background-image: url("image.jpg");
  height: 100%; 
  background-repeat: no-repeat;
  background-size: cover;

}
  
</style>
    </head>

<body>

<?php
include_once("StyleHome.html");
    session_start();
    $database_name = "hikingpr";
    $con = mysqli_connect("localhost","root","","hikingpr");


if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["hikingpr"]))
    {
        $item_array_id = array_column($_SESSION["hikingpr"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["hikingpr"]);
            $item_array = array(
                'item_id'           =>  $_GET["id"],
                'item_name'         =>  $_POST["hidden_name"],
                'item_desc'         =>  $_POST["hidden_desc"],
                'item_price'        =>  $_POST["hidden_price"],
                'item_quantity'     =>  $_POST["quantity"]
            );
            $_SESSION["hikingpr"][$count] = $item_array;

  echo '<script>window.location="rogrogshop.php"</script>';

            }

            else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="rogrogshop.php"</script>';
            }

        
            if(in_array($_GET["id"], $item_array_id))
            {
                foreach($_SESSION["hikingpr"] as $keys => $values)
                {
                     $_SESSION["hikingpr"][$keys]["item_quantity"] = $_SESSION["hikingpr"][$keys]["item_quantity"]+$_POST["quantity"];
                 }                 
             }
        
    }
    else
    {
        $item_array = array(
            'item_id'           =>  $_GET["id"],
            'item_name'         =>  $_POST["hidden_name"],
            
            'item_price'        =>  $_POST["hidden_price"],
            'item_quantity'     =>  $_POST["quantity"]
        );
        $_SESSION["hikingpr"][0] = $item_array;
    }
    
    }

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["hikingpr"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["hikingpr"][$keys]);
                 echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="rogrogshop.php"</script>';
            }
        }
    }
}


   ?>
<div class="navbar">
     <a href="Hikerhomepage.php">Home</a>
     <A href="second.php">Products reviews</A>
     <a href="FormOrder.php">Check Out</a>
</a>

 </div>





<form action="" method="post">
        <input type="text" placeholder="search" name="search">
        <button type="submit" name="submit"><span class="glyphicon glyphicon-search"></span>Search</button>

    </form>

    <div class="container" style="width:80%">
        <h2>Shopping Cart</h2>
<?php
    
    $req = $_POST['search'];
    //$query = "SELECT * FROM members
   // WHERE start_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check database connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM tbl_product
    WHERE name LIKE '%{$req}%' OR price LIKE '%{$req}%'");

while ($row = mysqli_fetch_array($result))
{
    ?>
        <div class="col-md-3">

                        <form method="post" action="rogrogshop.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="images/<?php echo $row["image"]; ?>" class="img-responsive">
                                
    <h4 class="text-info"><?php echo $row["name"]; ?></h4>


                                <h5 class="text-info"><?php echo $row["name"]; ?></h5>  
                                <h5 class="text-danger"><?php echo $row["desc"]; ?></h5> 
                                <h5 class="text-danger"><?php echo $row["price"]; ?> EGP</h5>
                                <input type="text" name="quantity" class="form-control" value="1"> 
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>"> 
                                 <input type="hidden" name="hidden_desc" value="<?php echo $row["desc"]; ?>" />

                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">


                            </div>
                        </form>
                    </div>

<?php
}
    
    ?>


 
                    
                    
?>

</div>
        <div style="clear: both"></div>
        <form method="POST" action="">
        <h3 class="title2">Shopping Cart Details</h3>

        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["hikingpr"])){
                    $total = 0;
                    foreach ($_SESSION["hikingpr"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["item_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["item_price"], 2); ?></td>
                            <td><a href="rogrogshop.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["item_price"]);

                        if(isset($_POST["Checkout"])){


                       $check="INSERT INTO orders (user_id,ProductName,Quantity,PriceOfOneItem,Total) VALUES ('".$_SESSION['ID']."','".$value["item_name"]."','".$value["item_quantity"]."','".$value["item_price"]."','".$total ."')";

                       $result=mysqli_query($con,$check);
                    }

                }

                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td><input type="submit" name="Checkout" value="Confirm Order"class="btn btn-success" >
                            

                        </tr>
                        <?php

                        
                    }
                ?>
            </table>
        </div>

    </div>
  
    ?>




</body>
</html>