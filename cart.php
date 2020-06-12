<?php
        require_once('header.php');    
        
?>            
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>
        <style type="text/css">
            .w{
                background-color:#f48fb1;
            display: inline-block;
            padding: 20px 20px 20px 20px;
            margin-top: 10px;
            border:solid black 1pt;
            margin-left:20px;
            
}
img{
    border:solid black 1pt;
   
}
    input,textarea
                   {
                       width:70%;
                       padding:10px;
                       background-color: red;
                       background: #f1f1f1;
                   }
.footer1{
    margin-top: 40px;
}.head{
    align-items: center;
}
	</style>
</head>
<body style="background-color:wheat">
	<div class="head">
            <h2 style="text-align:center">CART ITEMS</h2>
	</div>
    <hr>

		
	<?php
                session_start();
                $uname=$_SESSION['varname'];
                include'connect_db.php';
		$result1=mysqli_query($link,"SELECT mname from cart where uname='$uname'") or die(mysqli_errno());
                
                
             while($row1= mysqli_fetch_array($result1)) 
            {
                $name=$row1['mname'];
                $result2=mysqli_query($link,"SELECT * from medicine where mname='$name'") or die(mysqli_errno());
                while($row2 = mysqli_fetch_array($result2)) 
                {
                    $image=$row2['mimage'];
                    $price=$row2['price'];

                ?>
	<div class="w">
                
            <img src="<?php echo $image; ?>" height="200px" width="200px"><br>
            <center>
               
              <p> product: <?php echo $name?></p>
              <p> price: <?php echo $price?>RS</p>
  
               
               <form method="post">
                        <input type="number" name="quantity[]" placeholder="ENTER QUANTITY" min="1" max="5"/></center>
            
        </div>
    
        <?php   
        }
 
        }
                
        ?>
    
                
<center><br><br> <button type="submit" name="purchase">PURCHASE</button></center>
        </form>
   
    <?php
    $tc=0;
    
    if(isset($_POST['purchase']))
    {
        $qty=$_POST['quantity'];
        $i=0;
        
        $result3=mysqli_query($link,"SELECT price from cart where uname='$uname'") or die(mysqli_errno());
        while($row3= mysqli_fetch_array($result3)) 
        {
            $p=$row3['price'];
            $q=$qty[$i];
            $tc=$tc+($p*$q);
            $i++;
            
        } 
        
        $_SESSION['varname4']=$tc;
        mysqli_query($link,"delete from cart where uname='$uname'") or die(mysqli_errno());
         echo "<script>
       window.location.href='thank_you.php';
       </script>";
    }
        
    ?>
   

    <script>
    var ids = document.getElementById("demo");
    </script>
<center>
                
                 
</center>
               
</div>
</body>
</html>
<?php
        require_once('footer.php');
?>