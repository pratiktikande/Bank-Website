
<html>
<head>
    <title>
        login page
    </title>
    <link rel="stylesheet" href="account1.css">
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
    <div class="account">
        <h1>application form</h1>
        <form class="header" method="POST">
            
            <input type="radio" name="select" >saving account
            <input type="radio" name="select" >student account
            <input type="radio" name="select" >current account
            <p> first name</p>
            <input type="text" name='firstname' placeholder="enter your name">
            <p> middle name</p>
            <input type="text" name="middlename" placeholder="enter your name">
            <p> last name</p>
            <input type="text"name="lastname" placeholder="enter your name">
            <p> father name</p>
            <input type="text" name="fathername" placeholder="enter your name">
            <p> mother name</p>
            <input type="text" name="mothername"placeholder="enter your name">
            <p> adhar card number</p>
            <input type="text" name="adharcardnumber" placeholder="enter your number">
            <p> date of birth</p>
            <input type="text" name="dateofbirth" placeholder="enter your number">
            <p> mobile number</p>
            <input type="text" name="mobilenumber" placeholder="enter your number">
            <p> address</p>
            <input type="text" name="address" placeholder="enter your data"><br>
            <label for="document" > upload your adhar card photo :</label>
            <input type="file"  name="document1" accept="image/jpeg"> 
            <label for="document" > upload your pancard photo :</label>
            <input type="file"  name="document2" accept="image/jpeg">
            <label for="document"> upload all document in pdf :</label>
            <input type="file" name="document3" accept="application/pdf">
            <input type="submit"  id="button" name="submit"  >
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
$fn1=$_POST['middlename'];
$fn2=$_POST['lastname'];
$fn3=$_POST['fathername'];
$fn4=$_POST['mothername'];
$fn5=$_POST['adharcardnumber'];
$fn6=$_POST['dateofbirth'];
$fn7=$_POST['mobilenumber'];
$fn8=$_POST['address'];


$query="INSERT INTO account values ('$fn','$fn1','$fn2','$fn3','$fn4','$fn5','$fn6','$fn7','$fn8')";
$data=mysqli_query($conn,$query);


if($data)
{
	
}
else
{


	
}





?>
