<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Medicare</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>
    </head>
    <style>
        img{
                       
            
                position:absolute;
                top:80px;
                left:500px;
                width: 400px;
                height: 500px;
            
        }
        #back1{
            background-color: #ffe082;
        }
        .div1{
           position:absolute;
           top:590px;
           left: 330px;
           background-color: #ffa726;
           padding: 10px 30px 10px 30px;
           font-size: 19px;
           
        }
    </style>
    <body id="back1">
        <div class="header1">
            <a href="med.php">INSERT MEDICINE &nbsp;</a>
                <a href="pha.php">INSERT PHARMACY &nbsp;</a>
               <a href="afeedback.php">VIEW FEEDBACK &nbsp;</a>
                 <a href="umed.php">UPDATE MEDICINE &nbsp;</a>
                  <a href="out.php">LOGOUT&nbsp;</a>
                
        </div>
        <div>
        <img src="../images/admin_icon.jpg">
        </div>
       
        <div class="div1">
            
            <p>You've logged in as Admin...Now you can insert, delete, update information from database</p>
            
        </div>
        
        
            
    </body>
