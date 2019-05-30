<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/store.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet"> 
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
                        <a  href="contact.php">Contact</a>
                        <a class="active" href="about.php">About</a>
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
               
               
		
		
                <div id="middle-middle">
                            
                            
                    <img id="GeorgeBPic"src="img/George B.jpg">
                  <p id="AboutText">  A Zippo lighter is a reusable metal lighter manufactured by American Zippo Manufacturing Company of Bradford, Pennsylvania, United States of America.
                    Thousands of different styles and designs have been made in the eight decades since their introduction including military versions for specific regiments. 
                    Since its invention Zippos have been sold around the world and have been described "a legendary and distinct symbol of America".
                    In 2012 the company produced the 500-millionth unit.
                    Since its inception Zippo Lighters have been almost exclusively manufactured in the United States, 
                    with the exception of those manufactured in Niagara, Canada (an operation that has since been shut down).</p>
                    
            
            
                </div>
            
                
            </div>
         </div>
    </body>
</html>
