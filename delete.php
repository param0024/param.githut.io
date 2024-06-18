<?php

include 'conn.php';
$idd = $_GET['id'];

$deletequery = "delete from contactform where id = $idd ";
$query = mysqli_query($con, $deletequery);

header('location: fetch.php');

?>

 <!-- footer -->

 <footer>
        <span><a href="https://www.facebook.com/innocent.param.9"><i class="fab fa-facebook"></i></a> Created By <a>Parampreet Singh</a> | <span class="far fa-copyright"></span> 2024 All rights received! </span>
      </footer>