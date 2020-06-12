<?php
 session_start();
if(isset($_POST['login']))
{
 $uname=trim($_POST['uname']);
 $pass=trim($_POST['pw']);
 $conn = mysqli_connect("localhost", "root", "","medicare");
 if($uname==""||$pass=="")
 {
    echo"<script>
         alert('please fill the field');
          window.location.href='login.php';
         </script>";
 }
 else
 {
 $query = mysqli_query($conn, "SELECT uname,password FROM customer WHERE password='$pass' AND uname='$uname'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1)
 {
    
    $_SESSION['varname']=$uname;
    
    echo"<script>alert('loging in');
        window.location.href='../index1.php';
        </script>";
 }
 else
 {
    echo"<script>
 alert('Username or password is invalid');
 </script>";
 }
 mysqli_close($conn); 
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
                    
                   input
                   {
                       width:50%;
                       padding:10px;  
                       background: #f1f1f1;
                   }
                   #background7
            {
                background-image: url("../images/image29.jpg");
                
                background-attachment: scroll;          
                background-repeat:no-repeat;
                background-size:100% 100%;
            }
            .form1{
                padding:0px 0px 10px 0px;
                margin: 60px 470px 0px 470px;
                border:solid 2pt blue;
                background:rgba(0,0,0,0.5);
                color: #fff; 
            }
            .div1{
                border-bottom:solid 2pt blue;
                 
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
    <body id="background7">
        
             <div class="header1">
            <a href="about_us.php">ABOUT US &nbsp;</a>
                <a href="contact_us.php">CONTACT US &nbsp;</a>
                <a href="purchase.php">PURCHASE &nbsp;</a>
                
        </div>
        <div class="form1">
        <form  method="POST">
                <div class="div1">
                    <h2>LOGIN</h2>
                    <p>please fill below information to sign in</p>
                </div>
                <br><br>
                <center>
               
                    <label>Username:</label><input type="text" placeholder="USERNAME" name="uname" required/><br><br>
                    <label>Password:</label><input type="password" placeholder="PASSWORD" name="pw" required/><br><br>
                    <button type="submit" name="login" class="loginbtn">LOGIN</button>

                    
               
                 </center>
                 
            </form>
        </div>
        <div style="text-align:center;margin-bottom: 167px">
                <p>don't have an account?<a href="register.php">Create account.</a></p>
                 </div>
        
        <div class="footer1">
                <a href="faqs.php">FAQS &nbsp;</a>
                <a href="terms.php">TERMS AND CONDITIONS &nbsp;</a>
                <a href="privacy_policy.php">PRIVACY POLICY &nbsp;</a>
        </div>   
    </body>
</html>




