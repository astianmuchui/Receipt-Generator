
<?php
DEFINE ("DBNAME","receipt");
DEFINE ("DBHOST","localhost");
DEFINE ("DBUSER","root");
DEFINE ("DBPASSWORD","");


$connection = mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);
if($connection){
    // echo "Sucessful connection <br>";
}else{
    echo "connection failed <br>";
}
//Fetch data

    $query = "SELECT * FROM receipt";
    $result = mysqli_query($connection,$query);
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);  
?>