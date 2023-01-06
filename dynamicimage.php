<?php

$server ="localhost";
$username ="root";
$password="";
$documentname ="website";
$conn = mysqli_connect($server,$username,$password,$documentname);
if($conn)
{
	

}
error_reporting(0);	

?>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" name="submit">
</form> 
</body>
</html>
<?php
if($_POST['submit'])
{
	$filename=$_FILES["image"]["name"];
	$tempname=$_FILES["image"]["tmp_name"];
	$folder = "gallery/".$filename;
	move_uploaded_file($tempname,$folder);

if($filename!="")
{
	$query="INSERT INTO photos values ('$folder')";
    $data=mysqli_query($conn,$query);
if($data)
{
	
}
}
else
{

}
}


?>

