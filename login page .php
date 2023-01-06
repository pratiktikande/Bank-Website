<!DOCTYPE html>
<head>
    <title>
        login page
    </title>
    <link rel="stylesheet" href="login1.css">
</head>
<body>
    <nav>
            <div class="nav-links">
                <ol>
                    <li><a href="index.php"><button class="button button1">HOME</button></a></li>
                     <li><a href="account1.php"><button class="button button1">open account</button></a></li>
                     <li><a href="login%20page%20.php"><button class="button button1">LOGIN</button></a></li>
                     
                      <li><a href="transaction.php"><button class=button button1>TRANSACTION</button></a></li>
                      <li><a href=""><button class=button button1>DETAIL&OFFERS</button></a></li>
                      <li><a href="help.php"><button class=button button1>HELP</button></a></li>
                      <li><a href="review.php"><button class=button button1>REVIEWS</button></a></li>
                      <li><a href="contact%20us.php"><button class=button button1>CONTACTUS</button></a></li>
                      
                </ol>
      

            </div>
            
        </nav>
    <div class="login" >
        <img src="images/7.jpg" class="in">
        <h1> login here</h1>
        <form name="google-sheet" method="post">
            <h4>username</h4>
            <input type="text" name="username" placeholder="enter user name">
            <h4> password</h4>
            <input type="password" name="password" placeholder="enter user password">
            <input type="submit" name="submit" placeholder="login">
            <a href=""> forgot my password</a><br>
            <a href="">open new account</a>
            
        </form>
        
    </div>
    
    <script>
        
        const scriptURL = "https://script.google.com/macros/s/AKfycbw8hLcS7naC5aGlP6SjH8Mf52RJ7UYHxEbccSRkGKAm-gUCNQ92nd8bNTXtf5P_kXqD/exec"
        const form = document.forms["google-sheet"]
        
          
        form.addEventListener('submit', e => {
            
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            
            .then(response => alert("welcomee"))
            .catch(error => console.error('Error!', error.message))
            
        })
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
</body>
</html>
