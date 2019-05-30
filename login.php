<!DOCTYPE html>
<html>
    <head>
        <title>Test login form</title>
    </head>
    <body>
        
        <?php  
            include 'DBConnection.php';
            if(isset($_POST['user'],$_POST['pass'])){
                $inUsername = $_POST['user'];
                $inPassword = $_POST['pass'];
                
            }
            $SQL = "SELECT 
            id,
            username,
            password
            FROM
            user
            WHERE
            username like '$inUsername';";
            
            $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
            $DatabaseResultCheck = mysqli_num_rows($DatabaseResult);
            if($DatabaseResultCheck > 0){
                while ($DatabaseRow = mysqli_fetch_assoc($DatabaseResult)){   
                    if($inUsername == $DatabaseRow['username'] && $inPassword ==  $DatabaseRow['password']) {
                        session_start();
                        $uid = $DatabaseRow['id'];
                        $_SESSION['id'] = $uid;
                        $SQL_Login_true = "
                        UPDATE user
                        SET logged = 'true'
                        WHERE id = '$uid'";
                        mysqli_query($DatabaseConnection, $SQL_Login_true);
                        header("Location: connection.php");
                    }else{   
                        echo "Bad password";
                    }                    
                }
            }else{
                header("Location: loginForm.php");
                echo "user not found";
            }
        ?>
    
    </body>

</html>