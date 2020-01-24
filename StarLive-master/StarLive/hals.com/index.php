
  


<!DOCTYPE html>
<html lang="en">
<head>
    <title>HALS </title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Calling Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Calling Favicon -->
    <!-- ********************* -->
    <!-- CSS files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/meanmenu.css" media="all">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" class="color-changing" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- End CSS files -->


    <!-- Plugins for this template -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="js/script.js"></script>
    
     <script src="js/timer.js"></script>


 <style>
        .main-menu li a {
    font-size: 20px;
    letter-spacing: .8px;
    font-weight: 500;
    display: inline-block;
    padding: 44px 0px;
    color: #fff;
     font-family:Roboto-Medium;
}

.main-menu li a:active {
    color: red;
}

p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
  
}

    </style>


  <script type="text/javascript">
	
		
		function validate(){

	

		var name = document.getElementById("name");

		

		if (name.value == "")

		{

			document.getElementById('nmmsg').innerHTML = "Please enter your name";

            return false;

		} 

		else

		{

		    document.getElementById('nmmsg').innerHTML = "";

		}

		

		 // Phone Validation

		

	

	      var phone = document.getElementById("phone");

	      var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 

          if(!phone.value.match(phoneNum)) 

		{



				 document.getElementById("phmsg").innerHTML ="You have entered an invalid phone number";

			     return false;

		}	

		else

		{

		      document.getElementById("phmsg").innerHTML ="";

		}

	

    

	 // Email Validation 



		var email = document.getElementById('email');

		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;



		if (!filter.test(email.value)) 

		{

			document.getElementById('msg').innerHTML = 'Please provide a valid email address';

			return false;

		}

		else

		{

		    document.getElementById('msg').innerHTML = '';

		   

		}

		

		/**$.post(

			$(".contact_form").attr('action'),

			$(".contact_form").serialize(),

			function(data){

				alert(data);

				if(data.match('success') != null) {

					//$(".contact_form").get(0).reset();

				}

			}

		)**/

		$.post(

			$(".contact_form").attr('action'),

			$(".contact_form").serialize(),

			function(data){

				$(".cf_response").html(data).fadeIn('fast');

				if(data.match('success') != null) {

				  $(".contact_form").get(0).reset();

				}

			}

		) // end post

	return false;

	}
	
	</script>
	
	<script>
