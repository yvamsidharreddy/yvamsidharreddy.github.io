<?php
if(isset($_POST['submit']))
{
//echo "clicked";
  $Firstname = $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
 $Email = $_POST['Email'];
  $Subject = $_POST['Subject'];
  $Comment = $_POST['Comment'];
  $to = 'vamsidharreddy1713@gmail.com';
  $header = "from: $Firstname \n\n $Lastname<$Email>";
  $Message = "Firstname: $Firstname \n\n Lastname: $Lastname \n\n Email:$Email \n\n Subject:$Subject \n\n Comment:$Comment";
  if(mail($to,$Subject,$Message,$header))
  {
  echo "mail sent successfully";
  }
  else
  {
  echo "Try again****";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact page</title>

    <meta name="keywords" content="">

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800" rel="stylesheet" type="text/css">

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

   

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link rel="icon" type="img/gif/png" href="img/logo.png">
</head>

<body>
    <div id="all">

        <header>
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or registroin.com</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                 <a href="https://www.facebook.com/" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="https://plus.google.com/collections/featured" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="https://twitter.com/login?lang=en" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href="signup page.html"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


  <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

            
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a href="index.html">Home </a>
                                   
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                 </li>
                                
              
                                <li>
                                    <a href="blog.html">Blog</a>
                                   </li>
                                <li>
                                    <a href="contact page.html">Contact</a>
                                   
                                </li>
                            </ul>

                        </div>
        



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>

        </header>
          <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to government works and much more!</p>

                    </div>
                </div>
            </div>
        </div>
        
<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>We are here to help you</h2>
                                </div>

                                <p class="lead">Are you curious about something? Do you have some kind of problem with our website? Do want to know the website works. Any problem with the navigation of the website.</p>
                                <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Address</h3>
                               <p><strong>Regisro.in Ltd</strong>
                        <br>25/11/22 right apartment
                        <br>
                        <br>Hsr layout
                        <br>Bangalore
                        <br>Registro.in@gmail.com
                        <strong>India</strong>
                    </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>Call center</h3>
                                <p class="text-muted">This number is toll free if calling from Registro.in otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+33 555 444 333</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                <ul class="list-style-none">
                                    <li><strong><a href="mailto:">info @ registro.in@gmail.com</a></strong>
                                    </li>
                                    <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                </ul>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Contact form</h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Firstname">Firstname</label>
                                            <input type="text" class="form-control" id="Firstname" name="Firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Lastname">Lastname</label>
                                            <input type="text" class="form-control" id="Lastname" name="Lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="text" class="form-control" id="Email" name="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Subject">Subject</label>
                                            <input type="text" class="form-control" id="Subject" name="Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Comment">Comment</label>
                                            <textarea id="Comment" class="form-control" name="Comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main" name="submit"><i class="fa fa-envelope-o"></i> Send message</button>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->

        <div id="map">

        </div>

 <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Our team has design this website to ease the works of the society. This website is useful to both public and the government.</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                        <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                    </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/blog-avatar.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Cristiano ronaldo</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/blog-avatar2.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">David beckham</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/home.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Gareth bale</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Regisro.in Ltd</strong>
                        <br>25/11/22 right apartment
                        <br>
                        <br>Hsr layout
                        <br>Bangalore
                        <br>Registro.in@gmail.com
                        <strong>India</strong>
                    </p>

                    <a href="contact page.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
<a href="#">
                                <img src="img/blog-avatar.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/blog-avatar2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/home.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/blog-avatar.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/blog-avatar2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/home.jpg" class="img-responsive" alt="#">
                            </a>                        </div>
                    </div>

                </div>

            </div>
      
        </footer>
        
        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2016. Registro.in.com</p>
                    <p class="pull-right">Back to top<a href="contact page.html">Contact page</a> 
                   
                    </p>

                </div>
            </div>
        </div>
       
    </div>
    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>


</body>

</html>