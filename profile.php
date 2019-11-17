<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maria</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
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
         <a class="navbar-brand" href="#">
             <?php include "includes/function.php"?>
             <?php profile();
             ?>
         </a>
         <!--Mobile Toggle-->
         <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#header-01" aria-controls="header-01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <!--Mobile togge end-->
        </button>
        <div id="header-01" class="navbar-collapse collapse top-menu">
             <!--menu start-->
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="signout.php">Sign Out</a></li>
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

                        <div class="tbl" style="padding-top:100px;">
                <div class="table-responsive-sm" style="background-color:white;">
               <table class="table table-border table-striped">
           <?php include "includes/function1.php"?>
             <?php
          showRows();
           ?>
           </table>
          </div>
                </div>
                    </div>
        
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
<script src="//code.tidio.co/61bjp1z0vik8z1zrvn18nd1vvgddhoy3.js"></script>
</body>
</html>

    