<?php include("vendor/cnn/conn.php"); 

if (isset($_POST["submit_demo"])) {
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone_number = $_POST["phone_number"];

  $_name = mysqli_real_escape_string($conn,$name);
  $_email = mysqli_real_escape_string($conn,$email);
  $_phone_number = mysqli_real_escape_string($conn,$phone_number);

  $sql = "INSERT INTO demo (name_demo, email, phone_number)
VALUES ('$_name', '$_email', '$_phone_number')";

if (mysqli_query($conn, $sql)) {

} else {
mysqli_error($conn);
}

mysqli_close($conn);


}


if (isset($_POST["submit_contact"])) {

  $name_contact = $_POST["name_contact"];
  $email_contact = $_POST["email_contact"];
  $message_contact = $_POST["message_contact"];

  $_name_contact = mysqli_real_escape_string($conn,$name_contact);
  $_email_contact = mysqli_real_escape_string($conn,$email_contact);
  $_message_contact = mysqli_real_escape_string($conn,$message_contact);
  
  $sql = "INSERT INTO contact (name_contact, email_contact, message_contact)
VALUES ('$_name_contact', '$_email_contact', '$_message_contact')";

if (mysqli_query($conn, $sql)) {
  header("Location: thx.html");
} else {
mysqli_error($conn);
}

mysqli_close($conn);

}

?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css" rel="stylesheet"/>
    <title>amazing School</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="icon" href="assets/images/icon.png">

  </head>

<body>



  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.html">
      <img  src="assets\images\logo school Managing.png" alt="logo school Managing" style="width: 245px; height: 61px; margin-bottom: 3%;">
        </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
  
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
          </ul>
        </li>
        <li><a href="#section3">Start your Free Trial</a></li>
        <li><a href="#section4">Works for</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->

        <li><a href="#section6">Contact</a></li>

        <li class="has-submenu"><a href="#">Languages</a>
          <ul class="sub-menu">
            <li id="en"><a href="#"><span class="fi fi-us" style="font-size: 21px;padding-bottom: 5px;"></span> English</a></li>
            <li id="fr" ><a href="/Fr"> <span class="fi fi-fr" style="font-size: 21px;padding-bottom: 5px;"></span> French</a></li>
          </ul>
        </li>

      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Managing schools has never been so easy</h6>
              <h2><em>amazing</em> School</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-user"></i>Admission</h4>
              </div>
              <div class="content-hide">
              <p>Streamlined admission management that digitizes, automates and upgrades all aspects of the admission process cycle.</p>
                <p class="hidden-sm">Streamlined admission management that digitizes, automates and upgrades all aspects of the admission process cycle.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Student</h4>
              </div>
              <div class="content-hide">
              <p>Create an online representation of your classes, group students into classes.Opening doors for pre-registration via the registration form </p>
                <p class="hidden-sm">Create an online representation of your classes, group students into classes.Opening doors for pre-registration via the registration form </p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-usd"></i>Payments</h4>
              </div>
              <div class="content-hide">
              <p>Manage monthly or annual payments by scanning QR code.Track all the students who are late in paying the month's fees.Keep track of your monthly or annual losses...</p>
                <p class="hidden-sm">Manage monthly or annual payments by scanning QR code.Track all the students who are late in paying the month's fees.Keep track of your monthly or annual losses...</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose amazing School?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>About us</a></li>
              <li><a href='#tabs-2'>Flexibility</a></li>
              <li><a href='#tabs-3'>Security</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img " src="assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>About us</h4>
                    <p>Regardless of the size of your school, academy or studio amazing School helps you efficiently manage all of your processes.<br><br>

                      Be it school, dance studio, gym, academy or any educational institution all of your administrative operations regarding classes, Payments and students are now easily supported.<br>
                      
                      An easy to use, affordable solution for any educational organization.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img class="" src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Flexibility</h4>
                    <p>Create your classes with multiple groups, enroll your students and assign them to classes. Manage payments and get started, in minutes.</p> 

                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img  class="" src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Security</h4>
                    <p>Protecting you and your information is our priority amazing School it protected from more than 1000+ vulnerabilities.With monthly tracking and maintenance in case of new vulnerabilities...
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>You’re one step closer to a better school management program.<br> <em>Βook your demo today</em></h4>
              <div class="counter">

                <div class="days">
                  <div class="value">00</div>
                  <span>DD</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>HH</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>MM</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>SS</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Once you fill out the form, <em>our support team </em> will contact you </h6>
            </div>
            <form id="contact" action="thx.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name"  required>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email"  required>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone_number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number (+123552101)" >
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" name="submit_demo" id="form-submit" class="button">Get it now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Works for any type of school</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img class="" src="assets/images/Vocational-School-amazing-SCHOOL.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Vocational School</h4>
              <p>Offering secondary or post-secondary education on vocational or technical skills, to help people seek employment on specific jobs..</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="Author 1">
              </div>
              
            </div>
          </div>
          <div class="item">
            <img class="" src="assets/images/music-School-amazing-SCHOOL.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Music School</h4>
              <p><br>Includes school of music, music academy, music faculty, college of music, music department and conservatory.<br></p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              
            </div>
          </div>
          <div class="item">
            <img class="" src="assets/images/Faith-based-School-amazing-SCHOOL.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Faith-based School</h4>
              <p>Offering the general education of a K-12 school, with a particular religious character, or formal links with a faith-based organization.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              
            </div>
          </div>
          <div class="item">
            <img class="" src="assets/images/Summer-School-amazing-SCHOOL.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Summer School</h4>
              <p>Usually sponsored programs of limited duration, providing structured educational activities during the summer break.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
              </div>
              
            </div>
          </div>
          <div class="item">
            <img class="" src="assets/images/Preschool-AMIZING-SCHOOL.jpg" alt="">
            <div class="down-content">
              <h4>Preschool</h4>
              <p>Also known as play-school, nursery or pre-primary school, preschool is offering early education for children, before primary education.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
             
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  

