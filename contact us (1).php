<!DOCTYPE html>
<head>
    <title>
        login page
    </title>
    <link rel="stylesheet" href="contact%20us1.css">
</head>
<body>
     <nav>
            <div class="nav-links">
                <ol>
                    <li><a href="index.php"><button class="button button1">HOME</button></a></li>
                     <li><a href="account.php"><button class="button button1">open account</button></a></li>
                     <li><a href="login%20page%20.php"><button class="button button1">LOGIN</button></a></li>
                     
                      <li><a href="transaction.php"><button class=button button1>TRANSACTION</button></a></li>
                      <li><a href=""><button class=button button1>DETAIL&OFFERS</button></a></li>
                      <li><a href="help.php"><button class=button button1>HELP</button></a></li>
                      <li><a href="review.php"><button class=button button1>REVIEWS</button></a></li>
                      <li><a href="contact%20us.php"><button class=button button1>CONTACTUS</button></a></li>
                      
                </ol>
      

            </div>
            
        </nav>
    <div class="login">
        
        <h1> submit your details...... </h1>
        <form method="post">
            <h4> enter your full name</h4>
            <input type="text" placeholder="lastname firstname middlename" name="firstname">
            <h4> enter your phone number</h4>
            <input type="text" placeholder="enter user number" name="mobilenumber">
            <h4> enter  any alternate number</h4>
            <input type="text" placeholder="enter user number" name="alternatenumber">
            <input type="submit" placeholder="submit">
            <h2> manager number: 85270981908</h2>
            <h2> mr sharma : 7439871894039</h2>
         
            
        </form>
        
    </div>
    
</body>
</html>
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
<?php
$fn=$_POST['firstname'];
$fn1=$_POST['mobilenumber'];
$fn2=$_POST['alternatenumber'];


$query="INSERT INTO contactus values ('$fn','$fn1','$fn2')";
$data=mysqli_query($conn,$query);


if($data)
{
	
}
else
{


	
}





?>

