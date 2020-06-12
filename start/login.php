<?php
include('../connect_db.php');
       if(isset($_POST['option']))
       {
          $val1=$_POST['opt'];
          if($val1=="ADMIN")
          {
              header("location:log_admin.php");
          }
          else
          {
              header("location:log_cust.php");
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
        form{
            border-bottom:solid blue 2pt;
            border-left:solid blue 2pt;
            border-right: solid blue 2pt;
            border-collapse: collapse;
            padding:50px 70px 50px 50px;
            margin:0px 400px 187px 400px;
        }
        #s2{
           
            margin:70px 400px 0px 400px;
            padding:10px 10px 10px 10px;
            border:2pt blue solid;
            padding: 1px 1px 1px 1px;
            text-align: center;
           
        }
       select
                   {
                       width:100%;
                       padding:15px; 
                       background: paleturquoise;
                       font-size: 20px;
                       border: 1pt;
                       
                   }
                   option{
                       border:1pt;
                   }
                   .s1{
                       display: block;
                   }
                               
                               
           #i1 {
                position:absolute;
                top:120px;
                left:1050px;
                width: 350px;
                height: 380px;
            }
            #i2{
                 position:absolute;
                top:120px;
                left:20px;
                width: 350px;
                height: 380px;
            }
    </style>
    <body>
         <div class="header1">
            <a href="about_us.php">ABOUT US &nbsp;</a>
                <a href="contact_us.php">CONTACT US &nbsp;</a>
                <a href="purchase.php">PURCHASE &nbsp;</a>
                
        </div>
         <img id="i1" src="../images/image17.jpg"/>
         <img id="i2" src="../images/image17.jpg"/>
        <div id="s2"><h2>SELECT REQUIRED FIELD</h2></div>
                <form method="post">  
                    <div class="s1">
                    <p><select id="opt" name="opt">
                        <option>ADMIN</option>
                        <option>CUSTOMER</option>
                        </select><br><br></p>
                    </div>
                    <center><button type="submit" name="option">SUBMIT</button></center>
                </form>
        <div class="footer1">
                <a href="faqs.php">FAQS &nbsp;</a>   
                <a href="terms.php">TERMS AND CONDITIONS &nbsp;</a>
                <a href="privacy_policy.php">PRIVACY POLICY &nbsp;</a>
        </div>
    </body>
</html>