<section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(assets/images/sec.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>SECURITY</h2>
        </div>
      </div>
      <div class="col-md-6 ">
        <article class="video-item">
          <div class="video-caption">
            <h4>SPY page - Track events</h4>
          </div>
          
          <figure>
            <img class="zoomable" src="assets/images/spy.png" alt="" srcset="">
          </figure>
        </article>

      </div>
      <div class="col-md-6 align-self-center">
        <div class="left-content">

          <h4>Protecting you and your information is our priority <em>amazing School</em> it protected</h4>
          <p> 
            - from more than 1000 vulnerabilities. <br>
            - from password guessing (Access is blocked in case of 3 unsuccessful login attempts).<br>
            - The program is equipped with monitoring all the activities that have been carried out.<br>
            - You can download your database with the click of a button after entering a special password.<br>
          - choosing the role of each person
          If you choose (admin) it will enable him to access all the features in the program
          In the case of (administrator), this person will be able to access all the features except for everything related to payment and spy page (also he will not be able to know the statistics of the day, month and year....)
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(assets/images/choosing-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>STATISTICS</h2>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            
            <h4><em>amazing School</em> provides you with an easy way to keep track of your statistics.</h4>
            <p>- track daily, monthly, and yearly profits and losses. <br>
              - Keep track of all payments made. <br>
              - You can return at any time to last year's earnings. <br>
              - You can pay your school fees to keep track of material losses.</p>
            
          </div>
        </div>
 
        
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Home page</h4>
            </div>
            <figure>
              <img class="zoomable" src="assets/images/home.png" alt="" srcset="">
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(assets/images/manag.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>MANAGEMENT</h2>
          </div>
        </div>
        <div class="col-md-6 ">
          <article class="video-item">
            <div class="video-caption">
              <h4>Payment page</h4>
            </div>
            <figure>
              <img class="zoomable" src="assets/images/payement.png" alt="" srcset="">

            </figure>
          </article>
  
        </div>
        <style>
          #more{
            text-transform: inherit !important;
           
          }
          #more {display: none;}

          #myBtn{
            background-color: #f5a425 !important;
    border-color: #f5a425 !important;
          }


        </style>
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            
            <h4>If you are looking to manage classes, activities, and payments, <em>amazing School</em> is the best choice for you.</h4>
            <span>you can :</span>
            <p>- add class names with group names (in case there is more than one group in the same class)<br>
              - add extra-curricular activities that are electively paid with the possibility of linking activities to the class (this way you will be able to control the price that the student will pay in each semester).<br>
              - register a group of students in their classroom<br>
              - Generate a special QR code for each student<br><span  id="dots">...</span><span id="more">
              - transfer students from one classroom to another or from one group to another<br>
              - find all the students who are late in paying the month's fees<br>
              - scan a student's qr by camera (phone or computer) and you will be able to pay the monthly fee or the price of activities (You can also use a special QR scanning device).<br>
              - enter the losses that have been paid related to your school (in order to be divided from statistics).<br>
              - View student information<br>
              - Add discount.....<br>
            </span> </p> 
            <button class="btn btn-warning" onclick="redmore1()" id="myBtn"><em>Read more</em></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
    <section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(assets/images/choosing-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>CUSTOMIZATION</h2>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="left-content">
              <h4><em>amazing School</em> gives you room for creativity and modification in settings.</h4>
              <span>you can :</span>

              <p>- Change school year.<br>- Change colors.<br>- Change logo.<br>- Change slogan. <br>- Dark & Light Mode.
              </p>
            </div>
          </div>
   
          
          <div class="col-md-6">
            <article class="video-item">
              <div class="video-caption">
                <h4>Settings page</h4>
              </div>
              <figure>
                <img class="zoomable" src="assets/images/edit.png" alt="" srcset="">
              </figure>
            </article>
          </div>
        </div>
      </div>
    </section>
  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        
        
      </div>
      <div class="row">
        <div class="col-md-12">
           
        <form id="contact" action="thx.php" method="POST">
          <div class="row">
            <div class="col-md-6">
                <fieldset>
                  <input name="name_contact" type="text" class="form-control" id="name" placeholder="Your Name"  required>
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="email_contact" type="text" class="form-control" id="email" placeholder="Your Email"  required>
                </fieldset>
              </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message_contact" rows="6" class="form-control" id="message" placeholder="Your message..."  required></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" name="submit_contact" id="form-submit" class="button">Send Message Now</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022 by amazing School 
          
           | Design: <a href="#" rel="sponsored" target="_parent">Adil chergui</a></p> 

<a href="#"><span class="fi fi-us" style="font-size: 23px;margin-right: 5%;"></span></a>
<a href="Fr"><span class="fi fi-fr" style="font-size: 23px;"></span></a>
     
<br>
<br>
<br>
        </div>
      </div>
    </div>
  </footer>
   <style> 
   

.loader-wrapper {
  width: 100%;
  height: 100%;
  position: fixed;
z-index: 20;
  top: 0;
  left: 0;
  background-color: #242f3f;
  display:flex;
  justify-content: center;
  align-items: center;
}
.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 2s infinite ease;
}
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% { transform: rotate(0deg);}
  25% { transform: rotate(180deg);}
  50% { transform: rotate(180deg);}
  75% { transform: rotate(360deg);}
  100% { transform: rotate(360deg);}
}

