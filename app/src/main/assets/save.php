
 <?php
     $conn = mysqli_connect("localhost","root","","android");
     if (isset($_POST["amount"])){
         extract($_POST);
         $sql ="insert into borrowers values (null ,'$name',$amount)";
         mysqli_query($conn,$sql);
         echo "saved";

     }else{
         echo "Failed";
     }