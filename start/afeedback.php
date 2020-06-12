<?php
        include('../connect_db.php');
        session_start();
        $result=mysqli_query($link,"SELECT * from feedback")
        
      
?>

<html>
    <head>
        <link href="css1.css" rel="stylesheet"/>
    </head>
    <style>
        td,tr,table{
            border: solid 2px blue;
            border-collapse: collapse;
            padding: 10px 10px 10px 10px;
           text-align: center;
           background-color: #ff5c5c;
           font-size: 19px;
                
        }
        table{
            width: 90%;
            margin: 30px 5px 425px 50px;
            
        }
        th{
            border: solid 3px blue;
            border-collapse: collapse;
            padding: 15px 15px 15px 15px;
           text-align: center;
           font-size: 20px;
           background-color:#e60026;
                
        }
         body{
            background-color: white;
        }
        .div2{
                 border-bottom: solid 2pt blue;
                 text-align: center;
                padding:2px 20px 2px 20px;
            }
            img{
                       
            
                position:absolute;
                top:350px;
                left:500px;
                width: 400px;
                height: 300px;
            
        }
    </style>
    <body>
            <div class="header1">
            <a href="med.php">INSERT MEDICINE &nbsp;</a>
                <a href="pha.php">INSERT PHARMACY &nbsp;</a>
                 <a href="umed.php">UPDATE MEDICINE &nbsp;</a>
                  <a href="out.php">LOGOUT&nbsp;</a>
                
        </div>
        <img src="../images/feedback.PNG">
        
        <div style="padding-top:23px ">
            <table>
                <tr>
                    <th>CUSTOMER NAME</th>
                    <th>CONTACT NUMBER</th>
                    <th>E-MAIL</th>
                    <th>CITY</th>
                    <th>FEEDBACK MESSAGE</th>
                </tr>
            
	<?php
	while($row = mysqli_fetch_array($result)) 
	{
	$name=$row['uname'];
	$phno=$row['phno'];
	$mail=$row['email'];
        $city=$row['city'];
        $message=$row['message'];
        
	?>
	
            <tr>
                <td><?php echo $name?></td>
                <td><?php echo $phno?></td>
                <td><?php echo $mail?></td>
                <td><?php echo $city?></td>
                <td><?php echo $message?></td>
        </tr>
	
            <?php
        }
            ?>
</table>
        </body>
        </html>
