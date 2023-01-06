<?php

$server ="localhost";
$username ="root";
$password="";
$documentname ="website_details";
$conn = mysqli_connect($server,$username,$password,$documentname);
if($conn)
{
	echo "yess";
  
}


?>

<!DOCTYPE html>
<head>
    <title>
        login page
    </title>
    <link rel="stylesheet" href="cash%20withdraw1.css">
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
     
        <form>
            <h1>enter the account details</h1>
            <p> enter the account number</p>
            <input type="text" placeholder="enter the number">
            <p> enter the account holder number</p>
            <input type="text" placeholder="enter the name">
            <p> reenter the account number</p>
            <input type="text" placeholder="enter the number">
            
            <a href="real%20transaction.php">proceed</a>
        </form>
        
    </div>
    
</body>
</html>
<?php
$username="root";

$server="localhost";

$password="";
$database="website_details";
$connect=mysqli_connect($server,$username,$password,$database);
if(connect)
{
	echo "te";
}
else
	echo"no";
}
?>
