<?php
        require_once('header.php');
        
?>
<?php
include('../connect_db.php');
session_start();
$uname=$_SESSION['varname'];
$product=$_SESSION['varname2'];
$price=$_SESSION['varname3'];
if(isset($_POST['cart']))
  {
    
    $q="insert into cart(uname,mname,price) values('$uname','$product','$price')";
     mysqli_query($link,$q) or die("Error inserting data.".mysqli_error($link));
     echo "<script>alert('adding to cart');
       window.location.href='../purchase1.php';
       </script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>

    </head>
    <style>
        img{
            width: 250px;
            height: 300px;
        }
        table,td,tr{
            border:2pt black solid;
            border-collapse: collapse;
            width:40%;
            padding-left: 20px;
        }
        table{
            margin-top: 10px;
        }
        p,ul,h3{
            margin: 10px 50px 10px 50px;
            
        }
        p,ul{
            font-style: italic;
        }
        
    </style>
    <body style="background-color: pink">
    <center>
        <table style="background-color: white">
            <tr>
                <td rowspan="2"><img src="vix.PNG"/></td>
                <td><i><b>Medicine Name:<br>Vicks</b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br>70 RS</b></i></td>
            </tr>
        </table>
    </center>
        
    <h3>Information about Vicks Vaporub</h3>
        <p>Polycrol is an effective formulation that works primarily as an antacid to provide relief from antacid in 10 seconds.
            Offering optimum respite to the patient suffering with gastro-esophageal reflux disorders to reduce symptoms of heart burn,
            this formulation relieves symptoms related to stomach and duodenal ulcers.</p>
        <h3>Key Ingredients:</h3>
        <ul>
            <li> Pudinah ke phool</li>
            <li> Karpoor,</li>
            <li> Ajowan ke phool</li>
            <li> Tarpin ka tel</li>
            <li>Nilgiri tel</li>
            <li>Jatiphal tel. </li>
            <li>
        </ul>
        <h3>Key Benefits:</h3>
        <ul>
            <li>Provides effective multi-symptom relief from cold symptoms. </li>
            <li>When applied on chest and throat, relieves cough and cold due to minor throat infection associated with the common cold. </li>
         
        </ul>
        <h3>Dosage:</h3>
        <p> For adults and children 2 years and over: Rub a thick layer on throat and chest.</p>
        <p>Cover with a warm, dry cloth if desired.</p>
        <p>keep clothing loose about throat and chest to help vapors reach the nose and mouth. Use up to three times daily or as directed by the physician</p>
        <h3>Safety Information:</h3>
        <ul>
           
            <li>Keep out of the reach of children</li>
            <li>Store the product away from light and moisture</li>
            <li>For external use only</li>
        </ul>
        <center>
        <form method="post" style="margin-bottom:10px;">
            <button  type="submit" name="cart" class="register_btn">ADD TO CART</button>
        </form>
        </center>
    </body>
</html>
<?php
        require_once('header.php');
?>