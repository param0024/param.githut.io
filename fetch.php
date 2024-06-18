<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="portfoliostyle.css">

    <title>Fetch Data</title>
    <style>
          .container{
              overflow-x: scroll;
          }
          .button-area button{
            color: #fff;
            width: 160px!important;
            height: 45px;
            outline: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 6px;
            cursor: pointer;
            background: crimson;
            border: 2px solid crimson;
            transition: all 0.3s ease;
          }
          .button-area button:hover{
           color: crimson;
           background: none;
}
    </style>
  </head>
  <body>

           <div class="container">
        <h2 class="text-center mt-4 mb-4">Contact list</h2>
        <table class="table table-striped  table responsive">
               <thead>
               <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th colspan="2">Operation</th>
                      </tr>
               </thead>
               <tbody>
               <?php
   
                     include 'conn.php';
                    
                     //    youtube.com/watch?v=R7NZc0pAJMg
                            //   page?variablename=value
                     $selectquery = "select * from contactform";
                     $reflect = mysqli_query($con, $selectquery);
                     $count = mysqli_num_rows($reflect);
                     $fetch = mysqli_fetch_array($reflect);

                     while($fetch = mysqli_fetch_array($reflect)){
   ?>
                     <tr>
                     <td><?php echo $fetch['id']?></td>
                     <td><?php echo $fetch['name']?></td>
                     <td><?php echo $fetch['email']?></td>
                     <td><?php echo $fetch['subject']?></td>
                     <td><?php echo $fetch['message']?></td>
                     <td><a href="update.php?id=<?php echo $fetch['id']?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                     <td><a href="delete.php?id=<?php echo $fetch['id']?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    
                  </tr>
                  <?php
}
?>
        
        </table>
        <div class="button-area">
  <button class="contact-list" type="button" onclick="window.location.href='index.php';">Home</button>
                        </div>
           </div>
           
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <!-- footer -->

 <footer>
        <span><a href="https://www.facebook.com/innocent.param.9"><i class="fab fa-facebook"></i></a> Created By <a>Parampreet Singh</a> | <span class="far fa-copyright"></span> 2024 All rights received! </span>
      </footer>
  </body>
</html>