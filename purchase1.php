<?php
        require_once('header.php');
?>
<?php
           session_start();
        include 'connect_db.php';
         if(isset($_POST['purchasing']))
         {
                 $product=trim($_POST['product']);
                 $product=strtolower($product);
                 $_SESSION['varname2']=$product;
                 $user_check_query = "SELECT price FROM medicine WHERE mname='$product' LIMIT 1";
                 $result1 = mysqli_query($link, $user_check_query);
                 $row1= mysqli_fetch_assoc($result1);
                 $price=$row1['price'];
                 $_SESSION['varname3']=$price;
                 $query="select page_path from pages where med_name='$product' LIMIT 1";
                 $result = mysqli_query($link, $query);
                 $row = mysqli_fetch_assoc($result);
                 $path=$row['page_path'];
                 if($row) 
                 {
                      
                     
                    header("Location:".$path);
                     
                 }
                 else
                 {
                       echo"<script>alert('OOPS......!...THIS PRODUCT IS CURRENTLY NOT AVAILABLE');
                        window.location.href='purchase1.php'
                        </script>";
                 }
         }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Medicare</title>
        <link href="css1.css" rel="stylesheet"/>
        <style>
            .search{
                margin-top: 40px;
                display:flex;
                align-items: center;
                position: relative;
                width: 50%;
            }
            .sea{
                width:100%;
                border:3px solid black;
                border-right:none;
                padding:5px;
                height:46px;
                border-radius:5px 0 0 5px;
                color:black;
                
            }
            .sea:focus{
                color:#00b4cc;
            }
            .ser_button{
                width:40px;
                border:3px solid black;
                background-color:lightblue;
                text-align:center;
                color:#fff;
                border-radius:0 5px 5px 0;
                font-size:20px;
            }
            .container{
                padding: 10px 30px 10px 30px;
                background-color: #80cbc4;
                color: black;
                margin: 70px 100px 37px 100px;
               
                
                
            }
            .fa {
                display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: inherit;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                transform: translate(0, 0);
                }
            .fa-search:before{
                content:"\f002"
                }
</style>
    </head>
    <body>
    <center>
        <hr width="25%" align="center">
        <h1>MediCare<br>
            A <br>
            Pharmacy<br>
            for all <br>
            your needs</h1>
        <hr width="25%" align="center">
       
        <form method="post">
        <div>
            <div class="search">
                
                <input type="text" class="sea" name="product" placeholder="Search for Medicines here...">
                <button name="purchasing" type="submit" class="ser_button"><i class="fa fa-search"></i></button> 
                
        </div>
        </div>
        </form>
     
    <div class="container">
    <h1>Now you can order medicines and get the best price</h1>
    <h2>To get the right care,you need quality pharmacy. Now you have one.</h2>
    </div>
        </center>
    </body>
</html>
<?php
        require_once('footer.php');
?>

