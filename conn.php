<?php
  
  $username="root";
  $password="";
  $server='localhost';
  $db='portdb';

  $con = mysqli_connect($server, $username, $password, $db);
  if($con){
      ?>
    <script>
       alert ("connection successfully");
    </script>
      <?php
  }else{
    ?>
    <script>
    alert ("No connectin");
    </script>
      <?php
  }

?>