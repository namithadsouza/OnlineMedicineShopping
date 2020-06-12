<?php
        require_once('header.php');
?>
<!DOCTYPE html>

<html>
    <head>
         <title>Welcome to Medicare</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>
        <style> 
           #background4
            {
                background-color:cornsilk;
                background-attachment: fixed;          
                background-repeat:no-repeat;
                background-size:100% 100%;
                
            }
            .content
            {
                    
                    padding:10px 0px 20px 50px;      
            }
            h2,h3{
                color:darkred;
            }
            p,li{
               color:darkblue; 
               font-size: 19px;
            }
            #i1
            {
                position:absolute;
                top:180px;
                left:810px;
                width: 290px;
                height: 220px;
            }
           
            #i2
            {
                position:absolute;
                top:180px;
                left:1090px;
                width: 290px;
                height: 220px;
            }
            
        </style>   
    </head>
    <body id="background4">
        
        <div class="content">
            <img id="i1" src="images/image22.jpg"/>
            <img id="i2" src="images/image26.jpg"/>
          
            
            <h2>Terms of Use</h2>
            <p>Please read this terms of use carefully by accessing or using this internet based platform,you
                 agree to be bound by th terms described herein and all terms incorporated by reference.If
                you do not agree to all these terms,do not use this internet based platform</p>
            <h3>ELIGIBILITY</h3>
 
            <ul><li> create only one account</li>
                <li>provide accurate,truthful,current and complete information when creating account</li>
                <li>maintain and update your account information</li>
                <li>maintain security of your account by not sharing password with others</li>
                <li>take responsibilities for all the activities that take under your account</li>
            </ul>
            <h3>OTHER TERMS</h3>
            <ul>
            
            <li>A registered id can be utilized by the person whose details have been provided and medicare
                        does not permit multiple persons to share a single login.</li>
                <li>If a user provides information that is untrue, medicare shall have right to suspend
                        or terminate such account at its sole discretion</li>
                <li>medicare may disclose or transfer user information(as defined in the privacy policy) to its
                        affiliates in other countries,and you hereby consent to such transfer</li>
                <li>The users are responsible for maintaining the confidentiality of the users' account access
                        suspected unauthorized information and password. The users will immediately notify 
                      Medicare of any actual or use of users' account or password</li>
                <li>Medicare shall not be responsible in any manner for authenticity of the personal data
                        supplied by users to medicare or any other person acting behalf of medicare</li>
                <li>by accepting these terms of use and by registering onto website,you consent to be contacted by us
                and you further consent to receive emails and messages(SMS) notifications at any time
                by us and third party service providers</li>
            </ul>
        </div>
        
    </body>
</html>
<?php
        require_once('footer.php');
?>
