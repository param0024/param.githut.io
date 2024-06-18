<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portfoliostyle.css">
    <!-- jqury cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
          <!-- animate.css cdn link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <title>Update</title>
</head>
<body>
<section class="contact" id="contact">
        <div class="contact-title" >
            <h2 class="title">Contact me</h2>
          </div>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Parampreet singh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Fatehgarh churian</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">parampreetsingh799@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form class="contact-form" action="" method="POST">
                        <div class="fields">

            <?php
                       include 'conn.php';
                    //    youtube.com/watch?v=R7NZc0pAJMg
                            //   page/variablename?value
                            $ids = $_GET['id'];
                    $updateselect = " select * from contactform where id = $ids";
                    $updateshow = mysqli_query($con, $updateselect);
                    // select kare call krte ho toh array form mai aata hota hai..
                    // array form ko dikhane ke liye we will use 
                    $datafetch = mysqli_fetch_array($updateshow);

                  if(isset($_POST['submit'])){
                    $idupdate = $_GET['id'];
                  $name = mysqli_real_escape_string($con,$_POST['name']);
                  $email = mysqli_real_escape_string($con,$_POST['email']);
                  $subject = mysqli_real_escape_string($con,$_POST['subject']);
                  $message = mysqli_real_escape_string($con,$_POST['message']);

                //   $insertquery = "insert into contactform(name, email, subject, message)
                //   values('$name',' $email','$subject',' $message')";
   
                  $updatequery = "update contactform set id=$idupdate, name='$name', email='$email', subject='$subject', message='$message' where id=$idupdate";
                  $reflect = mysqli_query($con, $updatequery);
              if($reflect){
                ?>
               <script>
               alert ('Data inserted properly');
              </script>
              <?php
            }else{
            ?>
              <script>
              alert ('Data not inserted');
              </script>
            <?php
             }
             }
                   ?>
                 <div class="field name">
               <input type="text" class="fullname"placeholder="Name" name="name" value="<?php echo $datafetch['name'];?>"required="">
              </div>
              <div class="field email">
              <input type="text" class="email-input" placeholder="Email" name="email"    value="<?php echo $datafetch['email'];?>"required="">
               </div>
               </div>
              <div class="field">
              <input type="text" class="subject" placeholder="Subject" name="subject" value="<?php echo $datafetch['subject'];?>"required="">
               </div>
               <div class="field textarea">
               <textarea class="message" cols="30" rows="10" placeholder="Message.."     value="<?php echo $datafetch['name'];?>"name="message"></textarea>
               </div>
                <div class="button-area">
                  <button class="send-msg" type="submit" name="submit">Update</button>
                  <button class="contact-list" type="button" onclick="window.location.href='index.php';">Home</button>
                 </div>
                        
                 </form>
                </div>
        </div>
    </section>
     <!-- footer -->

     <footer>
        <span><a href="https://www.facebook.com/innocent.param.9"><i class="fab fa-facebook"></i></a> Created By <a>Parampreet Singh</a> | <span class="far fa-copyright"></span> 2024 All rights received! </span>
      </footer>
</body>

</html>