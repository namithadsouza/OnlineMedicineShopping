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
            width: 500px;
            height: 200px;
        }
        table,td,tr{
            border:2pt black solid;
            border-collapse: collapse;
            width:50%;
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
                <td rowspan="2"><img src="boost.PNG"/></td>
                <td><i><b>Medicine Name:<br><?php echo $product ?></b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br><?php echo $price ?>RS</b></i></td>
            </tr>
        </table>
    </center>
    
        <h3>Information about Boost Powder Refill Pack</h3>
        <p>Boost Powder contains Malted barley (extracted solids) 69%, Wheat flour, Milk solids (6%), Minerals, Wheat gluten, Glucose, Cocoa powder, Vitamins, and Soy protein isolate (28%) as active ingredients.
            Boost is malt-based health food drink and nutritionally balanced with 26 vitamins and minerals for high protein and energy</p>
        <h3>Key Ingredients:</h3>
        <ul>
            <li>Malted barley</li>
            <li>Wheat flour</li>
            <li>Milk solids </li>
            <li>Minerals</li>
            
        </ul>
        <h3>Key Benefits:</h3>
        <ul>
            <li>Fuelled with Vitamin B12, B2 and B6 for optimal utilization of oxygen in the body.</li>
            <li>Provide Calcium and Vitamin D for maintaining optimum bone health and strength.</li>
            <li>Helps in increasing stamina. </li>
            <li>Contain muscle-supporting protein-rich ingredients to help you train longer and harder. Scientifically proven boost increase stamina by 3 times.</li>
           
        </ul>
        <h3>Directions For Use</h3>
        <ul>
        <li>As per the requirement or as directed by the healthcare professional.</li>
        
        </ul>
        <h3>Safety Information:</h3>
        <ul>
            <li>Keep out of the reach and sight of children</li>
            <li>Do not exceed the recommended.Read the label carefully before use</li>
            <li>Store the product away from light and moisture</li>
            
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


