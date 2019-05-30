<?php 
include 'DBConnection.php';
session_start();
    if(isset($_SESSION['id'])){
        $uid =$_SESSION['id'];
        $SQL = 
    "SELECT 
        id,
        username,
        password,
        logged,
        sex,
        adress,
        email,
        status
    FROM
        user
    WHERE
        id = '$uid';";
    $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);   
    while ($row = mysqli_fetch_assoc($DatabaseResult)){       
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['logged'] = $row['logged'];
        $_SESSION['sex'] = $row['sex'];
        $_SESSION['adress'] = $row['adress'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['status'] = $row['status'];
        
    }
    header("Location: store.php");
    }   
?>