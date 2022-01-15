<!DOCTYPE html>
<html lang="en">

<head>	<title>Survey</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			height: 100%; 
  background-repeat: no-repeat;
  background-size: cover;
          background-image: url('image.jpg');
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}
		.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
h3{
        color:#00008B;
        font:bold;
    
}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
	input[type=Submit] {
  background-color: #00008B;
  color: white;
  padding: 20px 150px;
  border: none;
  border-radius: 6px;
  /* cursor yb2aa pointer lma y2oaf 3ndoo*/
  cursor: pointer;
  float: center;
}
/*3shan lma a2oaf 3llihaa yb2a lonha gray*/
input[type=submit]:hover {
  background-color: gray;
}
</style>
</head>

<body>		<form method="Post">

	<h1 style="color:#ff8c00;font:bold; text-align: center;">Hiker Survey Form</h1>
   	
	<!-- Create Form -->
		<div class="form-control">
			<label for="Email"style="color:#00008B;font:bold">
				Email
			</label>

			<!-- Input Type Email-->
			<input type="email"
				name="Email"
				placeholder="Enter your email" />
				<br>
				<label style="color:#00008B;font:bold" class="mr-sm-2" for="type">Type:</label>
     <div class="col-auto my-1">
   	<select class="custom-select mr-sm-2" name="type"class="form-control" required >
		<?php
		$type=array('Blue Lagoon','Wadi Degla','Saint Catherine','Mousa','Sinai Desert','Red Sea');
		for($i=0;$i<count($type);$i++)
			echo "<option>".$type[$i]."</option>";
		?>

	</select>
		</div>						<br>

	<div class="form-control">
			<label style="color:#00008B;font:bold">1.How did you hear about us?</label>
			<label for="inp-1">
			<input type="radio" name="Fifth" value="Recommended by Friends">Recommended by Friends</input>
			</label>
			<label for="inp-2">
			<input type="radio" name="Fifth" value="Social media">Social media</input>
			</label>
			<label for="inp-3">
			<input type="radio" name="Fifth" value="Blog or Publication">Blog or Publication</input>
			</label>
			<label for="inp-4">
			<input type="radio" name="Fifth" value="Other">Other</input>
			</label>
		</div>
		<div class="form-control" >
			<label style="color:#00008B;font:bold">
				2.How many times have you hiked in this area?
			</label>

			<!-- Input Type Radio Button -->
			<label for="Once">
				<input type="radio"
					id="Once"
					name="First" value="Once">Once</input>
			</label>
			<label for="Twice">
				<input type="radio"
					id="Twice"
					name="First" value="Twice">Twice</input>
			</label>
			<label for="More">
				<input type="radio"
					id="More"
					name="First" value="More">More</input>
			</label>
		</div>
		<div class="form-control">
			<label style="color:#00008B;font:bold">3.Which of the following best characterizes your hiking status? </label>
		<label for="inp-1">
				<input type="radio"
					name="Second" value="A day hiker">A day hiker</input></label>
			<label for="inp-2">
				<input type="radio"
					name="Second" value="An overnight backpacker (maximum 4 nights)">An overnight backpacker (maximum 4 nights)</input></label>
			<label for="inp-3">
				<input type="radio"
					name="Second" value="A long distance hiker (5 or more nights)">A long distance hiker (5 or more nights)</input></label>
			<label for="inp-4">
				<input type="radio"
					name="Second" value="A through hiker who is doing the entire
                        Appalachian trail this year ">A through hiker who is doing the entire
                        Appalachian trail this year </input></label>
			
		</div>
		<div class="form-control">
			<label style="color:#00008B;font:bold">4.If you began your hike with someone else, did you remain with this person for the entirety of the trail?</label>
			<label for="inp-1">
				<input type="radio" name="Third" value="Yes">Yes</input>
			</label>
			<label for="inp-2">
				<input type="radio" name="Third" value="Mostly, we did our best">Mostly, we did our best</input>
			</label>
			<label for="inp-3">
				<input type="radio" name="Third" value="No, we were a couple in a relationship and we are no longer">No, we were a couple in a relationship and we are no longer</input>
			</label>
			<label for="inp-4">
				<input type="radio" name="Third" value="Other">Other</input>
			</label>
		</div>
         
    
     <div class="form-control">
			<label style="color:#00008B;font:bold">5.Was there any guides/organizers who didn’t meet your standards?</label>
			<label for="inp-1">
			<input type="radio" name="Fourth" value="Yes">Yes</input>
			</label>
			<label for="inp-2">
			<input type="radio" name="Fourth" value="No">No</input>
			</label>
		</div>

		<div class="form-control">
			<label style="color:#00008B;font:bold" for="comment">
				Any comments or suggestions
			</label>

			<!-- multi-line text input control -->
			<textarea name="Comments" id="Comments"
				placeholder="Enter your comment here">
			</textarea>
			<div class="rate">
    <h3>Rate this Group</h3>
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
    <br>
  </div>
		</div>
