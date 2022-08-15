<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$msg = $_POST['msg'];

	
		$sql = "SELECT * FROM `login_db`.`msg` WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO `login_db`.`msg` (name, email, mobile,msg)
					VALUES ('$name', '$email', '$mobile','$msg')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! Message Recorded.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['msg'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Health Nerds</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
  </style>
  
</head>
<body>
 
 <!-- Start Header  -->
 <header >
 	 <div class="container">
 	 	<div class="logo">
			<img src="logofinal-removebg-preview.png" alt="logo" height="150px" width="150px" />
 	 		 <a href=""> <span></span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
		  <ul class="nav-area">
<li><a href="#">Home</a></li>
<li><a href="articles.html">Blog</a></li>
<li><a href="recipes.html">Recipes</a></li>
<li><a href="healthpage2.html">Health</a></li>
<li><a href="registration/registration.html">Signup</a></li>
</ul>
</div>
 	 	</div>
 	 </div>
 </header>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s">Being Healthy & <span> Fit Isn't a Fad or a Trend,</span></h1>
  	 	  <h1 class="wow slideInRight" data-wow-delay="1s"> It's a Lifestyle. <span></span></h1>
  	 </div>
  	  <!-- go down -->
  	      <a href="#about" class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  	  <!-- go down -->

  </section>
  <!-- End Home -->


 <!-- Start About -->
  <section class="about" id="about">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about1.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <a href="contactUs\index.php"><h4> Consultation</h4></a>
                       	   <p>Get a free consultion on your first registration with the best experts around the globe.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about2.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Articles</h4>
                       	   <p>We bring you the information about health and fitness,post your views,comment and subscribe!</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about3.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Health</h4>
                       	   <p>“If you want something you've never had, you must be willing to do something you've never done.” Get the best workout programs join us here.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>
 <!-- End About -->


 <!-- Start Service -->
 <section class="service" id="service">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="text box wow slideInLeft">
                  <h2>Services</h2>
                  <p>Helth Nerds is best guide for your daily workout routine plan. We provide the best to a customer that they can get from a health and fitness club. Making it more dynamic and simple to use.</p>
                  <p>Here we provide consultion free, on your first subscription for 1 week. We have come up with the world wide information on Fitness and Healthy workout procedure. Comment your ideas and share your own thoughts with us here. </p>
				  <p>If life could only be as simple as following a recipe, we'd all be much happier. However, unlike food based recipes, life doesn't provide you with standardized ingredients as each lives their unique life. Here you get the facility for getting best diet plans also.</p>
                  <a href="" class="btn">Start Now</a>
 		 	  </div>
 		 	  <div class="accordian box wow slideInRight">
 		 	  	    <div class="accordian-container active">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Workout & fittness</h4>
 		 	  	    		<span class="fa fa-angle-down"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Exercise helps people lose weight and lower the risk of some diseases. When you exercise daily, you lower the risk of developing some diseases like obesity, type 2 diabetes, high blood pressure and more. It also helps to keep your body at a healthy weight.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Meditation</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Meditation can be defined as a set of techniques that are intended to encourage a heightened state of awareness and focused attention. Meditation is also a consciousness-changing technique that has been shown to have a wide number of benefits on psychological well-being.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Recipe services</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>We have all heard the statistics about the increase in obesity from processed foods, soda, and sugars. Because of this there has been an abundance of diet tips, diet profiles, and diet books claiming to be the best diet to lose weight. Even with all the diet information, individuals struggle to maintain a healthy diet and lifestyle balance.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Group Fitness Class</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>The benefits of group exercise can often be overlooked, with fitness enthusiasts favouring a classic gym workout. 

You'll be glad to know that exercising in a group doesn't just cover group personal training sessions or classes, though - think about sports! Training for your local football team or netball team also counts… 
So, whether it's an exercise class, a sports team training session or a competitive match, it cannot be denied that there are definite benefits to working out as part of a group. 
This article is here to bust any preconceptions you may have about this exercise style, and we even have an interesting benefits of group exercise study to back up our claims! So, what are you waiting for? Scroll down and let's get right into it!</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  </div>
 		 </div>
 	</div>
 </section>
 <!-- End Service -->

<!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
		 <div class="content">
		 	  <div class="box img wow slideInLeft">
		 	  	 <img src="images/class2.png" alt="classes" />
		 	  </div>
		 	  <div class="box text wow slideInRight">
		 	  	 <a href="subscriptions.html"><h2>Subscriptions</h2></a>
		 	  	 <p>"Membership has its privileges".</p>
		 	  	<div class="class-items">
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="images/class1.jpg" alt="classes" />
                     	 <div class="price">
                     	 	 $299
                     	 </div>
                     </div>
                     <div class="item-text">
                     	  <h4>Gold premium</h4>
                     	  <p>Become our Golden Membership by clicking here!</p>
                     	  <a href="subscriptions.html">Get Details</a>
                     </div>
		 	  	 </div>
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-text">
                     	  <h4>Silver premium</h4>
                     	  <p>Become our Silver Membership by clicking here! </p>
                     	  <a href="subscriptions.html">Get Details</a>
                     </div>
                     <div class="item-img">
                     	 <img src="images/class1.jpg" alt="classes" />
                     	 <div class="price">
                     	 	 $199
                     	 </div>
                     </div>
		 	  	 </div>
		 	  	</div>
		 	  </div>
		 </div>
	</div>
</section>
<!-- End Classes -->

<!-- Start Today -->
 <section class="start-today">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="box text wow slideInLeft">
 		 	  	 <h2>Sign up Today</h2>
 		 	  	 <p>For getting our daily updates on the site sign in here!  </p>
					 <a href="login.php"><h2>Sign Up Page</h2></a>
 		 	  	 
 		 	  </div>
 		 	  <div class="box img wow slideInRight">
 		 	  	 <img src="images/gallery4.jpg" alt="start today" />
 		 	  </div>

 		 </div>
 	</div>
 </section>
<!-- End Start Today -->



<!-- Start Gallery -->
  <section class="gallery" id="gallery">
  	 <h2>Workout Gallery</h2>
  	<div class="content">
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/gallery1.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/gallery2.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/gallery3.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/gallery4.jpg" alt="gallery" />
  		 </div>
  	</div>
  </section>
<!-- End Gallery -->

 

 <!-- Start Contact -->
  <section class="contact" id="contact">
     <div class="container">
        <div class="content">
            <div class="box form wow slideInLeft">
               <form action="index.php" method="POST">
                  <input type="text" name="name" placeholder="Enter Name" value="<?php echo $name; ?>" required>
                  <input type="text" name="email" placeholder="Enter Email" value="<?php echo $email; ?>" required>
                  <input type="text" name="mobile" placeholder="Enter Mobile" value="<?php echo $mobile; ?>" required>
                  <textarea name="msg" placeholder="Enter Message" value="<?php echo $msg; ?>" required></textarea>
                  <button name="submit" type="submit">Send Message</button>
               </form>
            </div>
            <div class="box text wow slideInRight">
                 <h2>Get Connected with Our Team</h2>
                  <p class="title-p">We are available 24/7 for your service. Contact us here. </p>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span> Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019</li>
                          <li><span class="fa fa-phone"></span> 91 9933032308</li>
                          <li><span class="fa fa-envelope"></span> HealthNerds@gmail.com</li>
                      </ul>
                  </div>
                  <div class="social">
                       <a href=""><span class="fa fa-facebook"></span></a>
                       <a href=""><span class="fa fa-linkedin"></span></a>
                       <a href=""><span class="fa fa-skype"></span></a>
                       <a href=""><span class="fa fa-youtube-play"></span></a>
                  </div>
            </div>
        </div>
     </div>
  </section>
 <!-- End Contact -->



 <!-- jquery -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>
</body>
</html>






