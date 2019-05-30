<div id="Box">
            <p>Message sent</p>
            <div class="alert alert-success">
                <strong>Success!</strong>
            </div>
            <dl class="dl-horizontal">
                
                <?php
                  if(isset($_POST['email'],$_POST['message'])){
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                  }

                
                ?>
            <dt>&nbsp;&nbsp; <b>Continue shoping</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;</dt>
            <dd><a href="index.html"> HOME</a></dd>
            <dt><b>Message sent by:</b></dt>
            <dd><?php echo $email; ?></dd>


            <dt><b>Message :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></dt>
            <dt><?php echo $message;; ?></dt>
                 
                
                

            </dl>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
        #Box {
            border: 1px solid red;
            width:400px;
            height: 500px;
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