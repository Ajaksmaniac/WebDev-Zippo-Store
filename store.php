<!DOCTYPE html>

<html>
    <head>
        <title>Zippo RS</title>
        <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
        <link href="css/store.css" rel="stylesheet" type="text/css">
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
                      <div id="store-cart-container">
                      <?php
                      include 'DBConnection.php';
                      session_start();
                        
                         
                        if(isset($_SESSION['id'])){
                            
                          
                            echo "<a id='cart'><img id='shoping-cart-icon' src='img/shoping-cart-icon.png'></a>
                                <p id='cart-value' value='0'>0 RSD</p>";
                          
                        }else{
                            echo "<b>In order to purchase products from us, you need to be logged in!</b>";
                        }
                        

                       
                      
                      ?>
                           
                            
                            
                     </div>
                       
                    </div>
                    
                </div>
                <div class="topnav">
                        <a href="index.php">Home</a>
                        <a class="active" href="store.php">Store</a>
                        <a href="contact.php">Contact</a>
                        <a href="about.php">About</a>
                        
                        <?php
                         // Provera da li postoji sesija, ako postoji postavi Logout dugme i Profile stranicu,
                         // u suprotnom stasvi Login i register stranice
                        if(isset($_SESSION['id'])){
                            
                            
                            echo "<a class='login' href='logout.php'>Logout</a>";
                            echo "<a href='profile.php'>".$_SESSION['username']."</a>";
                        
                        }else {
                            echo "<a class='login' href='loginForm.php'>Login</a>";
                            echo "<a href='register.php'>Register</a>";
                        }
                        ?>
                        <span id="search-span"><img id="search-icon"src="img/search-icon.png" alt="Loading.."></span>
                        <input id="search-bar"type="text" name="search" placeholder="Search" value="" autocomplete="off" autocomplete2="off">
                        
                        
                        
                </div> 

                
                
            </div>
            <div id="middle-container">
            <?php
             
                
               

                        
                      
                
                      
               class lighter {
                    
                    private $image_path;
                    private $price;
                    private $ligher_id;
                 
               


                   function construct($image_path_in, $price_in, $ligher_id_in){
                    $this->image_path = $image_path_in;
                    $this->price = $price_in;
                    $this->lighter_id = $ligher_id_in;
                   }
                  
                   
                   function addThumbnail(){
                        
                        
                        
                        
                        if(isset($_SESSION['id'])){
                           
                            echo '<div class="zippo">
                            <a id="open" href="description.php?id='.$this->lighter_id .'"  ><img src="'.$this->image_path.'"></a>
                        
                            <p>Price: '.$this->price .' RSD</p></br> 
                            
                            <button id="addToCart" name="button" value='.$this->lighter_id.' class="add-to-cart-button button" type="submit" onClick="getValue('.$this->price.'),addTItemToCart('.$this->lighter_id.')">Add to cart</button>
                         </div>
                            ';
                           
                         
                        
                        }else{
                            echo '<div class="zippo">
                            <a id="open" href="description.php?id='.$this->lighter_id .'"  ><img src="'.$this->image_path.'"></a>
                        
                            <p>Price: '.$this->price .' RSD</p></div>
                            ';
                        }
                        

                   }
               
               } 



              
               
               
                    $SQL_lighter = "SELECT id, name, price, description, image FROM lighter;";
                    $result = mysqli_query($DatabaseConnection, $SQL_lighter);
                    while($fieldInfo = mysqli_fetch_assoc($result)){                       
                        $id = $fieldInfo['id'];                       
                        $price = $fieldInfo['price']; 
                        $image_path = "data:image/jpeg;base64,".base64_encode($fieldInfo['image'] ) ;
                        $zippo = new lighter();
                        $zippo->construct($image_path, $price, $id); 
                        $zippo->addThumbnail();
                    }

                   


           
            
            ?>
    
                
            </div>
            
            <script src="scripts/korpa.js"></script>        
    </body>
</html>
<?php
 

  
?>