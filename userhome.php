<?php
include("user_check.php");
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Saathi</title>
        <meta name="description" content="">
		 <link rel="stylesheet" href="style.css">
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
   
							<a href="ulogout.php">LOGOUT</a>
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

                    <li><a class="is-active" href="userhome.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li class="has-child"><a href="#">NOTIFICATION</a>

                      <ul class="submenu">

                         <li class="submenu-item"><a href="notice.php">NOTICE </a></li>
                         <li class="submenu-item"><a href="meetings.php">MEETING</a></li>

                      </ul>

                    </li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
					<li class="has-child"><a href="#">MEMBER</a>
						<ul class="submenu">
                        
                         <li class="submenu-item"><a href="registration.php">New Member</a></li>
                         <li class="submenu-item"><a href="members.php">Member List</a></li>
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

                  <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">

              <img src="assets/images/slider/saathi2.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->




            <div class="item ">

              <img src="assets/images/slider/saathi3.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi5.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi6.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi7.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi8.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi9.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi10.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi11.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi12.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi13.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div> 

            </div> <!--  /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi14.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi15.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->
			 <div class="item ">

              <img src="assets/images/slider/saathi16.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

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

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/our-mission-icon.png" alt="">
                        </div>
                        <h3 class="col-title">our mission</h3>
                        <div class="col-details">

                          <p>Our mission is to make the people able that they can survive themselves in the modern and digital era.</p>
                          
                        </div>
                        
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/make-donation-icon.png" alt="">
                        </div>
                        <h3 class="col-title">Make donations</h3>
                        <div class="col-details">

                          <p>Donate for provide them better life who is needy person.</p>
                          
                        </div>
                       
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/help-icon.png" alt="">
                        </div>
                        <h3 class="col-title">Help & support</h3>
                        <div class="col-details">

                          <p>help us to help the needy people , to provide them a better life that they can survive in our society.</p>
                          
                        </div>
                        
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/programs-icon.png" alt="">
                        </div>
                        <h3 class="col-title">our programs</h3>
                        <div class="col-details">

                          <p>Enabling people to be socially aware regarding all the government policies and expertise working for social welfare. Helping them to live in a better and healthy environment.</p>
                          
                        </div>
                       
                    
                  </div>
                  
                </div>
                

                
            </div>

        </div>
      
    </div> <!-- /.about-us -->

    <div class="section-home home-reasons" >

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
                    
                </div>


            </div>
          
  

        </div>
      

    </div> <!-- /.home-reasons -->

    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">

            <h2 class="title-style-1">DONATIONS<span class="title-under"></span></h2>

            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                           ₹10/₹500
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4>
                        <div class="cause-details">
                            Donate now and we will keep  you update on how your generosity is making the difference around the world. 
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div> 

                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            ₹400 / ₹700
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>
                        <div class="cause-details">
                            This category of donation will be used for those childern who are less then 14 year old and because of some money problem  they are not getting an education.
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>


                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            ₹400 / ₹1000
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4>
                        <div class="cause-details">
                             Our members research to expose tyranny, to empower victims, and to tell their stories to the world. Because of you, we can shine light into darkness.
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>

                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/cause-culture.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            ₹400 / ₹700
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">SOCIAL AWARENESS</a></h4>
                        <div class="cause-details">
                            Our team members perform some social activity to give the message about some government scheme. This donation will help us to intract with peoples.
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>

            </div>

        </div>
        
    </div> <!-- /.our-causes -->

    




    <div class="section-home our-sponsors animate-onscroll fadeIn">
    
        <div class="container">

            <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>
				
				<center>
				
            <ul class="owl-carousel list-unstyled list-sponsors"style="margin-left:50px">
			
			  <li> <img src="assets/images/sponsors/Incubation.png" alt=""></li>
			  <li> <img src="assets/images/sponsors/Saathi.png" alt=""></li>
         <!--     <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
              
			  
			<!--  <li> <img src="assets/images/sponsors/Incubation.png" alt=""></li>
			  <li> <img src="assets/images/sponsors/Saathi.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
				-->
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

                            <h4 class="footer-title">RECENT COMMENTS<span class="title-under"></span></h4>

                            <div class="footer-content">
                                
								
								
								<?php
									$conn=mysqli_connect("localhost","root","","project");
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
											if(strlen($newArray['comm'])>1)
											{
												echo"
												<h6>".$newArray['comm']."</h6>
												";
											}
										}
									}
									else
									{
										echo "No Data Found!!";
									}
								?>						
							
								<br><br>
								<li style="margin-left:220px; color:#800000; font-size:20px"> <a href="u_comm.php"><b> MORE </b> </a></li>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Add Comment<span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form">
                                    
                                    <div class="footer-form" >
                                    
                                    <form action="comment.php" method="POST">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="date" name="date" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="comm" class="form-control" placeholder="Write your comment *" style="hight:100px"required></textarea>
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-submit pull-right">Submit</button>
                                        </div>
                                        
                                    </form>

                                </div>

                                </div>
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




    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">

                <form class="form-donation" name="donation" method="post" action="donation.php">

                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" name="amount" placeholder="AMOUNT(₹)" required>
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="fname" placeholder="First name*" required>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lname" placeholder="Last name">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Email*" required>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Enter the field of donation here"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" value="DONATE">
                            </div>

                        </div>



                       
                    
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->





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
