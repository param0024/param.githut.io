<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="portfoliostyle.css">
    <!-- jqury cdn -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
          <!-- animate.css cdn link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  
</head>
<body>
</body>

           <nav class="navbar">

                 <div class="max-width">
                    <div class="logo"><a href="#">Portfo<span>lio</span></a></div>
                    <ul class="menu">
                      <div class="icon cross-bars">
                       <i class="fas fa-times"></i>
                    </div>
                      <li><a href="#home">Home</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#skills">Skills</a></li>
                      <li><a href="#contact">Contact</a></li>
                      
                    </ul>
                    <div class="icon menu-bars">
                       <i class="fas fa-bars"></i>
                    </div>
                 </div>
           </nav>
         <!-- home secetion start -->
           <section class="home" id="home">
                <div class="home-content">
                    <div class="text-1">Hello, my name is</div>
                    <div class="text-2">Parampreet singh</div>
                    <div class="text-3">And I'm a <span class="typing">Web Developer</span></div>
                    <button class="btn1">Hire me</button>
                </div>
                <a class="upbtn" href="#">
                  <i class="fas fa-angle-double-up"></i>
                </a>
                    
           </section>
       

            <!--  about section -->
          
            <section class="about" id="about">
                <div class="about-title">
                    <h2 class="title">About me</h2>
                </div>
                <div class="about-content">
                        <div class="column left">
                          <img src="images/profile-2.jpeg">
                        </div>
                        <div class="column right">
                          <div class="text">I'm Param and a <span class="typing-2">Web developer</span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
                    <a href="#" class="cvbtn">Download CV</a>
                        </div>
                    </div>
                    </div>
           </section>

           <!-- my skills -->
           <section class="skill-background">
             <div class="skills" id="skills">
              <div class="skills-title">
               <h2 class="title-2">My skills</h2> 
             </div> 
             <div class="row-1">
              <div class="skill-col">
               <h2>HTML 5</h2> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque</p>
                </div>
                 <div class="skill-col"> 
                  <h2>CSS 3</h2> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quasi ut voluptatum eveniet doloremque autem excepturi eaque</p>
                   </div>
                    <div class="skill-col">
                     <h2>Javascript</h2> 
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque</p> 
                   </div>
                   <div class="skill-col">
               <h2>Bootstrap</h2> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque</p>
                </div>
                 <div class="skill-col"> 
                  <h2>jquery</h2> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quasi ut voluptatum eveniet doloremque autem excepturi eaque</p>
                   </div>
                    <div class="skill-col">
                     <h2>PHP</h2>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque</p> 
                   </div>
                   <div class="skill-col">
                     <h2>Mysql</h2>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque</p> 
                   </div>
                   </div>
               </div>
           </section>
           
           <!-- contact section start -->

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
                            <div class="field name">
                                <input type="text" class="fullname"placeholder="Name" name="name" required="">
                            </div>

                            <div class="field email">
                                <input type="text" class="email-input" placeholder="Email" name="email" required="">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" class="subject" placeholder="Subject" name="subject" required="">
                        </div>
                        <div class="field textarea">
                            <textarea class="message" cols="30" rows="10" placeholder="Message.." name="message"></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="submit">Send message</button>
                            <button class="contact-list" type="button" onclick="window.location.href='fetch.php';">Contact List</button>
                        </div>
                        
                    </form>
                </div>
        </div>
    </section>
      <!-- footer -->

      <footer>
        <span><a href="https://www.facebook.com/innocent.param.9"><i class="fab fa-facebook"></i></a> Created By <a>Parampreet Singh</a> | <span class="far fa-copyright"></span> 2024 All rights received! </span>
      </footer>
      <script type="text/javascript" src="vanilla-tilt.js"></script>
      <script>
        VanillaTilt.init(document.querySelectorAll(".skill-col"),{
    max: 25,
    speed: 400,
    glare: true,
  });
        VanillaTilt.init(document.querySelector(".btn1"),{
    max: 25,
    speed: 400,
    glare: true,
  });

      </script>
      <script src="protfolio.js"></script>
</body>
</html>
<?php
     

     if(isset($_POST['submit'])){
        include 'conn.php';
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $subject = mysqli_real_escape_string($con,$_POST['subject']);
        $message = mysqli_real_escape_string($con,$_POST['message']);

        $insertquery = "insert into contactform(name, email, subject, message)
        values('$name',' $email','$subject',' $message')";
       $reflect = mysqli_query($con, $insertquery);

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