@keyframes loader-inner {
  0% { height: 0%;}
  25% { height: 0%;}
  50% { height: 100%;}
  75% { height: 100%;}
  100% { height: 0%;}
}
   </style>

<div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    
    <script>

	
function redmore1() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
<script src="http://static.tumblr.com/xz44nnc/o5lkyivqw/jquery-1.3.2.min.js"></script>

<script>
$('img.zoomable').css({cursor: 'pointer'}).live('click', function () {
  var img = $(this);
  var bigImg = $('<img />').css({
    'max-width': '57%',
    'max-height': '97%',
    'display': 'inline'
  });
  bigImg.attr({
    src: img.attr('src'),
    alt: img.attr('alt'),
    title: img.attr('title')
  });
  var over = $('<div />').text(' ').css({
    'height': '100%',
    'width': '100%',
    'margin-top': '10px',
    'background': 'rgba(0,0,0,.82)',
    'position': 'fixed',
    'top': 0,
    'left': 0,
    'opacity': 0.0,
    'cursor': 'pointer',
    'z-index': 9999,
    'text-align': 'center'
  }).append(bigImg).bind('click', function () {
    $(this).fadeOut(300, function () {
      $(this).remove();
    });
  }).insertAfter(this).animate({
    'opacity': 1
  }, 300);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>

    $('#fr').click(function(){
  window.location = 'Fr';
});
    $('#en').click(function(){
  window.location = '#';
});

        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>
</html>