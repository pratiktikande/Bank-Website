<!DOCTYPE html>
<head>
<title>
</title>
</head>
<body>

<?php
$server ="localhost";
$username ="root";
$password="";
$documentname ="website";
$conn = mysqli_connect($server,$username,$password,$documentname);
error_reporting(0);
$query="SELECT * from photos";
$data = mysqli_query($conn,$query);

$total= mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<img src='".$result['folder']."' height='400' width='400'>
		";
		
	}
}
else
{
	echo "no data";
}

?>


</body>
</html>