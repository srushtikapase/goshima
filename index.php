<!DOCTYPE html>
<html lang="en">
<head>

     <title>GOSHIMA - Gokul Shirgaon Manufacturers Association.</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<?php
	if(isset($_GET['success']))
	{
		if($_GET['success']==1)
		{
			echo '<script>alert("Newsletter subscription activated")</script>';
		}
		elseif($_GET['success']==2)
		{
			echo '<script>alert("Newsletter already subscribed")</script>';
		}
	}
	elseif(isset($_GET['message']))
	{
		if($_GET['message']==1)
		{
			echo '<script>alert("Message Send successfully! ")</script>';
		}
	}
?>
     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class=""><img src="images/logo.png" height="80" width="350"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#team" class="smoothScroll">Our Team</a></li>
                         <li><a href="#courses" class="smoothScroll">Activities</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Projects & Services</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                   <!-- <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li>
                    </ul>-->
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                      <!--  <div class="col-md-6 col-sm-12">
                                             <h1>Distance Learning Education Center</h1>
                                             <h3>Our online courses are designed to fit in your industry supporting all-round with latest technologies.</h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                                        </div>-->
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                       <div class="col-md-6 col-sm-12">
                                             <h1>Common Facilitation Centre</h1>
                                             <h3>The association has plans to build a Common Facilities Center (CFC) under which sophisticated quality control instruments & equipment as well as latest software for design & engineering will be made available to all members at nominal charges.</h3>
                                            <!-- <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>-->
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                       <div class="col-md-6 col-sm-12">
                                             <h1>Sand Reclamation Plant</h1>
                                             <h3>Presently processing almost 2000 tonnes of foundry sand per month and recycling it. This results in major savings for the member industries and avoids major environmental damage. 
                                             <!--<a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>-->
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
					 <div class="item item-forth">
                              <div class="caption">
                                   <div class="container">
                                       <div class="col-md-6 col-sm-12">
                                             <h1>Sand Reclamation Plant</h1>
                                             <h3>Presently processing almost 2000 tonnes of foundry sand per month and recycling it. This results in major savings for the member industries and avoids major environmental damage. 
                                             <!--<a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>-->
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
		 
     </section>


     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Improvement in Member Satisfaction.</h3>
                              <p>Objective </p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Reduction in Member complaints.</h3>
                              <p>Objective </p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>On-Time Service.</h3>
                              <p>Objective </p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>About GOSHIMA</h2>
								<p align="justify">Kolhapur, with its historical background, is well-known as a major pilgrimage destination. At the same time, the roots of industrialization in Kolhapur go back to 1940s, when first indigenous diesel engine was built at Shivaji Udyamnagar (industrial area within city). Since then, various industries have flourished in Shiroli, Gokul Shirgaon and Kagal industrial areas making Kolhapur an important industrial hub in Maharashtra. Supply of very intricate and precision machined castings to Indian as well as export markets is the specialty of Kolhapur along with products and services for a variety of sectors.
</p>
								<p align="justify">Gokul Shirgaon Manufacturers’ Association (GOSHIMA) was founded in 1985 to facilitate the entrepreneurs and to develop the industrial areas of Gokul Shirgaon in association with MIDC. With dedicated efforts of its director bodies and active participation by members, the association is now considered as one of the major industrial associations of Maharashtra. Today, GOSHIMA represents more than 350 eminent industries from a variety of sectors such as engineering, auto ancillaries, chemical, food, textile and pharmaceutical. It is one of the few associations in Maharashtra to receive ISO 9001:2015 certification for its well-established systems. The association has also developed useful infrastructure facilities include an office building, meeting rooms and a conference hall. <a href="">Click to Read more</a>
