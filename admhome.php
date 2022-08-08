<?php
include("check.php");
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
	<link rel="stylesheet" href="reg.css">
        <meta charset="utf-8">
        <title>SADAKA | Charity / Non-profit responsive Bootstrap HTML5 template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+91 8581835992</a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:saathiekkadam@gmail.com">saathiekkadam@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="https://www.facebook.com/saathiekkadam/"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="https://mobile.twitter.com/saathiekkadam"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="https://m.youtube.com/channel/UCS65DVHfZDjEZP7K7nsRNbQ"> <i class="fa fa-youtube"></i>  </a> </li>
							<li><a href="logout.php">LOGOUT</a></li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="logo" href="index.html"><img src="assets/images/logo.jpeg" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="admhome.php">HOME</a></li>
					<li><a href="donated.php">DONATIONS</a></li>
					<li><a href="Comments.php">COMMENTS</a></li>
                   <li class="has-child"><a href="#">MEMBER</a>
						<ul class="submenu">
                        
                         <li class="submenu-item"><a href="admmem.php">MEMBERS</a></li>
                         <li class="submenu-item"><a href="delmem.php">REMOVE MEMBER</a></li>
						 <li class="submenu-item"><a href="delreg.php">CANCLE REGISTRATION</a></li>
						 
						</ul>
					<li class="has-child"><a href="#">NOTICE</a>
						<ul class="submenu">
                        <li class="submenu-item"><a href="notice.php">NOTICE</a></li>
                         <li class="submenu-item"><a href="admnotice.php">ADD NOTICE</a></li>
                         <li class="submenu-item"><a href="delnotice.php">REMOVE NOTICE</a></li>
						 
						</ul>
						<li class="has-child"><a href="#">MEETING</a>
						<ul class="submenu">
                        <li class="submenu-item"><a href="meetings.php">MEETING</a></li>
                         <li class="submenu-item"><a href="admmeeting.php">ADD</a></li>
                         <li class="submenu-item"><a href="delmeet.php">REMOVE</a></li>
						 <li class="submenu-item"><a href="editmeet.php">MODIFY</a></li>
						</ul>

					</ul>
					
                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->




    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

              <img src="assets/images/slider/saathi4.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h1 class="carousel-title bounceInDown animated slow">WELCOME TO </h1>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Admin Pannel</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">

              <img src="assets/images/slider/saathi2.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Welcome</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">Admin</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
            <div class="item ">

              <img src="assets/images/slider/saathi3.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi5.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi6.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi7.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi8.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi9.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi10.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi11.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi12.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi13.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi14.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi15.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>


                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi16.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->

          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

    </div><!-- /.carousel -->

    <div class="section-home about-us fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                  
                        <legend class="col-title">LAST DONATIONS</legend>
                        <div class="col-details">

                          <table border="2">
                           <?php $conn=mysqli_connect("localhost","root","","project"); ?>
						<?php
							if(mysqli_connect_errno())
							{
								exit();
							}
							$sql="select * from donate ORDER BY id DESC LIMIT 10";
							$res=mysqli_query($conn,$sql);
							if(mysqli_num_rows($res)>0)
							{
								while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
								{
								if(strlen($newArray['fname'])>1)
									{
										echo"<tr>
											<td width='100%'>".$newArray['fname']." ".$newArray['lname']."</td>
											<td>".$newArray['amount']."</td>
											</tr>
											";
									}
								}
							}
							else
							{
								echo"No Data Found!!";
							}
                         ?>
						 </table>
                          
                        </div>
                        
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                       
                        <legend class="col-title">LAST COMMENTS</legend>
                        <div class="col-details">
                           <?php $conn=mysqli_connect("localhost","root","","project"); ?>
						<?php
							if(mysqli_connect_errno())
							{
								exit();
							}
							$sql="select * from comment ORDER BY id DESC LIMIT 3";
							$res=mysqli_query($conn,$sql);
							if(mysqli_num_rows($res)>0)
							{
								while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
								{
								if(strlen($newArray['name'])>1)
									{
										echo"
											<h5 width='100%'>: ".$newArray['comm']."</h5>";
									}
								}
							}
							else
							{
								echo"No Data Found!!";
							}
                         ?>
                          
                        </div>
                        
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                 
                        <legend class="col-title">LAST NOTICE</legend>
                        <div class="col-details">

                           <?php $conn=mysqli_connect("localhost","root","","project"); ?>
						<?php
							if(mysqli_connect_errno())
							{
								exit();
							}
							$sql="select * from notice ORDER BY id DESC LIMIT 1";
							$res=mysqli_query($conn,$sql);
							if(mysqli_num_rows($res)>0)
							{
								while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
								{
								if(strlen($newArray['note'])>1)
									{
										echo"<fieldset>
										
											<h5><u></u>".$newArray['note']."</h5></fieldset>";
									}
								}
							}
							else
							{
								echo"No Data Found!!";
							}
                         ?>
                          
                        </div>
                      
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                       
                        <legend class="col-title">LAST MEETING</legend>
                        <div class="col-details">

                          <?php $conn=mysqli_connect("localhost","root","","project"); ?>
						<?php
							if(mysqli_connect_errno())
							{
								exit();
							}
							$sql="select * from meeting ORDER BY id DESC LIMIT 1";
							$res=mysqli_query($conn,$sql);
							if(mysqli_num_rows($res)>0)
							{
								while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
								{
								if(strlen($newArray['place'])>1)
									{
										echo"<fieldset>
											<h4><u>DATE:</u> ".$newArray['date']."</h4>
											<h4><u>PLACE: </u>".$newArray['place']."</h4>
											<h5><u>AGENDA: </u>".$newArray['agenda']."</h5>";
									}
								}
							}
							else
							{
								echo"No Data Found!!";
							}
                         ?>
                        </div>
                        
                    
                  </div>
                  
                </div>
      
            </div>

        </div>
      
    </div> <!-- /.about-us -->
	<div>
	<fieldset>
	<center><b><legend><u>MEMBERS</u></legend></b><br>
	<?php
								$conn = new PDO('mysql:host=localhost; dbname=project','root', ''); 
								$result = $conn->prepare("SELECT * FROM members ORDER BY id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
									<?php if($row['img_path'] != ""): ?>
									<img src="uploads/<?php echo $row['img_path'];?>" width="150px" height="150px">
									<?php else:?>
									<img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
									
									<?php endif;?>
					
						<?php } ?> </br></br>
						</fieldset>
	
	</center>
	
	</div>