// Set the date we're counting down to
var countDownDate = new Date("DECEMBER 30, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = DAYS | + "D |" + HOURS | + "H |"
  +  MINUTES |+ "M |" +  SECONDS | + " |s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
	

</head>

<body>
    <!-- Preloader start -->
   <!-- <div class="loader-page flex-center">
        <img src="img/loader.gif" alt="">
    </div>  --->
    <!-- Preloader end -->

    <!-- Header start -->
    <header class="transperant-head transition-4 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-5 col-sm-4 col-5">
                    <div class="logo transition-4">
                        <a href="index.html">
                            <img src="img/logo/logo.png" class="transition-4" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-7 col-sm-8 col-7">
                    <div class="icon-links d-flex align-items-center">
                        <a href="#" class="shop-icon d-none d-sm-block">
                            <!--<i class="fas fa-shopping-basket"></i>  -->
                            <span style="letter-spacing: 4px;">BUY </span><br>
                                <span>TICKETS
                            </span>
                        </a>
                       <!-- <a href="#" class="search-icon d-none d-sm-block" data-toggle="modal" data-target="#searchModal">
                            <i class="fas fa-search"></i>
                        </a>-->
                       <!-- <a href="#" class="btn btn-round d-none d-sm-block blob-small">CONTACT US</a>-->
                    </div>
                    <div class="menu-links">
                        <nav class="main-menu white">
                            <ul>
                                <li >
                                    <a href="index.html" class="active">Home 
                                        <!--<i class="fas fa-angle-down"></i>   -->
                                    </a>
                                    <!--<ul class="submenu">
                                        <li><a href="index.html">Home Page V1</a></li>
                                        <li><a href="index-2.html">Home Page V2</a></li>
                                        <li><a href="index-3.html">Home Page V3</a></li>
                                    </ul>--->
                                </li>
                                <li>
                                    <a href="about.html">About Us 
                                        <!--<i class="fas fa-angle-down"></i>  -->
                                    </a>
                                   <!-- <ul class="submenu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li>
                                            <a href="team.html" class="sub-2">Our Team</a>
                                            <ul class="submenu">
                                                <li><a href="team.html">Our Team V1</a></li>
                                                <li><a href="team-2.html">Our Team V2</a></li>
                                                <li><a href="team-3.html">Our Team V3</a></li>
                                                <li><a href="team-detail.html">Team Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="clients.html">Partners</a></li>
                                        <li>
                                            <a href="career.html" class="sub-2">Career</a>
                                            <ul class="submenu">
                                                <li><a href="career.html">Career</a></li>
                                                <li><a href="career-details.html">Career Detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="services.html" class="sub-2">Service</a>
                                            <ul class="submenu">
                                                <li><a href="services.html">Service V1</a></li>
                                                <li><a href="services-2.html">Service V2</a></li>
                                                <li><a href="services-details.html">Service Detail</a></li>
                                            </ul>
                                        </li>
                                    </ul>--->
                                </li>
                                <li>
                                    <a href="#services.html">SERVICES
                                        <i class="fas fa-angle-down"></i>  
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="services.html">Film Abroad </a></li>
                                       <li><a href="event_list.html">Events</a></li>
                                        <!---<li><a href="portfolio-masonty.html">Portfolio Masonry</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Detail</a></li>  -->
                                    </ul> 
                                </li>
                                
                                <li>
                                    <a href="events.html">EVENTS
                                    <!-- <i class="fas fa-angle-down"></i>   -->
                                 </a>
                                    <!--<ul class="submenu">
                                        <li>
                                            <a href="events.html" class="sub-2">EVENT</a>
                                            <ul class="submenu">
                                                <li><a href="blog-listing-standared-2.html">Blog Standared </a></li>
                                                <li><a href="blog-listing-standared-left.html">Blog Standared Sidebar Left</a></li>
                                                <li><a href="blog-listing-nosidebar.html">Blog Standared No Sidebar</a></li>
                                                <li><a href="blog-listing-masonty.html">Blog Masonry</a></li>
                                                <li><a href="blog-listing-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-listing-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                                <li><a href="blog-listing-grid-2.html">Blog Grid 2</a></li>
                                            </ul>  
                                        </li>

                                        <li>
                                            <a href="blog-details-image.html" class="sub-2">Blog Details</a>
                                            <ul class="submenu">
                                                <li><a href="blog-details-image.html">Blog Detail Image</a></li>
                                                <li><a href="blog-details-slider.html">Blog Detail Slider</a></li>
                                                <li><a href="blog-details-video.html">Blog Detail Video</a></li>
                                                <li><a href="blog-details-no-sidebar.html">Blog Detail No Sidebar</a></li>
                                            </ul>
                                        </li>

                                    </ul>    -->
                                </li>
                                <li>
                                    <a href="contact.html">CONTACT US 
                                        <!--<i class="fas fa-angle-down"></i>  -->
                                    </a>
                                    <!---<ul class="submenu">
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li>
                                            <a href="pricing-1.html" class="sub-2">Pricing</a>
                                            <ul class="submenu">
                                                <li><a href="pricing-1.html">Price V1</a></li>
                                                <li><a href="pricing-2.html">Price V2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Signup</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="404.html">Error</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="thank-you.html">Thank You Page</a></li>
                                        <li><a href="terms.html">Terms & Policy</a></li>
                                    </ul>  --->
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>

    </header>
    <!-- The search Modal start -->
    <div class="search-popup modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group relative">
                            <input type="text" class="form-control input-search" id="search" placeholder="Search here...">
                            <i class="fas fa-search transform-v-center"></i>

                            <pre>
                              <span>  BUY </span> <br><br>
                                TICKET
                            </pre>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <i class="fas fa-times close-search-modal" data-dismiss="modal" aria-label="Close"></i>
    </div>
    <!-- The search Modal end -->
    <!-- Header end -->

    <!-- Slider start -->
    <section class="slider-area" style="background-image: url('img/banner/banner_1.jpg');" data-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 text-center">
                    <div class="slide-div ">
                        <div class="owl-carousel slider-1">
                            <div class="item">
                            
     <h1 class="banner-head mt-40 mb-50 mt-xs-20 mb-xs-30">JOIN US  Dubai, <strong style="color:#c40c11;">UAE</strong></h1>
     <div class="music">
        <h4>ILLAYARAJA MUSIC CONCERT
            <BR> FOR <strong>EVERYONE</strong>
        </h4>

        <p>Starting in-</p>
  
         
         <!-- <ul>
            <li id="cd-day" class="digits"><a href="#">00
                <br>
               <span> DAYS</span>
            </a></li>
            <li class="digits" id="cd-hr"><a href="#">00
                <br>
                 <span> HOUR</span>
            </a></li>

<li class="digits" id="cd-min"><a href="" id="minute">00
                <br>
               <span> MINS</span>
            </a></li>

            <li class="digits" id="cd-sec"><a href="" id="second">00
                <br>
               <span> SECS</span>
            </a></li>  -->



          </ul>

     </div>





                            </div>


                            <!--<div class="item">
                                <h5 class="line-head">
                  <span class="line before"></span>
                    1000+ Happy Clients
                  <span class="line  after"></span>
                </h5>
                                <h1 class="banner-head mt-40 mb-50 mt-xs-20 mb-xs-30"> The Right People for Your Best Team</h1>
                                <a href="#" class="btn btn-square">Read More<i class="fas fa-long-arrow-alt-right ml-20"></i></a>
                            </div>  -->
                        </div>
                        
                        
                           <p id="demo" style="display:block;color:#fff !important;text-transform:uppercase;"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider end -->

    
    <!-- About us start -->
    <section class="about-us pt-100 pb-100">
        <div class="container">
            <div class="row align-items-xl-center">
              
                <div class="col-lg-6">
                    <div class="about-text mt-md-60 text-center text-lg-left wow fadeInRight">
                        <div class="fancy-head left-al  mb-10">
                       
                            <h1>MUSIC BONDS <BR> US TOGETHER</h1>
                            
                           

                        </div>
                        
                        
                        
 

                        <div class="about_content">
                            
                            
                            <?php
$con=new mysqli("localhost","hals","hals@123","halsandstarapp");
if($con->connect_error){
    echo"$con->connect_error";
    die("databe is not connected");
}
else {
    echo"database is connected";
}



$sql = "SELECT * FROM contenttop";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
               
                echo "<th>content</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['content'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>


                            
                            
                            
                            
                            
                      <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  
                        </p>  -->

                        <div class="read_more">
                            <button type="button" class="btn btn-primary" id="read_more_but">read more
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                        </div>
                        
                       </div>
                      

                    </div>
                </div>

                  <div class="col-lg-6">
                      
                      
                      
                    <div class="ceo-video relative img-lined mx-auto shadow-1 wow fadeInLeft">
                        <img src="img/banner/ceo.jpg" alt="">
                        <div class="blob green transform-center">
                            <a href="https://www.youtube.com/watch?v=qtQgbdmIO30" class="popup-video"> <!--<i class="fas fa-play"></i>  -->
                            </a>
                            
                            
   
        <div class="video">
            <!--<img src="images/video-image.jpg" alt="Image">   -->
            <a href="video/video.mp4" class="play-btn fancybox" data-type="iframe"><i class="fa fa-play" aria-hidden="true"></i></a> </div>
        <!-- end video --> 
     
   
                            
                            
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- About us end -->




  


  <section>
      <div class="container-fluid">
        <div class="row">
           
           <div class="team_wrapper">
                <div class="team">
                    <div class="box">
                        <div class="imgBox">
                    <img src="img/team/team.png" class="team_img" alt="signer">
                    </div>
                     <div class="details">
                         <div class="content">
                          <h2>Anirudh Ravichander</h2>
                          <p>SEPTEMBER 2020</p>
                          </div>
                      </div>
                      
                    </div>
                    
                     <div class="box">
                           <div class="imgBox">
                     <img src="img/team/team3.png" class="team_img" alt="signer">
                      </div>
                      
                         <div class="details">
                         <div class="content">
                          <h2>YUVAN ON STAGE</h2>
                          <p>SEPTEMBER 2020</p>
                          </div>
                      </div>
                      
                     
                        </div>
                        
                        <div class="box">
                               <div class="imgBox">
                      <img src="img/team/team4.png" class="team_img" alt="signer">
                        </div>
                        
                           <div class="details">
                         <div class="content">
                          <h2>Harris-Jayaraj</h2>
                          <p>SEPTEMBER 2020</p>
                          </div>
                      </div>
                      
                          </div>
                <div class="box">
                       <div class="imgBox">
              <img src="img/team/team5.png" class="team_img" alt="signer">

               </div>
                  <div class="details">
                         <div class="content">
                          <h2>YUVAN ON STAGE</h2>
                          <p>SEPTEMBER 2020</p>
                          </div>
                      </div>
                      
                 </div>
             
               </div>
            </div>
        </div>
      </div>
  </section>





    <section class="singer_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div class="singer_wrapper_content">
                        <h2>Meet the <br> Stars</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>

                        <div class="see_button">
                              <button type="button" class="btn btn-primary" id="read_more_but">SEE FULL LIST
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="signger_right">
                        <img src="img/banner/singer.png" alt="singer">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service start -->
    <section class="services bg-light-white pt-95 pb-70 bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="half_next_events">
                     
                        <h2>next events</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br>the industry's standard dummy text ever since the 1500s </p>
                    </div>
                </div>

              
            
               
            </div>


        <div class="row">

            <div class="col-md-12">



            <div class="event_bg">

               
                    <div class="event_box">
       
          
          <ul>
            <li><a href="#">25-27
                <br>
               <span> April</span>
            </a></li>
           
          </ul>

        

     </div>
          



                 <!-- Nested media object -->  
                 
                 <a href="events.html"> 
    <div class="media">
      <div class="media-left">
         <img src="img/banner/eventes.png" alt="banner" class="events_imges">
      </div>
      <div class="media-body">
        <h4 class="media-heading">Illayaraja Concert- Raja The Raja <span><button type="button" class="btn btn-primary" id="events_button"> EVENTS DETAILS</button></span></h4>
        <p class="media_title"> Catogery : Music <span><img src="img/banner/flag.png"></span> <strong>DUBAI</strong></p>

        <p class="address"><span><img src="img/banner/address.png"></span> 642 obie way suite 097, Mayanaanab, Dubai</p>
      </div>
    </div>
    </a>

            </div>








    <div class="event_bg">

               
                    <div class="event_box">
          <ul>
            <li><a href="#">25-27
                <br>
               <span> April</span>
            </a></li>
           
          </ul>

     </div>
          

                 <!-- Nested media object -->    
                 
                   <a href="events.html"> 
    <div class="media">
      <div class="media-left">
         <img src="img/banner/event2.png" alt="banner">
      </div>
      <div class="media-body">
        <h4 class="media-heading">Deva Concert - Melody Deva The <span><button type="button" class="btn btn-primary" id="events_button"> EVENTS DETAILS</button></span></h4>
        <p class="media_title"> Catogery : Music <span><img src="img/banner/flag.png"></span> <strong>DUBAI</strong></p>

        <p class="address"><span><img src="img/banner/address.png"></span> 642 obie way suite 097, Mayanaanab, Dubai</p>
      </div>
    </div>
    
    </a>

            </div>








 <div class="event_bg">

               
                    <div class="event_box">
          <ul>
            <li><a href="#">25-27
                <br>
               <span> April</span>
            </a></li>
           
          </ul>

     </div>
          

                 <!-- Nested media object -->  
                 
                   <a href="events.html"> 
    <div class="media">
      <div class="media-left">
         <img src="img/banner/event4.png" alt="banner">
      </div>
      <div class="media-body">
        <h4 class="media-heading"> AR Rahman Concer-MahaRahman<span><button type="button" class="btn btn-primary" id="events_button"> EVENTS DETAILS</button></span></h4>
        <p class="media_title"> Catogery : Music <span><img src="img/banner/flag.png"></span> <strong>DUBAI</strong></p>

        <p class="address"><span><img src="img/banner/address.png"></span> 642 obie way suite 097, Mayanaanab, Dubai</p>
      </div>
    </div>
    
    </a>

            </div>












        </div>
            </div>
        </div>
    </section>
    <!-- Service end -->

   


   


   


    <!-- Testimonial area start -->



    <!---
    <section class="testimonials pt-95 pb-100" data-overlay="9" style="background-image: url('img/bg/bg-2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="fancy-head text-center relative z-5 mb-40">
                        <h5 class="line-head mb-15 ">
                  <span class="line before "></span>
                    Testimonials
                  <span class="line after"></span>
                </h5>
                        <h1 class="white">We Love Our Clients</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme testimonial-slider">
                        <div class="item">
                            <div class="testimonial-div text-center">
                                <div class="client-image">
                                    <img src="img/testimonial/client1.jpg" class="mt-10 mb-45 rounded-circle" alt="">
                                </div>
                                <div class="client-texts">
                                    <h3 class="green mb-20 f-700 italic">“Best Business Service Ever”</h3>
                                    <p class="white mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend sit amet ligula et mattis. Morbi aliquam vitae metus at aliquam. Etiam dui felis, tempus id ornare vel, consectetur in risus.</p>
                                </div>
                                <div class="client-info">
                                    <ul class="stars-rate" data-starsactive="5">
                                        <li class=" text-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h6 class="client-name green f-700">John Doe</h6>
                                    <p class="white mb-0">CEO, Abc Company</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-div text-center">
                                <div class="client-image">
                                    <img src="img/testimonial/client2.jpg" class="mt-10 mb-45 rounded-circle" alt="">
                                </div>
                                <div class="client-texts">
                                    <h3 class="green mb-20 f-700 italic">“They're Exactly What I Had in Mind”</h3>
                                    <p class="white mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend sit amet ligula et mattis. Morbi aliquam vitae metus at aliquam. Etiam dui felis, tempus id ornare vel, consectetur in risus.</p>
                                </div>
                                <div class="client-info">
                                    <ul class="stars-rate" data-starsactive="5">
                                        <li class=" text-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h6 class="client-name green f-700">Jessica David</h6>
                                    <p class="white mb-0">CEO, Abc Company</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-div text-center">
                                <div class="client-image">
                                    <img src="img/testimonial/client3.jpg" class="mt-10 mb-45 rounded-circle" alt="">
                                </div>
                                <div class="client-texts">
                                    <h3 class="green mb-20 f-700 italic">“Beautiful and Functional”</h3>
                                    <p class="white mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend sit amet ligula et mattis. Morbi aliquam vitae metus at aliquam. Etiam dui felis, tempus id ornare vel, consectetur in risus.</p>
                                </div>
                                <div class="client-info">
                                    <ul class="stars-rate" data-starsactive="5">
                                        <li class=" text-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h6 class="client-name green f-700">Lissa M</h6>
                                    <p class="white mb-0">CEO, Abc Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="client-logos z-10 pt-60 mt-55">
                        <div class="owl-carousel owl-theme client-logo-slide">
                            <div class="item">
                                <img src="img/clients/1.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/clients/2.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/clients/3.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/clients/4.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/clients/1.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/clients/2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --->
    <!-- Testimonial area end -->

    <!-- Blog/news letter area start -->
    
<section class="Our_Event">
    <div class="container">
                  <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="half_next_events">
                     
                        <h2>Our Event Sponsors</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s </p>
                        
                        
                       
                    </div>
                </div>


                <div class="col-md-12">
                    
                        
                         <div class="platium_Sponsors">
                            
                            <h2>Platinum Sponsors</h2>
                            <p>Conference dolor sit amet, contsectetur adipisicing elit, sed do eiusmod tempor</p>
                            
                            <ul>
                                <li> <img src="img/banner/aretch.png"> </li>
                                 <li> <img src="img/banner/bigsoft.png"> </li>
                                  <li> <img src="img/banner/eventitta.png"> </li>
                            </ul>
                        </div>
                        
                        
                        <div class="platium_Sponsors">
                            
                             <h2>gold Sponsors</h2>
                            <p>Conference dolor sit amet, contsectetur adipisicing elit, sed do eiusmod tempor</p>
                            
                             <ul>
                                <li> <img src="img/banner/zerox.png"> </li>
                                 <li> <img src="img/banner/event_now.png"> </li>
                                  <li> <img src="img/banner/peboot.png"> </li>
                            </ul>
                            
                        </div>
                        
                  
             
                 </div>
        </div>
    </div>
</section>
   


  <section>
   
     <div class="col-lg-12 col-md-12 text-center">
                      <div class="gallery-title">
                    <div class="half_next_events">
                     
                        <h2>GALLERY</h2>
                        
                    </div>
                </div>
                  </div>


    <!---<div class="container-fluid">  -->
        <div class="gallery_box">
      <a class="example-image-link" href="img/team/g1.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
      <img class="example-image" src="img/team/g1.png" alt=""/></a>
      <a class="example-image-link" href="img/team/g2.png" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard.">
      <img class="example-image" src="img/team/g2.png" alt="" /></a>
      <a class="example-image-link" href="img/team/g3.png" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing.">
      <img class="example-image" src="img/team/g3.png" alt="" /></a>
      <a class="example-image-link" href="img/team/g4.png" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close.">
      <img class="example-image" src="img/team/g4.png" alt="" /></a>


      <a class="example-image-link" href="img/team/g5.png" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close.">
      <img class="example-image" src="img/team/g5.png" alt="" /></a>


       <a class="example-image-link" href="img/team/g6.png" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close.">
      <img class="example-image" src="img/team/g6.png" alt="" /></a>

        <a class="example-image-link" href="img/team/g11.png" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close.">
      <img class="example-image" src="img/team/g11.png" alt="" /></a>


        <a class="example-image-link" href="img/team/g12.png" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close.">
      <img class="example-image" src="img/team/g12.png" alt="" /></a>
    </div>
    
     <!--</div>  -->
  </section>



<section  class="contact_wrapper">
    <div class="container">
     <div class="row">
        <div class="col-md-5">

            <div class="contact_content">
                <h2><strong>Anything</strong><br>
                    to say?
                </h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                </p>


              <!--- <div class="contact">
                              <button type="button" class="btn btn-primary" id="read_more_but">SEND NOW
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                        </div>   --->
            </div>
        </div>


        <div class="col-md-7">
            <div class="footer_contact_form">
                
         <form  class="form-inline"   method="post" action="php_helpers/_contact-process.php"  novalidate>
              <div class="cf_response"></div>
              
    <div class="form-group">
      <label for="usr" style="color:#e06464; font-size: 16px;  font-family:RobotoCondensed-Light;"> YOUR NAME:</label>
      <input type="text" class="form-control" id="name" name="name" >
       <p id="nmmsg" class="red"></p>	
    </div>
    
    
   
    
     <div class="form-group">
      <label for="usr" style="color:#e06464; font-size: 16px;  font-family:RobotoCondensed-Light;"> Phone Number:</label>
      <input type="text" class="form-control"    id="phone" name="phone" >
        <p id="phmsg" class="red"></p>
    </div>
    
     <div class="form-group">
      <label for="pwd" style="color:#e06464; font-size: 16px;  font-family:RobotoCondensed-Light;">E-MAIL:</label>
      <input type="text" class="form-control"   id="email" name="email">
      	<p id="msg" class="red"></p>
    </div>
 <label for="pwd" style="color:#e06464; font-size: 16px;  font-family:RobotoCondensed-Light; padding-top:30px;"></label>
<div class="form-group">
 
 <textarea cols="82" rows="7" placeholder="message" name="message"></textarea>
 
 
</div>

  <button type="submit" onclick="return validate()" class="btn btn-primary" id="contact_button" >SEND NOW
   <i class="fa fa-angle-double-right" aria-hidden="true"></i></button
  </button>
  </form>
            </div>
        </div>
     </div>
    </div>
</section>






<section class="footer_wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer_logo">
      <img src="img/logo/footer_logo.png" alt="" class="footer_logo_sec">
      <p>copyright    &copy;      2019</p>

       <h6>All Rights Reserved.</h6>
      </div>
        </div>

        <div class="col-md-6">
            <div class="footer-right_banner">
                <img src="img/team/social_icons.png" alt="footer">
             </div>
        </div>
         </div>

          </div>
      

    </footer>



    </section>
    <!-- Footer area end -->
    <!-- ********************* -->
    

    <!-- Theme skins -->
   <!-- <div class="color-theme transition-4">
        <div class="theme-switch">
            <span class="switch">
              <i class="fas fa-sliders-h"></i>
            </span>
        </div>
        <div class="theme-colors transition-4">
            <h4>Theme Skins:</h4>
            <ul class="theme-ul">
                <li>
                    <span class="each-color co1" data-color="css/color.css">
                        <img src="img/co-1.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co2" data-color="css/color2.css">
                        <img src="img/co-2.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co3" data-color="css/color3.css">
                        <img src="img/co-3.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co4" data-color="css/color4.css">
                        <img src="img/co-4.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co5" data-color="css/color5.css">
                        <img src="img/co-5.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co6" data-color="css/color6.css">
                        <img src="img/co-6.png" alt="">
                    </span>
                </li>
            </ul>
            <p class="fs-13 "><b>Note: </b>This will not change any image colors (logo, icon colors..etc)</p>
        </div>
    </div>  -->
    <!-- Theme skins -->
    <!-- JS Files -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/lightslider.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/main.js"></script>
 <link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>
<script src="dist/js/lightbox-plus-jquery.min.js"></script>
  
</body>

<!---

<link rel="stylesheet" href="viewbox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="jquery.viewbox.min.js"></script>
--->



</html>