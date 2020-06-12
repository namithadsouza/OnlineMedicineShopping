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
            font-size: 18px;
        }
        
    </style>
    <body style="background-color: pink">
    <center>
        <table style="background-color: white">
            <tr>
                <td rowspan="2"><img src="polycrol.PNG"/></td>
                <td><i><b>Medicine Name:<br><?php echo $product ?></b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br><p><?php echo $price ?>RS</b></i></td>
            </tr>
        </table>
    </center>
        
    <h3>Information about Polycrol Antacid Gel Mint Xpress Relief</h3>
        <p>Polycrol is an effective formulation that works primarily as an antacid to provide relief from antacid in 10 seconds.
            Offering optimum respite to the patient suffering with gastro-esophageal reflux disorders to reduce symptoms of heart burn,
            this formulation relieves symptoms related to stomach and duodenal ulcers.</p>
        <h3>Key Ingredients:</h3>
        <ul>
            <li>Magnesium hydroxide</li>
            <li>Aluminium hydroxide gel,</li>
            <li>Activated dimethicone I.P</li>
            <li>Sorbitol</li>
            <li>Mint flavour</li>
        </ul>
        <h3>Key Benefits:</h3>
        <ul>
            <li>Forms magnesium chloride, salt and water</li>
            <li>Increases the pH in the stomach</li>
            <li>Prevents entrapment of gas in mucus</li>
            <li>Acts as a laxative to soften the stool an ease the excretion</li>
            <li>Provides relief from acidity in 10 seconds</li>
        </ul>
        <h3>Dosage:</h3>
        <p>Adults: 2 teaspoons (10 ml) to be taken after meals and at the bed time or as prescribed by the physician</p>
        <p>Kids: As prescribed by the physician</p>
        <h3>Safety Information:</h3>
        <ul>
            <li>Read the label carefully before use</li>
            <li>Keep out of the reach of children</li>
            <li>Store the product away from light and moisture</li>
            <li>Do not put it in the refrigerator</li>
        </ul>
        <center>
        <form method="post" style="margin-bottom:10px;">
            <button  type="submit" name="cart" class="register_btn">ADD TO CART</button>
        </form>
        </center>
    </body>
</html>
<?php
        require_once('footer.php');
?>