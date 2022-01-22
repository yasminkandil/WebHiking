<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>Search orders</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="js/search.js"></script>
<style>
  table th{
    color:black;
    background-color:#89CFF0;
  }

</style>
</head>
<body>
<?php include('inc/container.php');?>
<div class="container">
	<h2 style="color:#00008B;text-align:center;">Search for orders</h2>
	<br>
	<div class="row">		
		<div class="form-group col-md-3">
			<input type="text" class="search form-control" id="keywords" name="keywords" placeholder="By customer or item">			
		</div>
		<div class="form-group col-md-2">
			<input type="button" class="btn btn-primary" value="Search" id="search" name="search" />
		</div>
		<div class="form-group col-md-4">
			<select class="form-control" id="sortSearch">
			  <option value="">Sort By</option>
			  <option value="asc">Ascending</option>
			  <option value="desc">Descending</option>
			</select>
		</div>
	</div>
    <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
				<th>ID</th>
				<th>Customer Name</th>
				<th>Order Item</th>
				<th>Quantity</th>
				<th>Price of one Item</th>
				<th>Total</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Name on card</th>
				<th>Date of order</th>


            </tr>
        </thead>
        <tbody id="userData">		
			<?php			
			include 'SearchOr.php';
			$search = new Search();
			$allOrders = $search->searchResult(array('order_by'=>'ID DESC'));      
			if(!empty($allOrders)) {
				foreach($allOrders as $order) {
					echo '<tr>';
		echo '<td>'.$order['ID'].'</td>';
		echo '<td>'.$order['UserMail'].'</td>';
		echo '<td>'.$order['ProductName'].'</td>';
		echo '<td>'.$order['Quantity'].'</td>';
        echo '<td>'.$order['PriceOfOneItem'].'</td>';
        echo '<td>'.$order['Total'].'</td>';
        echo '<td>'.$order['Address'].'</td>';
        echo '<td>'.$order['City'].'</td>';
        echo '<td>'.$order['State'].'</td>';
        echo '<td>'.$order['Zip'].'</td>';
        echo '<td>'.$order['CardName'].'</td>';
		echo '<td>'.$order['DateOfOrder'].'</td>';
		echo '</tr>';
				}
			} else {
			?>            
				<tr><td colspan="12">No user(s) found...</td></tr>
			<?php } ?>
        </tbody>
    </table>	
</div>	
</div>	
<div class="insert-post-ads1" style="margin-top:20px;">
</div>
</div>
</body></html>
