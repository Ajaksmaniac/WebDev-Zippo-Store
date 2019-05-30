<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/sendMessage.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>

    <body>

        <div id="wrapper-main">
            <div id="header">
                
                <div id="header-mid" class="clearfix">
                    <div id="header-mid-left" class="header-middle">
                             
              
                    </div>
                    <div id="header-mid-mid" class="header-middle">
                            <img id="logo" src="img/zippo-logo.png">
                    </div>
                    <div id="header-mid-right" class="header-middle">
                           
                    </div>
                    
                </div>
                <div class="topnav">
                        <a href="index.php">Home</a>
                        <a  href="store.php">Store</a>
                        <a class="active" href="contact.php">Contact</a>
                        <a href="about.php">About</a>
                        <?php
                        include 'DBConnection.php';
                        session_start();
                       if(isset($_SESSION['id'])){
                           
                           
                           echo "<a class='login' href='logout.php'>Logout</a>";
                           echo "<a href='profile.php'>".$_SESSION['username']."</a>";
                       
                       }else {
                           echo "<a class='login' href='loginForm.php'>Login</a>";
                           echo "<a href='register.php'>Register</a>";
                       }
                       ?>
                       
                      </div> 

                
                
            </div>
            <div id="middle-container">
                    <div id="middle-left"></div>
		
		
                    <div id="middle-middle">
                                
                                
                                
                                <form method="post" action="SendMessage.php" id="message-form">
                                
                                    <input class="form" class="form-input"  type="text" name='email' placeholder="email" id="contact-form-email" ></input>
                                    <br>
                                    <span id="span"></span>
                                    
                                    <br>
                                    <input class="form" class="form-input" type="text" name='message' placeholder="message" id="contact-form-message" ></input>
                                    <br>
                                    <button class="form" type="submit" placeholder="Send" id="contact-form-submit" >Send</button>
                                    
                                
                                
                                </form>
                
                
                    </div>
                
                    <div id="middle-right"></div>
                
            </div>
            <script type="text/JavaScript" src="scripts/JQuery.js"></script>
            
    </body>
</html>
