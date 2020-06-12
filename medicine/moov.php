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
                <td rowspan="2"><img src="mooov.PNG"/></td>
                <td><i><b>Medicine Name:<br><?php echo $product ?></b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br><?php echo $price ?>  RS</b></i></td>
            </tr>
        </table>
    </center>
    
        <h3>Information about Moov Pain Relief Cream</h3>
        <p>Moov Cream helps in relieving the pain and relaxes the muscles and help to recover fast.
            These ingredients penetrate deep inside to produce the warmth and are known for their pain relieving properties. 
            An analgesic (or pain relieving) ointment made using 100% ayurvedic ingredients helps in relaxing muscle stiffness and
            relieving pain effectively. It gives a fast and long-lasting relief from muscle pain, neck, and backache and inflammation.
        </p>
        <h3>Key Ingredients:</h3>
        <ul>
            <li>Turpentine Oil</li>
            <li>Nilgiri Oil</li>
            <li>Wintergreen Oil</li>
            <li>Mint Extract</li>
            
        </ul>
        <h3>Key Benefits:</h3>
        <ul>
            <li>Reduces irritation and swelling around the affected area</li>
            <li>The mint leaves gives a cooling effect to the pain and treats the sore muscles and relieves joint aches</li>
            <li>Turpentine oil helps to relieve pain from underneath the tissue and relaxes the muscles</li>
            <li>Eucalyptus Oil in the moove cream provides a soothing warmth and makes it an excellent massage cream for joint pain</li>
            <li>Moov pain relief cream has a unique fast absorption formula that allows it work quickly and get rid of pain</li>
        </ul>
        <h3>Directions For Use</h3>
        <ul>
        <li>Spread two pulp full of Moov Cream on the affected area to form a thin film</li>
        <li>Massage gently to facilitate the penetration</li>
        </ul>
        <h3>Safety Information:</h3>
        <ul>
            <li>Keep out of the reach and sight of children</li>
            <li>Read the label carefully before use</li>
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
        require_once('footer.php');
?>
