<?php
   require ('./generator/functions.php');
    require ('./database/fetch_database.php');
    if(isset($_POST['submit'])){
        echo 'submitted';
        $name = $_POST['stock-name'];
        $cost = $_POST['stock-price'];
        $quantity = $_POST['quantity'];
        $time = date("y-m-t");
        if(empty($name) || empty($cost) || empty($quantity)){
            echo '<small class="text-danger">Please fill in all fields</small>';
        }else{
            //
        }
        if(strlen($name) > 20){
            echo '<small class="text-danger">Values cannot exceed 20 characters</small>';
        }else{
            //
        } 
        $i=0;
        $i++;
        $createFile = fopen("./generated/index$i.html","w");
         
    $body = '
    <link rel="stylesheet" href="../css/style.css">
    <div class="container">
   <table >
       <tr>
         <th>Product Name</th>
         <th>Cost in kshs</th>
         <th>Quantity</th>
         <th>Time Created</th>
       </tr>
         <tr>
     
         <td>'.$name.' </td>
         <td>'.$cost.'</td>
         <td>'.$quantity.'</td>
         <td>'.$time.'</td>
           <tr>
  </div>
  <script>
      window.print();   
  </script>
  ';
        if($createFile){
            
             fwrite($createFile, $body);
             fclose($createFile);
             header("location: generated/index$i.html");
         }else{
             echo '<small class="text-danger">There was an error</small>';
         }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
    <title>Receipt Generator</title>
</head>
<body>

    <center><h1 class="text-dark">Welcome, Generate Receipt</h1></center>
    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="stock-name">Product Name</label>
        <input type="text" name="stock-name" class="form-control"> <br> <br>
        <label for="stock-price">Price </label>
        <input type="text" name="stock-price" class="form-control"> <br> <br>
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" class="form-control"> <br> <br>
        <input type="submit" value="generate receipt" class="btn btn-dark" name="submit">
    </form>    
    </div>
    </body>
</html>