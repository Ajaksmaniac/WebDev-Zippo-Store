<?php
include 'DBConnection.php';
session_start();
     $id = $_GET['id'];

     $SQL_lighter = "SELECT id, name, price, description, image FROM lighter WHERE id=$id";
     $result = mysqli_query($DatabaseConnection, $SQL_lighter);
     while($fieldInfo = mysqli_fetch_assoc($result)){
             
         $id = $fieldInfo['id'];
         $name = $fieldInfo['name'];
         $price = $fieldInfo['price'];
         $description = $fieldInfo['description'];
         $image_path = "data:image/jpeg;base64,".base64_encode($fieldInfo['image'] ) ;
         
            
         }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
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
                        <a  href="index.php">Home</a>
                        <a href="store.php">Store</a>
                        <a href="contact.php">Contact</a>
                        <a href="about.php">About</a>
                        <?php
                         
                        if(isset($_SESSION['id'])){
                            
                            
                            echo "<a class='login' href='logout.php'>Logout</a>";
                            echo "<a href='profile.php'>".$_SESSION['username']."</a>";
                        
                        }else {
                            echo "<a class='login' href='loginForm.php'>Login</a>";
                            echo "<a href='register.php'>Register</a>";
                        }
                        ?>
                        <span id="search-span"><img id="search-icon"src="img/search-icon.png" alt="Loading.."></span>           
                        <input id="search-bar"type="text" name="search" placeholder="Pretraga artikala..." value="" autocomplete="off" autocomplete2="off">
                      </div> 

                
                
            </div>
            <div id="middle-container">
                <div id="middle-container-left">
                    <?php
                        echo "<b><h1>Name: </h1></b><h3>" . $name . "</h3></br>";
                        echo "<b><h1>Description: </h1></b><h3>" . $description ."</h3></br>";
                        echo "<b><h1>Price: </h1></b><h3>" . $price . " RSD</h3>";

                    ?>
                </div>
                <div id="middle-container-advertisement">
                    <?php
                     
                        echo "<img src=".$image_path."></br>";
                        

                    ?>

                </div>    
                
            </div>
            
            <script src="scripts/slider.js"></script> 
    </body>
</html>
