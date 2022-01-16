<?php
  require_once 'config.php';

  if (isset($_POST['submit'])) {
    $countryName = $_POST['search'];

    $sql = 'SELECT * FROM orders WHERE ProductName = :ProductName';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['ProductName' => $countryName]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details of order</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <style type="text/css">
     body{
background-image: url('image.jpg');
 height: 200%; 
  background-repeat: no-repeat;
  background-size: cover;

}
  </style>
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?= $row['ProductName'] ?></h1>
          </div>
          <div class="card-body">
            <h4><b>Order Number:</b> <?= $row['ID'] ?></h4>
            <h4><b> ID of hiker who orderd:</b> <?= $row['user_id'] ?></h4>
            <h4><b>Name of products :</b> <?= $row['ProductName'] ?></h4>
            <h4><b>Quantity :</b> <?= $row['Quantity'] ?></h4>
            <h4><b>Price per item :</b> <?= $row['PriceOfOneItem'] ?></h4>
            <h4><b>Total :</b> <?= $row['Total'] ?></h4>
            <h4><b>Address to be shipped to :</b> <?= $row['Address'] ?></h4>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>