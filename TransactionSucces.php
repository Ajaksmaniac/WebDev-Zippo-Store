<div id="Box"><?php
include "DBConnection.php";
    session_start();
    $maxOrder_id_SQL = "SELECT COUNT(order_id) as max FROM `order`";
    $result = mysqli_query($DatabaseConnection, $maxOrder_id_SQL);
    while($row = mysqli_fetch_assoc($result)){
        $maxOrder_id= $row['max'];      
    }
    $list = $_SESSION['list']; //
    $user_id = $_SESSION['id'];
    $counter = $_SESSION['counter'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $adress = $_SESSION['adress'];
    $currentOrder_id = $maxOrder_id+1;
    $counter2 = 0;   
        $Insert_order_SQL = "INSERT INTO `order` (order_id, user_id)                             
        VALUES ($currentOrder_id,$user_id)";
    if(!mysqli_query($DatabaseConnection, $Insert_order_SQL)){
        echo "ERROR";
    }
    //Ubacuj u order_product tabelu gjde je order_id = $currentOrder_id i svaki element iz $list onolko puta kolko je veliki #counter
    $sum = 0;
    while($counter2 < $counter){
        $INSERT_SQL = "INSERT INTO `order_product` (order_id,lighter_id) VALUES ($currentOrder_id,$list[$counter2])";
        $SUM_SQL = "SELECT price FROM lighter WHERE id = '$list[$counter2]'";
        $result = mysqli_query($DatabaseConnection, $SUM_SQL);
        while($row = mysqli_fetch_assoc($result)){
            $sum+=$row['price'];
        }        
       if(!mysqli_query($DatabaseConnection, $INSERT_SQL)){
            echo "ERROR";
        }
        $counter2++;
    }






?>
            <p>Transaction infomaration</p>
            <div class="alert alert-success">
                <strong>Success!</strong>
            </div>
            <dl class="dl-horizontal">
                <dt>Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID:</dt>
                <dd><?php echo $currentOrder_id; ?></dd>


                <dt>Order&nbsp;&nbsp; Date:</dt>
                <dd><?php
                    
                    
                    echo date("d/m/Y");
                
                ?>
                </dd>
                <dt>&nbsp;Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>

                <dd><?php echo $sum; ?>
                </dd>
                <dt>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $counter ;?></dd>
                <dt>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $email; ?></dd>
                <dt>Username:&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $username; ?></dd>
                <dt>Adress:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $adress; ?></dd>
                <dt>Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd>Succes</dd>
                
                <dt>&nbsp;&nbsp; <b>Continue shoping</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;</dt>
                <dd><a href="index.php"> HOME</a></dd>
                

            </dl>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
        #Box {
            border: 1px solid red;
            width:400px;
            margin-left: 40%;
            margin-top: 10%;
        }

        p {
            width:200px;
            margin-left: 40%;
            display: block;
        }

        dl dt {
            margin-left: 0;
        }
</style>