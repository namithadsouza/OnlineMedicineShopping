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
                <td rowspan="2"><img src="paracetamol.PNG"/></td>
                <td><i><b>Medicine Name:<br><?php echo $product ?></b></i></td>
            </tr>
            <tr>
                <td><i><b>cost:<br><?php echo $price ?> RS</b></i></td>
            </tr>
        </table>
    </center>
    
        <h3>Information about Moov Pain Relief Cream</h3>
        <p>Calpol 500 mg Tablet is an analgesic (pain reliever) and anti-pyretic (fever reducer). 
            It works by blocking the release of certain chemical messengers that cause pain and fever
        </p>
        <h3>Key Ingredients:</h3>
        <ul>
            <li>The starting material for the commercial manufacture of paracetamol is phenol</li>
           
       
            
        </ul>
        <h3>Key Benefits:</h3>
        <ul>
            <li>Paracetamol is used for reducing fever in people of all ages</li>
            <li>Paracetamol is used for the relief of mild to moderate pain.</li>
            <li>A joint statement of the German, Austrian, and Swiss headache societies and the German Society of Neurology recommends
              the use of paracetamol in combination with caffeine as one of several first-line therapies for treatment of tension and migraine headaches</li>
        </ul>
        <h3>Directions For Use</h3>
        <ul>
        <li>Take this medicine in the dose and duration as advised by your doctor. Swallow it as a whole. Do not chew, crush or break it.
            Calpol 500 mg Tablet is to be taken with food.</li>
        <li>Massage gently to facilitate the penetration</li>
        </ul>
        <h3>Safety Information:</h3>
        <ul>
            <li>Keep out of the reach and sight of children</li>
            <li>Read the label carefully before use</li>
            <li>Store the product away from light and moisture</li>
            <li>For external use only</li>
            <li>It is unsafe to consume alcohol with Calpol 500 mg Tablet Taking Paracetamol/Acetaminophen with alcohol can cause liver damage.</li>
            <li>Calpol 500 mg Tablet should be used with caution in patients with kidney disease. Dose adjustment of Calpol 500 mg Tablet may be needed. Please consult your doctor.</li>
            <li>Calpol 500 mg Tablet should be used with caution in patients with liver disease. Dose adjustment of Calpol 500 mg Tablet may be needed. Please consult your doctor.</li>
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


