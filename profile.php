<?php
    include 'DBConnection.php';

    session_start();

    //Ucitavanj privilegija korisnika sa datim $uid
    if(isset($_SESSION['id'])){
        $uid = $_SESSION['id'];
        $SQL = "SELECT
        privilegies.*       
        FROM
        `user`
        INNER JOIN `group` ON `user`.group_id = `group`.group_id
        INNER JOIN privilegies ON `group`.privilegies_id = privilegies.privilegies_id
        WHERE
        `user`.id = '$uid';";
        $privilegies_result = mysqli_query($DatabaseConnection, $SQL);
        while($row = mysqli_fetch_assoc($privilegies_result)){
            $group = $row['group'];
            $changeEmail = $row['changeEmail'];
            $changeUsername = $row['changeUsername'];
            $changeAddress = $row['changeAddress'];
            $addUser = $row['addUser'];
            $removeUser = $row['removeUser'];
            $banUser = $row['banUser'];
            $editUserEmail = $row['editUserEmail'];
            $editUserUsername = $row['editUserUsername'];
            $editUserAddress = $row['editUserAddress'];
            $addProduct = $row['addProduct'];
            $editProduct = $row['editProduct'];
            $removeProduct = $row['removeProduct'];            
        }               
    }
    
    function goBack(){
        
        Header('Location: index.php');
        exit;

    }
    
    
    
    
    
  
    
    
    
   
    	
        

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        
        <link href="css/cpanel.css" rel="stylesheet" type="text/css">
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
                        
                        if(isset($_SESSION['id'])){
                            
                            
                            echo "<a class='login' href='logout.php'>Logout</a>";
                            echo "<a class='active' href='profile.php'>".$_SESSION['username']."</a>";
                        
                        }else {
                            echo "<a class='login' href='loginForm.php'>Login</a>";
                            echo "<a href='register.php'>Register</a>";
                        }
                        ?>
                      </div> 

                
                
            </div>
            <div id="middle-container">
            <div id="middle-left">
                <?php
                    if($changeEmail == 'true'){
                        
                        if(isset($_POST['submitChangeEmail'])){ 
                            $email = $_POST['newEmail'];
                            $changeEmail_SQL = "Update user SET email = '$email' WHERE user.id = '$uid'";
                            if(mysqli_query($DatabaseConnection, $changeEmail_SQL)){
                                $message = "Email changed to ". $email;
                                
                                //More addition code for email change verification and stufff
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                
                               
                            }

                           
                            
                            }    

                        echo "<form class='profileForm' method='post' action ='' >
                            <b>Change Email</b></br>
                            
                            Enter new Email:<input type='text' name='newEmail' class='field'><br>
                            <br>
                            <input type='submit' name='submitChangeEmail' value='Submit' onclick='reload()'>
                        
                        </form></br>";


                        
                    }
                  
                    if($changeUsername == 'true'){
                        
                        
                        if(isset($_POST['submitChangeUsername'])){ 
                            $Username = $_POST['newUsername'];
                            $changeUsername_SQL = "Update user SET Username = '$Username' WHERE user.id = '$uid'";
                            if(mysqli_query($DatabaseConnection, $changeUsername_SQL)){
                                $message = "Username changed to ". $Username;

                                //More addition code for email change verification and stufff
                                echo "<script type='text/javascript'>alert('$message');</script>";
                               
                            }

                           
                            }    

                        echo "<form class='profileForm' method='post' action ='' >
                            <b>Change Username</b><br>
                            Enter new Username:<input type='text' name='newUsername' class='field'><br>
                            <br>
                            <input type='submit' value='submit' name='submitChangeUsername' onclick='reload()'>
                        
                        </form></br>";
                    }
                    if($changeAddress == 'true'){
                        
                        if(isset($_POST['submitChangeAddress'])){ 
                            $Address = $_POST['newAddress'];
                            $changeAddress_SQL = "Update user SET Adress = '$Address' WHERE user.id = '$uid'";
                            if(mysqli_query($DatabaseConnection, $changeAddress_SQL)){
                                $message = "Address changed to ". $Address;

                                //More addition code for email change verification and stufff
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                
                            }

                        
                            }    

                        echo "<form class='profileForm' method='post' action ='' >
                            <b>Change Address</b><br>
                            Enter new Address:<input type='text' name='newAddress' class='field'><br>
                            <br>
                            <input type='submit' name='submitChangeAddress' value='submit' onclick='reload()'>
                        
                        </form></br>";
                    }
                
                ?>
                
            </div>
		
		
        <div id="middle-middle">
        <?php
                   if($editUserEmail == 'true'){
                    
                        if(isset($_POST['submitEditUserEmail'])){ 
                            $email = $_POST['newUserEmail'];
                            $Username = $_POST['userUsername'];
                            $editUserEmail_SQL = "Update user SET email = '$email' WHERE user.Username = '$Username'";
                            $message = "Email changed to ". $email . "for ". $Username ;
                            if(mysqli_query($DatabaseConnection,$editUserEmail_SQL)){
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
                            }
                        }    

                        echo "<form class='profileForm' method='post' action ='' >
                            <b>Edit user email</b><br>
                            Enter Username:<input type='text' name='userUsername' class='field'><br>
                            <br>
                            Enter new user email:<input type='text' name='newUserEmail' class='field'><br>
                            <input type='submit' name='submitEditUserEmail'value='submit' onclick='reload()'>
                        
                        </form></br>";
                    }  

                    if($editUserUsername == 'true'){
                        
                        if(isset($_POST['submitEditUserUsername'])){ 
                            $email = $_POST['userEmail'];
                            $Username = $_POST['newUserUsername'];
                            $editUserUsername_SQL = "Update user SET Username = '$Username' WHERE user.email = '$email'";
                            $message = "Username changed to ". $Username . "for ". $email ;
                            if(mysqli_query($DatabaseConnection,$editUserUsername_SQL)){
                                echo "<script type='text/javascript'>alert('$message');</script>";
                               
                            }
                          
                            }    

                        echo "<form class='profileForm' method='post' action ='' >
                           <b>Edit user Username</b> <br>
                           Enter user email:<input type='text' name='userEmail' class='field'><br>
                           <br>
                            Enter new user Username:<input type='text' name='newUserUsername' class='field'><br>
                            <input type='submit' name='submitEditUserUsername' value='submit' onclick='reload()' >
                        
                        </form></br>";
                    }  
                    if($editUserAddress == 'true'){
                        
                        if(isset($_POST['submitEditUserAddress'])){ 
                            $Address = $_POST['newUserAddress'];
                            $Username = $_POST['userUsername'];
                            $editUserAddress_SQL = "Update user SET Adress = '$Address' WHERE user.Username = '$Username'";
                            if(mysqli_query($DatabaseConnection,$editUserAddress_SQL)){
                                $message = "Address changed to ". $Address . "for ". $Username ;
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                
                            }
                           
                            
                            }    

                        echo "<form class='profileForm' method='post' action ='' >
                            <b>Edit user Address</b></br>
                            Enter user Username:<input type='text' name='userUsername' class='field'><br>
                            <br>
                            Enter new user Address:<input type='text' name='newUserAddress' class='field' ><br>
                            <input type='submit' name='submitEditUserAddress' value='submit' onclick='reload()'>
                        
                        </form></br>";
                    }  
                    if($addUser == 'true'){
                        
                        if(isset($_POST['submitAddUser'])){ 
                                 
                                    $email = $_POST['email'];
                                    $username=$_POST['Username'];
                                    $password=$_POST['password'];
                                    
                                    $sex=$_POST['sex'];
                                    $address=$_POST['Address'];
                                    $group_id=$_POST['group_id'];
                                    $status=$_POST['status'];

 
                                    $getMaxId_SQL = "SELECT COUNT(id) as max FROM `user`";                            
                                    $result = mysqli_query($DatabaseConnection,$getMaxId_SQL);
                                    while($row = mysqli_fetch_assoc($result)){
                                        $maxId = $row['max'];
                                        
                                    }
                                    $maxId++;
                            $addUser_SQL = "INSERT INTO user (id,email, username, `password`, logged, sex,adress, group_id, `status`) 
                            VALUES ($maxId,'$email', '$username', '$password', 'false', '$sex', '$address', $group_id, '$status') ";


                            if(mysqli_query($DatabaseConnection, $addUser_SQL)){
                                $message = "User " . $username . " added!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                               
                                
                                
                            }else{
                                mysqli_error($DatabaseConnection);
                            }
                            
                            }    

                        echo "<form class='profileForm' method='post' action ='' >
                            <b>Add user</b></br>
                            Username:<input type='text' name='Username' class='field'></br>
                            <br>
                            Email:<input type='text' name='email' class='field'></br>
                            <br>
                            Password:<input type='password' name='password' class='field'></br>
                            <br>
                            Sex:<br><input type='radio' name='sex' value='male' > Male<br>
                                <input type='radio' name='sex' value='female' > Female<br>
                                <br>
                            Addres:<input type='text' name='Address'class='field' ></br>
                            <br>
                            Group:<input type='text' name='group_id' class='field'></br>
                            Status:<br><input type='radio' name='status' value='active' > Active<br>
                                    <input type='radio' name='status' value='banned'  > Banned<br>
                            <input type='submit' name='submitAddUser'  value='submit' onclick='reload()'>
                        
                        </form></br>";
                    }  
                    if($removeUser == 'true'){
                        
                        if(isset($_POST['submitRemoveUser'])){ 
                            $Username = $_POST['userUsername'];
                            $removeUser_SQL = "DELETE FROM  user WHERE username = '$Username'";
                            if(mysqli_query($DatabaseConnection, $removeUser_SQL)){
                                $message = $Username." removed from the system";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                               
                            }
                          
                            }    

                        echo "<form class='profileForm' method='post' action ='' >
                           <b>Remove user</b></br> 
                           Enter user Username:<input type='text' name='userUsername' autofill='off' class='field' ><br>
                            
                            <input type='submit' name='submitRemoveUser' value='submit' onclick='reload()'>
                        
                        </form></br>";
                    }  


            
                    
                    
                   
    
        ?>
        </div>
    
        <div id="middle-right">
                    <?php
                        if($addProduct == 'true'){
                            
                            if(isset($_POST['submitAddProduct'])){
                                
                                $productName = $_POST['productName'];
                                $productPrice = $_POST['price'];
                                $ProductDescription = $_POST['description'];
                                $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                               
                            $addProduct_SQl = "INSERT INTO lighter (name, price, description, image) VALUES ('$productName', '$productPrice', '$ProductDescription', '$image')";
                            
                            if(mysqli_query($DatabaseConnection,$addProduct_SQl)){
                               
                                echo "<script type='text/javascript'>alert('Image uploaded succesfully!');</script>";
                               

                            }

                            
                        }
                            
                            echo "<form class='profileForm' method='post' action ='' enctype='multipart/form-data' >
                           <b>Add product</b></br> 
                           Product name:<input type='text' name='productName' autocomplete='false' class='field' ><br>
                           <br>
                            Product price:<input type='text' name='price' autocomplete='false' class='field' ><br>
                            <br>
                            Product Description:<input type='text' name='description' autocomplete='false 'class='field' ><br>
                            <br>
                            Product image:<input type='file' name='image' autocomplete='false' class='field'><br>
                            <input type='submit' name='submitAddProduct' autocomplete='false' value='submit' onclick='reload()'>
                        
                        </form>";
                        }
                        if($editProduct == 'true'){
                            //TO ADD
                        }
                        if($removeProduct == 'true'){
                            //TO ADD
                        }
                    
                    
                    ?>
        
                </div>
               


            </div>
            <?php
                    if($group == "Admin" || $group== "Moderator"){
                        echo "<table>
                                    <tr>
                                        <th>ID<th>
                                        <th>Email<th>
                                        <th>Username<th>
                                        <th>Password</th>
                                        <th>logged</th>
                                        <th>Sex</th>
                                        <th>Address</th>
                                        <th>group_id</th>
                                        <th>Status</th>
                                        
                                    </tr>";
                                        $getallUsers_SQL = "SELECT * FROM getAllUsers ";
                                        if($result = mysqli_query($DatabaseConnection, $getallUsers_SQL)){
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "
                                                <tr>
                                                    <th>".$row['id']."<th>
                                                    <th>".$row['email']."<th>
                                                    <th>".$row['username']."<th>
                                                    <th>".$row['password']."</th>
                                                    <th>".$row['logged']."</th>
                                                    <th>".$row['sex']."</th>
                                                    <th>".$row['adress']."</th>
                                                    <th>".$row['group_id']."</th>
                                                    <th>".$row['status']."</th>
                                                    
                                                </tr>";        
                                            } 
                                        }
                                       echo "</table>";           
                                    }else{

                                        echo "pusi kurac";
                                    }
                    
                
                ?>
                     
            <script src="scripts/slider.js"></script> 
            <script src="scripts/profile.js"></script> 
    </body>
</html>
