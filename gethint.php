<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$q=$_REQUEST["q"];
$hint="";
$conn=new mysqli("localhost","root","","hikingpr");
	$result=mysqli_query($conn,"select * from user ");
	$data = array();
	while($row=mysqli_fetch_array($result)){
		$a[]=$row['FirstName'];
	}
if($q !==""){
	$q=strtolower($q);
	$len=strlen($q);
	
		
		foreach($a as $name){
			if(stristr($q,substr($name,0,$len))){
				if($hint==""){
					$hint=$name;
				}
				else{
					$hint .=", $name";
				}
			}
		}
	

}
echo $hint===""?"no suggestion":$hint;
?>
</body>
</html>