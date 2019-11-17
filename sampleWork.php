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

<!--header end-->

<!--main start--> 
<main>
    <section id="home">
          <div class="container">
              <div class="row">
                <div class="col-md-4" style="margin-bottom:10px;">
                  <div class="card shadow" style="width: 18rem; background-color:#04df8f;">
                      <div class="card-body">
                        <h5 class="card-title">Data show</h5>
                        <p class="card-text">Data show in a table from mysql database tabel and you can insert new data.</p>
                        <p class="card-text">Php and mysql</p>
                        <a href="read.php" class="btn btn-primary">Show Table</a>
                      </div>
                      </div>
                    </div>
                      <div class="col-md-4" style="margin-bottom:10px;">
                              <div class="card shadow" style="width: 18rem; background-color:#edfd80;">
                                  <div class="card-body">
                                    <h5 class="card-title">Sign Up or Sign In</h5>
                                    <p class="card-text">you can register and then can see your profile. And also here you can edit and delete your profile</p>
                                    <p>HTML CSS PHP AND mysql</p>
                                    <a href="SignUp.php" class="btn btn-primary">Sign Up</a>
                                     <button class="btn btn-primary" data-target ="#mymodel" data-toggle="modal">Sign In</button>
                                  </div>
                                  </div>
                     </div>
                     <div class="col-md-4" style="margin-bottom:10px;">
                              <div class="card shadow" style="width: 18rem;">
                                  <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                  </div>
                                  </div>
                     </div>
              </div>
          </div>  

        <div class="row">
           <div class="modal " id="mymodel">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                   <h3 class="text-center text-success">
                                                   Sign In</h3>
                                                   <button type="button" class="close" data-dismiss="modal"> &times; </button>
                                                </div>
                                                <div class="modal-body center">
                                                   <form action="profile.php" method="post" class="form-group mt-0">
                                                          <label><i class="fa fa-user"></i> Username: </label>
                                                          <input type="text" id="username" name="username" class="form-control">
                                                          <label><i class="fa fa-user"></i> Password: </label>
                                                          <input type="password" id="password" name="password" class="form-control">
                                                          <br>
                                                         <input class="btn btn-success" type="submit" id="btn" name="submit" value="submit" >
                                                   </form>

                                                </div>
                                            </div>
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

    