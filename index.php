<?php


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet"> 
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
                        <a class="active" href="index.php">Home</a>
                        <a href="store.php">Store</a>
                        <a href="contact.php">Contact</a>
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
                <div id="middle-container-advertisement">
                    <div id="slider">
                        <img class="mySlides" src="img/zippo/zippo10.png" style="width:100%;height: 100%;">
                        <img class="mySlides" src="img/zippo/zippo2.png" style="width:100%;height: 100%;">
                        <img class="mySlides" src="img/zippo/zippo3.png" style="width:100%;height: 100%;">
                        <img class="mySlides" src="img/zippo/zippo4.png" style="width:100%;height: 100%;">
                   
                    </div>
                    <div id="slider-text" >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis laoreet tellus, a interdum massa. 
                        Aliquam finibus hendrerit urna nec ullamcorper. Proin vitae rutrum ipsum. Phasellus vitae orci nec leo luctus fermentum. 
                        Phasellus quis posuere est. In vulputate diam ut turpis scelerisque, ut accumsan nulla facilisis. 
                         
                        
                    </div>
                </div>    
                
            </div>
            
            <script src="scripts/slider.js"></script> 
    </body>
</html>
