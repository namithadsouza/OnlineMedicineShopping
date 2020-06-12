<?php
 include('../connect_db.php');
               session_start();

       if(isset($_POST['insert']))
  {
    $mname=trim($_POST['mn']);
    $mpath=trim($_POST['mi']);
    $price=trim($_POST['mc']);
   $user_check_query = "SELECT * FROM medicine WHERE mname='$mname' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if ($user) 
  { 
    if ($user['mname']== $mname) {
      echo "<script>alert('Infprmation is uptodate...');
       window.location.href='admin_page1.php';
       </script>";
    }
  }

     else
     {
      $query="INSERT INTO medicine (mname,mimage,price) VALUES('$mname','$mpath','$price')";
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
        input
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
                 padding:10px 0px 10px 0px;
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
                top:170px;
                left:800px;
                width: 400px;
                height: 500px;
            
        }
    </style>
    <body>
        <div class="header1">
             <a href="umed.php">UPDATE MEDICINE &nbsp;</a>
             <a href="afeedback.php">VIEW FEEDBACK &nbsp;</a>

                <a href="pha.php">INSERT PHARMACY &nbsp;</a>
                <a href="out.php">LOGOUT&nbsp;</a>
                
        </div>
        <img src="../images/admin_icon.jpg">
         <form class="form1" method="POST">
                     <div class="div2">
                        <h2>Update Information About Medicines</h2>
                        
                     </div>
                     <center>
                         <br><br>
                         <label>Medicine Name:</label> <input type="text" placeholder="MEDICINE NAME" name="mn" required=""/><br><br>
                         <label>Medicine Image Path:</label>  <input type="text" placeholder="IMAGE PATH" name="mi"   required=""/><br><br>
                         <label>Medicine Cost:</label> <input type="number" placeholder="PRICE IN RUPEES" name="mc" required=""/><br><br>
                  
                        <button type="submit" name="insert" class="register_btn">INSERT</button>
                     </center>
                     
                   </form>
    </body>
</html>
