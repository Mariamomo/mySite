<?php include "includes/db.php"?>
<?php include "includes/function.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maria</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addnewdata.css">
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
            <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#skill">Skill</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#eduaction">Education</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#career">Career</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact Me</a></li>
        </ul>
        </div>
     </nav>  
  </div>  
</header>
<main>
 <section id="home">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3" style="padding:10px;">
                <div class="form-wrap">
                   <form action="insert.php" method="post">
                      <div class="form-group">
                        <label>FIRST NAME</label>
                        <input class="form-control" type="text" placeholder="First Name" name="firstName">
                      </div>
                      <div class="form-group">
                        <label>LAST NAME</label>
                        <input class="form-control" type="text" placeholder="Last Name" name="lastName">
                      </div>
                      <div class="form-group">
                        <label>AGE</label>
                        <input class="form-control" placeholder="Age" name="age">
                      </div>
                      <div class="form-group">
                        <label>Country</label>
                        <?php include "includes/country.php" ?>
                      </div>
                      <div  style="text-align:center;">
                          <button type="submit" class="btn btn-success">AddWithMe</button>
                      </div>
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
      
</main> 
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