<?php
        require_once('header.php');
?>

<html>
    <head>
        <title>Thank You for Using MediCare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>
       <style> 
           #background5
            {
                background-color:#ffac14;
                background-attachment: fixed;          
                background-repeat:no-repeat;
                background-size:100% 100%;
            }
            .content
            {    
                padding:150px 0px 195px 90px;      
            }
            img
            {
                position:absolute;
                top:140px;
                left:475px;
                width: 900px;
                height: 400px;
            }
            p{
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body id="background5">
        
        <div class="content">
            <img src="images/image30.jpg"/>
            <p>THANK YOU</p><p>Your order has been placed.</p>
            <p>Total Cost:<?php
                session_start();
            $tc=$_SESSION['varname4'];
            echo $tc?></p>
            <p>Item(s) will be delivered to you</p><p> from Medicare India</p>
            
        </div>
        
    </body>
</html>

<?php
        require_once('footer.php');
?>

