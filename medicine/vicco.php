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
                <td rowspan="2"><img src="vicco.PNG"/></td>
                <td><i><b>Medicine Name:<br><?php echo $product ?></b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br><p><?php echo $price ?>RS</b></i></td>
            </tr>
        </table>
    </center>
        
    <h3>Information about Vicco Turmeric Skin Cream</h3>
        <p>Vicco Turmeric Cream is an ayurvedic cream and it contains a blend of Turmeric and Sandalwood Oil
            as major ingredients.The cream protects the skin from harmful radiations and gives natural radiance</p>
        <h3>Key Ingredients:</h3>
        <ul>
            <li>Turmeric oil</li>
            <li>Sandalwood Oil</li>
            
        </ul>
        <h3>Key Benefits:</h3>
        <ul>
            <li> Turmeric has antiseptic, anti-acne and grooming properties</li>
            <li>Protects the skin from harmful radiations</li>
            <li> Vicco Turmeric Cream rejuvenates and revitalizes the skin and give it a natural radiance</li>
            <li>Maintains the original pigmentation of the skin</li>
            <li> Fights against blemishes, acne and other skin disorders</li>
        </ul>
        <h3>Dosage:</h3>
        
        <p>As per the requirement or as directed by the physician.</p>
        <h3>Safety Information:</h3>
        <ul>
            <li> Store in a cool, dry and dark place</li>
            <li> Protect from direct sunlight</li>
            <li>For external use only</li>
            <li> Keep out of the reach and sight of children</li>
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

