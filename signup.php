<?php include "includes/db.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maria</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--jquery-->
  <script
  src="http://code.jquery.com/jquery-3.3.1.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--afontawasome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<!--Body Start-->
<body class="fixed-header-body">
<!--header start-->
<header class="header header-style-3 navbar-light">
  <div class="container">
     <!--nav-->
    <nav class="navbar navbar-expand-lg" id="mainNav">
         <a class="navbar-brand" href="#">Maria</a>
         <!--Mobile Toggle-->
         <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#header-01" aria-controls="header-01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <!--Mobile togge end-->
        </button>
        <div id="header-01" class="navbar-collapse collapse top-menu">
             <!--menu start-->
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="sampleWork.php">Sample Work</a></li>
            
        </ul>
        </div>
     </nav>  
  </div>  
</header>

<!--header end-->
<!--main start--> 
<main>
<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3" style="padding:10px;">
                <div class="form-wrap">
                   <form action="user.php" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <label>NAME</label>
                        <input class="form-control" type="text" placeholder="Name" name="Name">
                      </div>
                      <div class="form-group">
                        <label>UserName</label>
                        <input class="form-control" type="text" placeholder="Last Name" name="username">
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input class="form-control" type="text" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label>AGE</label>
                        <input class="form-control" placeholder="Age" name="age">
                      </div>
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control" type="text" placeholder="Phone Number" name="phonenumber">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                        <label>Add Image</label>
                        <input class="form-control" type="file" placeholder="image" name="image">
                      </div>
                      <div  style="text-align:center;">
                          <button type="submit" name="submit" class="btn btn-success" data-target ="#mymodel" data-toggle="modal">Join</button>
                      </div>
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
    
</section>
</main>   
<!--main end-->
<!--footer start-->
<!--footer end-->
    <script type="text/javascript">    
   $(window).on('scroll', function()
        {
       if($(window).scrollTop()){
           $('header').addClass('fixed-header');
       }
       else{
    $('header').removeClass('fixed-header');
       }
   })
    $(document).ready(function(){
        $('ul li a').click(function(){
            $('li a').removeClass("current");
            $(this).addClass("current");
        })
    })
    </script>    
</body>
</html>

    