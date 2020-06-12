<?php    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Medicare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>
        <script type='text/javascript'>
            var imageID=0;
            function changeimage()
            {
   
            if(imageID==0)
            {
                document.getElementById("myimage").src="images/banner_3.png";
                imageID++;
            }
            else
            {
                document.getElementById("myimage").src="images/banner_2.jpg";
                imageID=0;
         
            }
            setTimeout("changeimage()",2000);
            }
        ``</script>

        <style>
           
           
            .content
                {
                padding :1px 0px 1px 0px;   
                background-color:#000066;
                max-width:100%;
                margin-top:1px;
               
                color: white;
                }
                
              #p1{
                    
                    font-size: 35px;
                     
                }
                #p2{
                    font-size: 25px;
                   
                   
                }
                
                #myimage{
                    margin-top: 5px;
                    margin-bottom: 5px;
                }
        </style>
    </head>
    <body onload='changeimage()'>      
    <div class="header1">
              
                <a href="purchase1.php">PURCHASE &nbsp;</a>
                <a href="about_us.php">ABOUT US &nbsp;</a>
                 <a href="cart.php">CART &nbsp;</a>
                <a href="log_out.php">LOG OUT</a>
                
        </div>
        <div>
            <center>
                <div class="content"> 
                   
                    
                    <p id='p1'><b>MediCare</b></p>
                    <p id='p2'><b>A pharmacy for all your needs</i></p>
                   
                </div>
                 </center>
           
        </div>
<div align='center'>
    <img width='75%' height='400px' id='myimage'/>
</div>


        
        <div class="footer1">
            <a href="faqs.php">FAQS &nbsp;</a>
                
                <a href="contact_us.php">CONTACT US &nbsp;</a>
                <a href="terms.php">TERMS AND CONDITIONS &nbsp;</a>
                <a href="privacy_policy.php">PRIVACY POLICY &nbsp;</a>
        </div>
    </body>
</html>

