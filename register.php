<?php
    require('register_proces.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--bootstrap4 library linked-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--custom style-->
    <style type="text/css">
        .registration-form
        {
            background: #f7f7f7;
            padding: 20px;
            border: 1px solid orange;
            margin: 50px 0px;
        }

        .err-
        {
            color:red;
        }

        .registration-form form
        {
            border: 1px solid #e8e8e8;
            padding: 10px;
            background: #f3f3f3;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4"> 

                <!--====registration form====-->
                <div class="registration-form">
                    <h4 class="text-center">Membuat Akun Baru</h4>
                
                    <p class="text-success text-center">
                        <?php 
                            echo $register; 
                        ?>
                    </p> 
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                    <!--//Username//-->
                        <div class="form-group">
                            <label for="email">Username</label>
                        
                            <input type="text" class="form-control" placeholder="Masukkan Username" name="username" value="<?php echo $set_username;?>">

                            <p class="err-msg">
                                <?php 
                                    if($usernameErr!=1){ echo $usernameErr; }
                                ?>
                            </p>
                        </div>

                        <!--//Email//-->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="<?php echo $set_email;?>">

                            <p class="err-msg">
                                <?php 
                                    if($emailErr!=1){ echo $emailErr; } 
                                ?>
                            </p>
                        </div>
                    
                        <!--//Password//-->
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            
                            <input type="password" class="form-control"  placeholder="Masukkan password" name="password">
                            
                            <p class="err-msg">
                                <?php  
                                    if($passErr!=1){ echo $passErr; } 
                                ?>
                            </p>
                        </div>

                        <!--//Confirm Password//-->
                        <div class="form-group">
                            <label for="pwd">Konfirmasi Password:</label>
                            <input type="password" class="form-control" placeholder="Masukkan password lagi" name="cpassword">
                            
                            <p class="err-msg">
                                <?php 
                                    if($cpassErr!=1){ echo $cpassErr; } 
                                ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name='admin' value="Admin"> Cek box ini untuk menjadi Admin.
                        </div>

                        <button type="submit" class="btn btn-danger" name="submit">Register Sekarang</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>  
    </div>

</body>
</html>