<br><br><br>
				<h2><input type="Submit" value="Submit" class="btn btn-success" name="signed"></h2>
</div>
	</form>
	 			<?php 
  $servername="localhost";
		$username="root";
		$password="";
		$database="hikingpr";
		$conn=mysqli_connect($servername,$username,$password,$database);
		if(!$conn)
		{	

			die("Connection failed".mysqli_connect_error());
		}

		if(isset($_POST['signed']))
		{
   
           $Email=filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
          $First=filter_var($_POST['First'],FILTER_SANITIZE_STRING);
          $Second=filter_var($_POST['Second'],FILTER_SANITIZE_STRING);
          $Third=filter_var($_POST['Third'],FILTER_SANITIZE_STRING);
          $Fourth=filter_var($_POST['Fourth'],FILTER_SANITIZE_STRING);
          $Fifth=filter_var($_POST['Fifth'],FILTER_SANITIZE_STRING);
          $Comments=filter_var($_POST['Comments'],FILTER_SANITIZE_STRING);
          $Ratewd=filter_var($_POST['Ratewd'],FILTER_SANITIZE_STRING);
           $Ratesc=filter_var($_POST['Ratesc'],FILTER_SANITIZE_STRING);
          $Ratebl=filter_var($_POST['Ratebl'],FILTER_SANITIZE_STRING);
          $Ratem=filter_var($_POST['Ratem'],FILTER_SANITIZE_STRING);
          $Raters=filter_var($_POST['Raters'],FILTER_SANITIZE_STRING);
          $Ratesd=filter_var($_POST['Ratesd'],FILTER_SANITIZE_STRING);
          $type=filter_var($_POST['type'],FILTER_SANITIZE_STRING);


		if ($_POST["type"]=="Blue Lagoon")
		 {
			$que="INSERT INTO surveyquestions(Email,type,First,Second,Third,Fourth,Fifth,Comments,Ratebl)VALUES('".$Email."','".$type."','".$First."','".$Second."','".$Third."','".$Fourth."','".$Fifth."','".$Comments."','".$_POST['rate']."')";
			$result=mysqli_query($conn,$que);
		}
	if ($_POST["type"]=="Mousa")
		 {
			$que="INSERT INTO surveyquestions(Email,type,First,Second,Third,Fourth,Fifth,Comments,Ratem)VALUES('".$Email."','".$type."','".$First."','".$Second."','".$Third."','".$Fourth."','".$Fifth."','".$Comments."','".$_POST['rate']."')";
			$result=mysqli_query($conn,$que);
		}	
		if ($_POST["type"]=="Red Sea")
		 {
			$que="INSERT INTO surveyquestions(Email,type,First,Second,Third,Fourth,Fifth,Comments,Raters)VALUES('".$Email."','".$type."','".$First."','".$Second."','".$Third."','".$Fourth."','".$Fifth."','".$Comments."','".$_POST['rate']."')";
			$result=mysqli_query($conn,$que);
		}
			if ($_POST["type"]=="Saint Catherine")
		 {
			$que="INSERT INTO surveyquestions(Email,type,First,Second,Third,Fourth,Fifth,Comments,Ratesc)VALUES('".$Email."','".$type."','".$First."','".$Second."','".$Third."','".$Fourth."','".$Fifth."','".$Comments."','".$_POST['rate']."')";
			$result=mysqli_query($conn,$que);
		}	
		if ($_POST["type"]=="Sinai Desert")
		 {
			$que="INSERT INTO surveyquestions(Email,type,First,Second,Third,Fourth,Fifth,Comments,Ratesd)VALUES('".$Email."','".$type."','".$First."','".$Second."','".$Third."','".$Fourth."','".$Fifth."','".$Comments."','".$_POST['rate']."')";
			$result=mysqli_query($conn,$que);
		}
	if ($_POST["type"]=="Wadi Degla")
		 {
			$que="INSERT INTO surveyquestions(Email,type,First,Second,Third,Fourth,Fifth,Comments,Ratewd)VALUES('".$Email."','".$type."','".$First."','".$Second."','".$Third."','".$Fourth."','".$Fifth."','".$Comments."','".$_POST['rate']."')";
			$result=mysqli_query($conn,$que);
		}
}
/*
	else {
		echo "die";
		// code...
	}*/
		?>
</body>
</html>