<div class="section-home home-reasons" >
<fieldset>
				<center><b><legend><u>DEVLOPERS</u></legend></b></center>
        <div class="container" >

            <div class="row">
                
                <div class="col-md-6" >
				

                    <div class="reasons-col animate-onscroll fadeIn" style="height:250px; width:250px" >

                        <img src="assets/images/reasons/we-fight-togother.jpg" alt="" style="height:250px; width:250px">

                        <div class="reasons-titles" style="height:75px">

                            <h6 class="reasons-title">Pawan Kumar</h6>
                            <h6 class="reason-subtitle">Devloper</h6>
                            
                        </div>

                        <div class="on-hover hidden-xs" >
                            
                              <h6>
							  Pawan Kumar
							  </h6>
							  <h6>Email: pk.soft29@gmail.com</h6>
							  <h6>Phone: 8083373213</h6>
							  <h6>Qualifiation:  BCA</h6>
                                
                        </div>
                    </div>
                    
                </div>


                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn" style="height:250px; width:250px; margin-left:250px">

                        <img src="assets/images/reasons/devlop.jpg" alt="" style="height:250px; width:250px">

                        <div class="reasons-titles" style="height:75px">

                            <h6 class="reasons-title">Atul</h6>
                            <h6 class="reason-subtitle"> Devloper </h6>
                            
                        </div>

                        <div class="on-hover hidden-xs">
                            
                              <h6>
							  Atul
							  </h6>
							  <h6>Email: mratul337@gmail.com</h6>
							  <h6>Phone: 9546086668</h6>
							  <h6>Qualifiation:  BCA</h6>
                                
                        </div>


                    </div>
					</fieldset>
                    
                </div>


            </div>
          
  

        </div>
      

    </div>

    </div> <!-- /.home-reasons -->

    <div class="section-home our-sponsors animate-onscroll fadeIn">
    
        <div class="container">

            <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>

            

              <center>
			
            <ul class="owl-carousel list-unstyled list-sponsors" style="margin-left:50px">

              
			  <li> <img src="assets/images/sponsors/Incubation.png" alt=""></li>
			  <li> <img src="assets/images/sponsors/Saathi.png" alt=""></li>
          <!--    <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li> -->
			  

            </ul>
			</center>

        </div>

    </div> <!-- /.our-sponsors -->


    


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <p>
                                    <strong>SAATHI</strong> Enabling people to be socially aware regarding all the government policies and expertise working for social welfare. Helping them to live in a better and healthy environment. To ensure that they live in a proper inhabitant. 
                                </p> 

                                <p>
                                    To educate them to live in a hygienic condition, proper sanitation facilities. To create bond among people to take up stand for a cause. Provide with basic medical facilities to those who cannot afford. To make the people able that they can survive themselves in the modern and digital era.
                                </p>

                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                </ul>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">OFFICE LOCATION<span class="title-under"></span></h4>

                            <div class="footer-content">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.6965515726506!2d85.07119294917618!3d25.64819488360831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57184d707975%3A0x4bd631c9a2ec9e89!2sIncubation+Boys+Hostel!5e0!3m2!1sen!2sin!4v1521100062966" width="350" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                Like Us on facebook <a href="https://www.facebook.com/saathiekkadam/"><b><i>Click Me</i></b></a>
            </div>
        </div>
        
    </footer> <!-- main-footer -->

    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>