<?php
    function addUser($email, $username, $password,$logged, $sex, $address, $group_id, $status){
        $changeEmail_SQL = "INSERT INTO user (email, username, `password`, logged, sex,adress, group_id, `status`) 
        VALUES ('$email', '$username', '$password', '$logged', '$sex', '$address', $group_id, '$status') ";
        mysqli_query($DatabaseConnection, $addUser_SQL);

    }


?>