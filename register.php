

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
                      <!--  <span id="search-span"><img id="search-icon"src="img/search-icon.png" alt="Loading.."></span>
                        <input id="search-bar"type="text" name="search" placeholder="Pretraga artikala..." value="" autocomplete="off" autocomplete2="off">-->
                        
                </div> 

                
                
            </div>
            <div id="middle-container">
            <div id="middle-left"></div>
		
		
			<div id="middle-middle">
						
						
					
            
                            
                            
				<form id="buy-form"  class='buy' method="post" action=''>
                    <?php
                        include 'DBConnection.php';
                        session_start();
                        
                        $getMaxId_SQL = "SELECT COUNT(id) as max FROM `user`";                            
                            $result = mysqli_query($DatabaseConnection,$getMaxId_SQL);
                            while($row = mysqli_fetch_assoc($result)){
                                $maxId = $row['max'];
                                
                            }
                            $currentId = $maxId +1;
                            //echo $currentId;
                            //unset($_POST['Submit'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['gender'],$_POST['address']);
                        if(isset($_POST['register'])){
                            $email = $_POST['email'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $gender = $_POST['gender'];
                            $adress = $_POST['address'];                       
                            /*$InsertUser_SQL = "INSERT INTO `user` (id,email,username,password,logged,sex,adress, group_id, status)
                                VALUES($currentId,'$email','$username','$password','false','$gender', '$adress', 3, 'active')";*/
                                $InsertUser_SQL = "INSERT INTO `user` (id,email,username,password,logged,sex,adress, group_id, status)
                                VALUES($currentId,'$email','$username','$password','false','$gender', '$adress', 3, 'active')";
                            if(!mysqli_query($DatabaseConnection,$InsertUser_SQL)) {
                                
                                if(mysqli_error($DatabaseConnection) == "Duplicate entry '$email' for key 'uq_user_email'"){
                                    echo "Email already exists";
                                }
                                if(mysqli_error($DatabaseConnection) == "Duplicate entry '$username' for key 'uq_user_username'"){
                                    echo "User already exists";
                                }
                              
                            }else{
                                header("Location: store.php");
                            }
                                                
                        }
             
            
                    ?>
                                
                    <div class='input'><b>Email: </b><input type='text' name='email' required ></div></br>
                    <div class='input'><b>Username: </b><input type='text' name='username' required ></div></br>
                    
                    <div class='input'><b>Password: </b><input type='password' name='password' required ></div></br>
                    <div class='input'><b>Sex</b>
                    <input type="radio" name="gender" value="male" required >Male 
                    <input type="radio" name="gender" value="female"required>Female <br>
                    <b>Address: </b><input type='text' name='address' autocomplete='off' required></br>

                        
                    <input type='submit' name='register' value='register'>
                    <a href='store.php'><button>Cancel</button></a>             
				</form>
		
		
			</div>
		
			<div id="middle-right"></div>

           
    
                
            </div>
            
            <script type="text/JavaScript" src="scripts/JQuery.js"></script>
            <script type="text/JavaScript" src="scripts/korpa.js"></script>
    </body>
</html>
