

<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
        <link href="css/store.css" rel="stylesheet" type="text/css">
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
                        <a class="active" href="store.php">Store</a>
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
                      <!--  <span id="search-span"><img id="search-icon"src="img/search-icon.png" alt="Loading.."></span>
                        <input id="search-bar"type="text" name="search" placeholder="Pretraga artikala..." value="" autocomplete="off" autocomplete2="off">-->
                        
                </div> 

                
                
            </div>
            <div id="middle-container">
            <div id="middle-left"></div>
		
		
			<div id="middle-middle">
						
						
					
            
                            
                            
				<form id="buy-form" action="TransactionSucces.php" class='buy' method="post">
                <?php
                    
             //ucitavanje dodatih upaljaca u korpu iz baze podataka
                    $kolicina = $_GET['kolicina'];   
                    $list = array();
                    $counter = 0;
                    if($kolicina > 1){
                        $counter = 0;
                        while($counter < $kolicina){
                            $str = "id".$counter;
                            $id = $_GET[$str];
                            array_push($list,$id);
                            $getItem_SQL = "SELECT * FROM lighter WHERE id =  '$list[$counter]' ";
                            $result = mysqli_query($DatabaseConnection,$getItem_SQL);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<img src='data:image/jpeg;base64,".base64_encode($row['image'] )."' width='100px' height = '100px'><b>".$row['name']."</b>";                                
                                echo "</br>";
                            }
                            $counter++;
                        }
                    }else{
                        $counter = 1;
                        $str = "id".$counter;
                        $id = $_GET[$str];
                        $getItem_SQL = "SELECT * FROM lighter WHERE id =  $id ";
                        $result = mysqli_query($DatabaseConnection,$getItem_SQL);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<img src='data:image/jpeg;base64,".base64_encode($row['image'] )."' width='100px' height = '100px'><b>".$row['name']."</b>";
                            echo "</br>";
                         }     
                    }
                    $_SESSION['counter'] = $counter;
                    $_SESSION['list'] = $list;
            
            ?>
                                    
                                   
                       <input type='submit' value='buy'>
                       <a href='store.php'>Cancel</a>             
				</form>
		
		
			</div>
		
			<div id="middle-right"></div>

           
    
                
            </div>
            
            <script type="text/JavaScript" src="scripts/JQuery.js"></script>
            <script type="text/JavaScript" src="scripts/korpa.js"></script>
    </body>
</html>
