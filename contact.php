<?php
include("user_check.php");
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
	<link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <title>Contact | Charity / Non-profit responsive Bootstrap HTML5 template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+91 8581835992 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:saathiekkadam@gmail.com">saathiekkadam@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="https://www.facebook.com/saathiekkadam/" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="https://mobile.twitter.com/saathiekkadam" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="https://m.youtube.com/channel/UCS65DVHfZDjEZP7K7nsRNbQ" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
							<li><a href="ulogout.php">LOGOUT</a></li>
                       

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

                    <li><a href="userhome.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li class="has-child"><a href="#">NOTIFICATION</a>

                      <ul class="submenu">
                      
                     
                         <li class="submenu-item"><a href="notice.php">NOTICE </a></li>
                         <li class="submenu-item"><a href="meetings.php">MEETING</a></li>
                      </ul>

                    </li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a class="is-active"  href="contact.php">CONTACT</a></li>

               
				  <li class="has-child"><a href="#">MEMBER</a>
						<ul class="submenu">
                        
                         <li class="submenu-item"><a href="registration.php">New Member</a></li>
                         <li class="submenu-item"><a href="Members.php">Member List</a></li>
                      </ul>
				</ul>
                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>

					<form action="php/contect.php" method="POST">

						<div class="row">
							
							<div class="form-group col-md-6">
	                            <input type="text" name="fname" class="form-control" placeholder="First Name *" required/>
	                        </div>

							<div class="form-group col-md-6">
	                            <input type="text" name="lname" class="form-control" placeholder="Last Name *" required />
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required />
	                        </div>
							
						</div>

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message *" required></textarea>
                        </div>

                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right" href="contect.php">Send message</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> SAATHI CONTACTS <span class="title-under"></span></h2>
					<p>
						<b><h2>SAATHI</h2></b> FOR DETAIL INFORMATION OR ANY QUERY Contact US ON THE GIVEN LINK BELOW.
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> HATHWA ENCLAVE RAMJI CHAK BATAGANJ DIGHA PATNA-18</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span>8581835992</li>
							
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span>7050745420</li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> saathiekkadam@gmail</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

	<div id="contact-map" class="contact-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.6965515702364!2d85.07119831352051!3d25.64819488368841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57184d707975%3A0x4bd631c9a2ec9e89!2sIncubation+Boys+Hostel!5e0!3m2!1sen!2sin!4v1519646363714" width="1195" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div>


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
                                    <strong>Saathi</strong> It stands for (Social Awareness Association for Training and Heuristic Inhabitant)
                                </p> 

                                <p>
                                    A non-govermental organization which works for social awareness among the rural and urban area's people. 
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
								
								<li style="margin-left:220px; color:#800000; font-size:20px"> <a href="u_comm.php"><b> MORE </b> </a></li>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                        
                                    </form>

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
        
    </footer>




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>



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