</p>
                             <!-- <figure>
                                   <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Professional Trainers</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>International Certifications</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Free for 3 months</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>-->
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                        <!-- <div class="entry-form">-->
						  <h2>Quality Policy</h2>
						  <ul type="square">
						  <li><p align="justify">Providing quality services in time.</p></li>
						  <li><p align="justify">Working for Continuous growth & progress of members through technological upgradation, Management Skills & Export promotion activities, </p></li>
						  <li><p align="justify">Providing assistance to Micro, Small & Medium enterprises in resolving their issues in Various Government Offices.</p></li>
						  <li><p align="justify">To Conduct Cultural programs, Get-togethers, Seminars & other Social activities and there by maintaining unity & integrity of all Members.</p></li>
						  </ul>
						  <h2>Objectives</h2>
						  <ul type="square">
						  <li><p align="justify">Improvement in Member Satisfaction.</p></li>
						  <li><p align="justify">Reduction in Member complaints. </p></li>
						  <li><p align="justify">On-Time Service.</p></li>
						  </ul>
                           <!--   <form action="#" method="post">
                                   <h2>Signup today</h2>
                                   <input type="text" name="full name" class="form-control" placeholder="Full name" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

                                   <input type="password" name="password" class="form-control" placeholder="Your password" required="">

                                   <button class="submit-btn form-control" id="form-submit">Get started</button>
                              </form>-->
                         <!--</div>-->
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Our Team <small>Meet Our Team Members</small></h2>
                         </div>
                    </div>
					
					<div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/team4.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h4>Mr. Mohan Panditrao</h4>
                                   <span>Chairman</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-behance"></a></li>
                              </ul>
                         </div>
                    </div>
					
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/team1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h4>Mr. Deepak Chorage</h4>
                                   <span>Vice Chairman</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/team2.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h4>Mr. Nitinchandra Dalawai</h4>
                                   <span>Secretary</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/team3.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h4>Mr. Swaroop Kadam</h4>
                                   <span>Treasurer</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   <li><a href="#" class="fa fa-linkedin"></a></li>
                              </ul>
                         </div>
                    </div>

                    

               </div>
          </div>
     </section>


     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Activities <small>Variour Activities Conducted</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/activity/courses-image1.jpg" class="img-responsive" alt="">
                                                  </div>
                                                 <!-- <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">TAPAMS Man. Director Visit</a></h3>
                                                  <p align="justify">Managing Director of TAPAMS, Dr. P. Meganathan visit on Goshima's office and was felicitated on behalf of Goshima</p>
                                             </div>

                                                <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/logo1.png" class="img-responsive" alt="">
                                                       <span>GOSHIMA</span>
                                                  </div>
                                                 <!--<div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>-->
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/activity/courses-image2.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Innovative Idea Program</a></h3>
                                                  <p align="justify">Goshima and Tata Technologies Pvt. Ltd. Combined Conducted Innovative Idea Accelerator Program. </p>
                                             </div>

                                                <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/logo1.png" class="img-responsive" alt="">
                                                       <span>GOSHIMA</span>
                                                  </div>
                                                 <!--<div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>-->
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/activity/courses-image3.jpg" class="img-responsive" alt="">
                                                  </div>
                                                 <!-- <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">General Meeting</a></h3>
                                                  <p align="justify">With Hon'ble Shri. Narayan Ranesaheb, Union Minister for Micro, Small and Medium Enterprises, Government of India, New Delhi.</p>
                                             </div>

                                                <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/logo1.png" class="img-responsive" alt="">
                                                       <span>GOSHIMA</span>
                                                  </div>
                                                 <!--<div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>-->
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/activity/courses-image4.jpg" class="img-responsive" alt="">
                                                  </div>
                                                 <!-- <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Free Inspection of Workers</a></h3>
                                                  <p align="justify">Free inspection of workers in Gokul Shirgaon Industrial Estate on behalf of Yuva Gramin Vikas Sanstha.</p>
                                             </div>

                                                 <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/logo1.png" class="img-responsive" alt="">
                                                       <span>GOSHIMA</span>
                                                  </div>
                                                 <!--<div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>-->
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/activity/courses-image5.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Paid homage</a></h3>
                                                  <p align="justify">Late MLA Chandrakant Jadhav Saheb paid homage on behalf of Goshima during his reply function.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/logo1.png" class="img-responsive" alt="">
                                                       <span>GOSHIMA</span>
                                                  </div>
                                                 <!--<div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>-->
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Projects and Services <small>Pipelined and completed projects and services provided</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <img src="images/sand-reclemation.jpg" class="img-responsive" alt="">
                                      
                                        <div class="tst-author">
                                             <h4>sand reclamation plant</h4>
                                             <span>Successfully Installed</span>
                                        </div>
                                        <p align="justify">presently processing almost 2000 tonnes of foundry sand per month and recycling it. This results in major savings for the member industries and avoids major environmental damage. </p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <img src="images/auditorium.jpg" class="img-responsive" alt="">
                                        <div class="tst-author">
                                             <h4>120-Seater Auditorium</h4>
                                             <span>Pipelined Project</span>
                                        </div>
                                        <p align="justify">Building & developing a 120-seater auditorium with modern amenities in association with Menon industrial group.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                         <img src="images/cfc.jpg" class="img-responsive" alt="">
                                        <div class="tst-author">
                                             <h4>Common Facilities Center(CFC)</h4>
                                             <span>Pipelined Project</span>
                                        </div>
                                        <p align="justify">The association has plans to build a Common Facilities Center (CFC) under which sophisticated quality control instruments & equipment as well as latest software for design & engineering will be made available to all members at nominal charges. </p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                            <!--  <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Andrio</h4>
                                             <span>Web Developer</span>
                                        </div>
                                        <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum varius ex sagittis vel.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                         </div>-->

               </div>
          </div>
     </section> 


     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="indexscript.php" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send_message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/logo1.png" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>Plot No- P-35/40, MIDC<br> Gokul Shirgaon ,Kolhapur</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 GOSHIMA</p>
                                   
                                   <p>Developed By: <a href="http://www.sanjayghodawatuniversity.ac.in/dept-cse" target="_blank">CSE Department<br>Sanjay Ghodawat University Kolhapur</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>0231-2672400</p>
                                   <p><a href="mailto:goshima2012@gmail.com">goshima2012@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#testimonial">Projects</a></li>
                                        <li><a href="#courses">Actvities</a></li>
                                        <li><a href="#team">Team</a></li>
                                        <li><a href="login.php">login</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="indexscript.php" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>