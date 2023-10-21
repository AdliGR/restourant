<?php
    require_once('database.php'); 
    $db= $conn; // update with your database connection
    //By default, error messages are empty
    $register=$valid=$fnameErr=$lnameErr=$emailErr=$passErr=$cpassErr='';
    //By default,set input values are empty
    $set_firstName=$set_lastName=$set_email='';

    extract($_POST);
    if(isset($_POST['submit']))
    {
        //Input fields are Validated with regular expression
        $validName="/^[a-zA-Z ]*$/";
        $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        $uppercasePassword = "/(?=.*?[A-Z])/";
        $lowercasePassword = "/(?=.*?[a-z])/";
        $digitPassword = "/(?=.*?[0-9])/";
        $spacesPassword = "/^$|\s+/";
        $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
        $minEightPassword = "/.{8,}/";

        //Username Validation
        if(empty($user_name))
        {
            $usernameErr="Username is Required"; 
        }
        else if (!preg_match($validName,$user_name)) 
        {
            $usernameErr="Digits are not allowed";
        }
        else
        {
            $usernameErr=true;
        }

        //Email Address Validation
        if(empty($email))
        {
            $emailErr="Email is Required"; 
        }
        else if (!preg_match($validEmail,$email)) 
        {
            $emailErr="Invalid Email Address";
        }
        else
        {
            $emailErr=true;
        }
            
        //Password validation 
        if(empty($password))
        {
            $passErr="Password is Required"; 
        } 
        else if (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password) || !preg_match($symbolPassword,$password) || !preg_match($minEightPassword,$password) || preg_match($spacesPassword,$password)) 
        {
            $passErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
        }
        else
        {
            $passErr=true;
        }

        //Form validation for confirm password
        if($cpassword!=$password)
        {
            $cpassErr="Confirm Password doest Matched";
        }
        else
        {
            $cpassErr=true;
        }

        //Check all fields are valid or not
        if($usernameErr==1 && $emailErr==1 && $passErr==1 && $cpassErr==1)
        {
            $username =legal_input($user_name);
            $email     =legal_input($email);
            $password  =legal_input(md5($password));
        
            //Check unique email
            $checkEmail=unique_email($email);
            if($checkEmail)
            {
                $register=$email." is already exist";
            }
            else
            {
                //Insert data
                $register=register($username,$email,$password);
            }
        }
        else
        {

            //Set input values is empty until input field is invalid
            $set_username= $user_name;
            $set_email=    $email;
        }
        //Check all fields are vakid or not
    }

    //Convert illegal input value to ligal value formate
    function legal_input($value) 
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    function unique_email($email)
    {
        global $db;
        $sql = "SELECT email FROM users WHERE email='".$email."'";
        $check = $db->query($sql);

        if ($check->num_rows > 0) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //Function to insert user data into database table
    function register($username,$email,$password)
    {
        global $db;
        $sql="INSERT INTO users(user_name,email,password) VALUES(?,?,?)";
        $query=$db->prepare($sql);
        $query->bind_param('sss',$username,$email,$password);
        $exec= $query->execute();
        if($exec==true)
        {
            return "You are registered successfully";
        }
        else
        {
            return "Error: " . $sql . "<br>" .$db->error;
        }
    }
?>