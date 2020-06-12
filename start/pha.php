<?php
 include('../connect_db.php');
               session_start();

       if(isset($_POST['insert']))
  {
    $pname=trim($_POST['pn']);
    $pno=trim($_POST['pp']);
    $padd=trim($_POST['pa']);
   $user_check_query = "SELECT * FROM medicine WHERE phname='$pname' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if ($user) 
  { 
    if ($user['phname']== $pname) {
      echo "<script>alert('Infprmation is uptodate...');
       window.location.href='admin_page1.php';
       </script>";
    }
  }

     else
     {
      $query="INSERT INTO pharmacies (phname,phone,address) VALUES('$pname','$pno','$padd')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
        
        
        echo"<script>alert('Successfully inserted');
        window.location.href='admin_page1.php'
        </script>";

  }
  }
?>
<html>
    <head>
        <title>Welcome to Medicare</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>
    </head>
    <style>
        body{
            background-color: #ffe082;
        }
        input,textarea
                   {
                       width:30%;
                       padding:10px;
                       
                       background: #f1f1f1;
                   }
                   label{
                display: inline-block;
                width:200px;
                text-align:right;
                 font-weight: bolder;
                
            }
            .form1{
                 padding:10px 0px 20px 0px;
                 border:solid 2pt blue;
                background-color: white;
                 margin: 60px 600px 0 50px;
                color: black;
                
            }
            .div2{
                 border-bottom: solid 2pt blue;
                 text-align: center;
                padding:2px 20px 2px 20px;
            }
            img{
                       
            
                position:absolute;
                top:190px;
                left:820px;
                width: 400px;
                height: 500px;
            
        }
    </style>
    <body>
        <div class="header1">
            <a href="med.php">INSERT MEDICINE &nbsp;</a>
                
                               <a href="afeedback.php">VIEW FEEDBACK &nbsp;</a>
 <a href="umed.php">UPDATE MEDICINE &nbsp;</a>
                <a href="out.php">LOGOUT&nbsp;</a>
                
        </div>
        <img src="../images/admin_icon.jpg">
<form class="form1" method="POST">
                     <div  class="div2">
                        <h2>Update Information About Pharmacies Associated with Medicare</h2>
                        
                     </div>
                     <center>
                         <br><br>
                         <label>Pharmacy: </label> <input type="text" placeholder="PHARMACY NAME" name="pn" required=""/><br><br>
                         <label>Phone number: </label> <input type="tel" placeholder="CONTACT NUMBER" name="pp"   required=""/><br><br>
                         <label>Address: </label> <textarea rows="2" cols="25" placeholder="" name="pa" required=""></textarea><br><br>



                  
                        <button type="submit" name="insert" class="register_btn">INSERT</button>
                     </center>
                     
                   </form>
    </body>
</html>


