<?php
    function removeUser($email){
        $removeUser_SQL = "DELETE FROM  user WHERE email = '$email'";
        mysqli_query($DatabaseConnection, $removeUser_SQL);

    }

?>