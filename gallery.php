<?php
include("user_check.php");
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
		<link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <title>Gallery | Charity / Non-profit responsive Bootstrap HTML5 template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

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
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+91 8581835992</a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:saathiekkadam@gmail.com">saathiekkadam@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="https://www.facebook.com/saathiekkadam/" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
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
                    <li><a class="is-active" href="gallery.php">GALLERY</a></li>
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


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>
			<p class="page-description">
				Memories of our NGO
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">

					<a href="assets/images/gallery/saathi2.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi2.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi3.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi3.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi4.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi4.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi5.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi5.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi6.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi6.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi7.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi7.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi8.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi8.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi9.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi9.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi10.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi10.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi11.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi11.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi12.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi12.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi13.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi13.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi14.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi14.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi15.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi15.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi16.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi16.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi17.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi17.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi18.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi18.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi19.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi19.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi21.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi21.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi22.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi22.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
				
					<a href="assets/images/gallery/saathi24.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi24.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi25.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi25.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi26.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi26.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi27.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi27.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi28.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi28.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi29.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi29.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi30.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi30.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi31.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi31.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi32.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi32.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi33.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi33.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a><a href="assets/images/gallery/saathi34.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi34.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					<a href="assets/images/gallery/saathi35.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/saathi35.jpg" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a>
					
					
					
				
			</div>
			
		</div>


	</div> <!-- /.main-container  -->


    <footer class="main-footer">

        <div class="footer-top">
            <h4 style="margin-left:850px"> More Images of <a href="https://www.facebook.com/pg/saathiekkadam/photos/?ref=page_internal"><b><i>SAATHI</i></b></a> </h4>
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
								</table>
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
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="date" name="date" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="comm" class="form-control" placeholder="Write your comment" style="hight:100px"required></textarea>
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
        
    </footer>




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>

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
