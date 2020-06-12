<?php
       include('../connect_db.php');
               session_start();

       if(isset($_POST['register']))
  {
    $name=trim($_POST['name']);
    $phno=trim($_POST['mob']);
    $email=trim($_POST['email']);
    $uname=trim($_POST['uname']);
    $address=trim($_POST['address']);    
    $password=trim($_POST['pw']); 
    if($name==""||$phno==""||$email==""||$uname==""||$address==""||$password=="")
    {
      echo "<script>alert('Please enter this field');
       window.location.href='register.php';
       </script>";
    }
    if(!(preg_match('/^[a-zA-Z\s]+$/',$name)))
    {
        echo "<script>alert('invalid name');
       window.location.href='register.php';
       </script>";
    }
      $user_check_query = "SELECT * FROM customer WHERE uname='$uname' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if ($user) 
  { 
    if ($user['uname']== $uname) {
      echo "<script>alert('Username exists...please enter another usename...');
       window.location.href='register.php';
       </script>";
    }
  }

     else
     {
      $query="INSERT INTO customer (uname,cname,phno,email,address,password) VALUES('$uname','$name','$phno','$email','$address','$password')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
        $_SESSION['varname']=$uname;
        
        echo"<script>alert('Successfully registered');
        window.location.href='../index1.php'
        </script>";

  }
  }
?>
<!DOCTYPE html>

<html>
    <head>
               <title>Welcome to Medicare</title>
               <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link href="css1.css" rel="stylesheet"/>
               
               <style>
                    
                   input,textarea
                   {
                       width:50%;
                       padding:10px;
                       
                       background: #f1f1f1;
                   }
                   #background6
            {
                background-image: url("../images/image29.jpg");
                background-attachment: scroll;          
                background-repeat:no-repeat;
                background-size:100% 100%;
            }
            .form1{
                padding:0px 0px 10px 0px;
                margin: 10px 470px 0px 470px;
                border:solid 2pt blue;
                background:rgba(0,0,0,0.5);
                color: #fff; 
            }
            .div1{
                border-bottom: solid 2pt blue;
                 
                padding:2px 20px 2px 20px;
            }
            label{
                display: inline-block;
                width:100px;
                text-align:right;
                 font-weight: bolder;
                
            }
               </style>
               
    </head>
    <body id="background6">
        <div class="header1">
            <a href="about_us.php">ABOUT US &nbsp;</a>
                <a href="contact_us.php">CONTACT US &nbsp;</a>
                <a href="purchase.php">PURCHASE &nbsp;</a>
            
        </div>
             
                 <form class="form1" method="POST">
                     <div class="div1">
                        <h2>REGISTER</h2>
                        <p>Please fill in this form to create an account.</p>
                     </div>
                     <center>
                         <br><br>
                         <label>Name:</label> <input type="text" placeholder="NAME" name="name" required=""/><br><br>
                         <label>Mobile No:</label> <input type="tel" placeholder="MOBILE NUMBER" name="mob"   required="" maxlength="10"/><br><br>
                         <label>Email: </label> <input type="email" placeholder="E-MAIL" name="email" required=""/><br><br>
                        <label>Username: </label> <input type="text" placeholder="USERNAME" name="uname" required=""/><br><br>
                        <label>Password: </label> <input type="password" placeholder="PASSWORD" name="pw" minlength="5" required=""/><br><br>
                        <label>Address: </label> <textarea rows="1" cols="25" placeholder="ADDRESS" name="address" required=""></textarea><br><br>

                        <p>by creating an account you agree to our <a href="terms.html"> terms and privacy</a></p>
                        <button type="submit" name="register" class="register_btn">REGISTER</button>
                     </center>
                     </form>
                     <div style="text-align:center">
                     <p>already have an account?<a href="login.php">sign in</a>.</p>         
                     </div>
                   
             
        <div class="footer1">
                <a href="faqs.php">FAQS &nbsp;</a>   
                <a href="terms.php">TERMS AND CONDITIONS &nbsp;</a>
                <a href="privacy_policy.php">PRIVACY POLICY &nbsp;</a>
        </div>   
    </body>
</html>


