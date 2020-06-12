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
                <td rowspan="2"><img src="crocin.PNG"/></td>
                <td><i><b>Medicine Name:<br><?php echo $product ?></b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br></b></i><?php echo $price ?> </td>
            </tr>
        </table>
    </center>
        
    <h3>Information about Crocin Advance Tablet</h3>
        <p>Crocin Advance Strips provides fast and effective relief from pain. It is India’s first paracetamol 
            tablet with optizorb technology. It is known suitable for people with heart conditions , high blood pressure
            and sensitive stomach.</p>

        <h3>Key Ingredients:</h3>
        <ul>
            <li>Paracetamol</li>
        </ul>    
        <h3>Key Benefits:</h3>
        <ul>
            <li>It gets absorbed 25% faster than standard paracetamol</li>
            <li>Used to relieve backache, headache and toothache</li>
            <li>Reduces the pain caused due to the fever</li>
            <li>Relieves mild pain in the muscles</li>
            <li>Treats the pain that is set after vaccination that sometimes leads to fever</li>
        </ul>
        <h3>Dosage:</h3>
        <p>Adults:As prescribed by the physician</p>
        <p>Kids: As prescribed by the physician</p>
        <h3>Safety Information:</h3>
        <ul>
            <li>Read the label carefully before use</li>
            <li>Keep out of the reach of children</li>
            <li>Store the product away from light and moisture</li>
            <li>Seek medical advice if the patient is suffering from liver or kidney problems</li>
            <li>Do not exceed the recommended dosage</li>
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

