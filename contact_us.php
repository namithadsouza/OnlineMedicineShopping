<?php
        require_once('header.php');
?>
<?php
include('connect_db.php');
               session_start();

       if(isset($_POST['submit']))
  {
    $name=trim($_POST['n']);
    $phno=trim($_POST['mn']);
    $email=trim($_POST['em']);
    $city=trim($_POST['c']);
    $message=trim($_POST['mes']);    
        if($name==""||$phno==""||$email==""||$city==""||$message=="")
    {
      echo "<script>alert('Please enter this field');
       window.location.href='contact_us.php';
       </script>";
    }
     
 

     else
     {
      $query="INSERT INTO feedback (uname,phno,email,city,message) VALUES('$name','$phno','$email','$city','$message')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
       
        
        echo"<script>alert(' your feedback Successfully submitted');
        window.location.href='contact_us.php'
        </script>";

  }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>welcome to medicare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #background6
            {
                background-color:powderblue;
                background-attachment: fixed;          
                background-repeat:no-repeat;
                background-size:100% 100%;
            }
            body 
                {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                }
                p{
                    font-size: 18px;
                }

            .i1
            {
                position:absolute;
                top:120px;
                left:955px;
                width: 450px;
                height: 400px;
            }
            input
                   {
                       width:50%;
                       padding:5px;
                       margin:5px 0 2px 0px;
                      
                   }
                   label{
                display: inline-block;
                width:100px;
                text-align:right;
                 font-weight: bolder;
                
            }
            .div1{
                border: 1pt solid black;
                margin: 70px 900px 90px 50px;
                padding: 10px 60px 10px 20px;
            }
            .div2{
                position:fixed;
                top:120px;
                left:560px;
                border: solid 1pt black;
                padding: 20px 50px 60px 50px;
            }
        </style>
        <link href="css1.css" rel="stylesheet"/>
    </head>
    <body id="background6">
 
        
            <img class="i1" src="images/image22.jpg"/>
            <form class="div1" method="post">
                <h2><u>Contact Us</u></h2>
                <label>Name:</label> <input type="text" name="n" placeholder="NAME"/><br><br>
                <label>Mobile NO:</label><input type="tel" name="mn" placeholder="MOBILE NUMBER"/><br><br>
                <label>City:</label><input type="text" name="c" placeholder="CITY"/><br><br>
                <label>E-Mail:</label><input type="text" name="em" placeholder="E-MAIL"/><br><br>
                <label>Message:</label><textarea rows="3" name="mes" cols="25" placeholder="Write your Query"></textarea><br><br> 
                <button type="submit" name="submit" class="contact_btn" >SUBMIT</button>
            </form>
          
       
            <div class="div2">
            <h2><u>Mail Us</u></h2>
            <p>E-mail:medicareindia@gmail.com<br>
            <u>our location</u>:1st floor<br>
                little flower building<br>
                MG Road,Mangalore<br>
                Karnataka,574509<br>
                
            </p>
                    <img src="images/mail.PNG" style="width:200px; height: 150px;"/>

        </div>
    </body>
</html>

<?php
        require_once('footer.php');
?>

