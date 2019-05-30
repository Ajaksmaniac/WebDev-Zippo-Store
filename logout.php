<!DOCTYPE html>

<html>



<?php
     include 'DBConnection.php';
     session_start();                    
     $uid = $_SESSION['id'];
     mysqli_query($DatabaseConnection, "UPDATE user SET logged = 'false' WHERE id = '$uid'");
     session_destroy();
       
        
?>



    
    
<?php    

echo "Logging out..";  
sleep(2);
//echo "<a href= 'store.php'>HOME</a>";
header("Location: store.php");
?>
</html>