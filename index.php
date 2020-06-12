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
                padding :5px 0px 5px 10px;   
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
                #logo{
                    float:left;
                    margin-right: 50px;
                }
                #myimage{
                    margin-top: 5px;
                    margin-bottom: 2px;
                }
        </style>
    </head>
    <body onload='changeimage()'>      
    <div class="header1">
                <a href="start/login.php">LOGIN &nbsp;</a>
                <a href="start/register.php">REGISTER &nbsp;</a>
                <a href="start/purchase.php">PURCHASE &nbsp;</a>
                <a href="start/about_us.php">ABOUT US &nbsp;</a>
                
        </div>
        <div>
            
                <div class="content"> 
                   <img width='190px' height='165px' id="logo" src="images/logo1.PNG">
             
                    <p id='p1'><b>MediCare</b></p>
                    <p id='p2'><b>A pharmacy for all your needs</i></p>
                 
                </div>
           
        </div>
<div align='center'>
    <img width='75%' height='400px' id='myimage'/>
</div>


        
        <div class="footer1">
            <a href="start/faqs.php">FAQS &nbsp;</a>
                
                <a href="start/contact_us.php">CONTACT US &nbsp;</a>
                <a href="start/terms.php">TERMS AND CONDITIONS &nbsp;</a>
                <a href="start/privacy_policy.php">PRIVACY POLICY &nbsp;</a>
        </div>
    </body>
</html>

