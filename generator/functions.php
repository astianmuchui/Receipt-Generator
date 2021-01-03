<?php
  //These are just meant to draft code
    function ValidateInsertion($name,$cost,$quantity){
       if(empty($name) || empty($cost) || empty($quantity)){
            echo '<small class="text-danger">Please fill in all fields</small>';
        }else{
            //
        }
        if(strlen($name) > 20){
            echo '<small class="text-danger">Values cannot exceed 20 characters</small>';
        }else{
            return false;
        } 
    }

    $body = '
     <div class="container">
    <table >
        <tr>
          <th>Username</th>
          <th>Email Adress </th>
          <th>Time Added</th>
        </tr>
          <tr>
      
          <td>Sebastian muchui</td>
          <td>Sebastianmuchui79@gmail.com</td>
          <td>2020-12-31 12:35:48.917283</td>
            <tr>
            <a href="#" id="print">Print</a>
   </div>';
    function GenerateReceipt($name,$cost,$quantity){
           $createFile = fopen("../generated/index.html","w");
         
           if($createFile){
               $file = fopen("../generated/index.html","r");

                fwrite($file, $body);
                fclose($file);
                header("location: $file");
            }else{
                echo '<small class="text-danger">There was an error</small>';
            }

    }
?>
