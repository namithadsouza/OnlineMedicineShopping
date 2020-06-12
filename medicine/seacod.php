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
                <td rowspan="2"><img src="seacod.PNG"/></td>
                <td><i><b>Medicine Name:<br><?php echo $product ?></b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br><?php echo $price ?> RS</b></i></td>
            </tr>
        </table>
    </center>
    
        <h3>Information about Seacod Capsule</h3>
        <p> The Seacod capsule contains Pure Cod Liver Oil. Pure Cod liver oil is a rich natural source of 
       
        </p>
        <h3>Key Ingredients:</h3>
        <ul>
            <li>Omega-3 that includes the nutrients EPA and DHA which are essential to good health. 
                They supports a healthy heart and helps maintain vision and brain function.</li>
            <li> Vitamin D that supports a healthy immune system and helps maintain healthy bones, muscles and teeth</li>
            <li>Vitamin E which protects against free radical and oxidative damage</li>
            
            
        </ul>
        <h3>Key Benefits:</h3>
        <ul>
            <li>The omega-3 fatty acids in cod liver oil may help suppress proteins that promote chronic inflammation. 
                Cod liver oil is also a great source of vitamins A and D, both of which have antioxidant properties.</li>
            <li>Cod liver oil is rich in vitamin D, which helps with maintaining strong and healthy bones.
                It is especially important for people who live far from the equator.</li>
            <li>Thanks to cod liver oil's ability to reduce inflammation, it may help reduce joint pain in those who suffer from rheumatoid arthritis.</li>
            
            <li>Cod liver oil is a great source of omega-3 and vitamin A, both of which may protect against vision loss from inflammatory eye diseases like glaucoma 
                and age-related macular degeneration (AMD).</li>
        </ul>
        <h3>Directions For Use</h3>
        <ul>
        <li>1 caspule of Seacod capsule can be taken by Adults and children over 12 years of age. 
            Seacod capsule is one of Nature's richest Source of Omega-3 and India's largest selling cod liver oil brand.</li>
        
        </ul>
        <h3>Safety Information:</h3>
        <ul>
            <li>Keep out of the reach and sight of children</li>
            <li>Read the label carefully before use</li>
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


