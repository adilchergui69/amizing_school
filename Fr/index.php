<?php include("../vendor/cnn/conn.php"); 

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
    header("Location: ../thx.html");
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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">
    <link rel="icon" href="../assets/images/icon.png">

  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="../index.html">
      <img src="../assets\images\logo school Managing.png" alt="logo school Managing" style="width: 245px; height: 61px; margin-bottom: 3%;">
        </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Accueil</a></li>
  
        <li class="has-submenu"><a href="#section2">À propos de nous</a>
          <ul class="sub-menu">
            <li><a href="#section2">Qui nous?</a></li>
          </ul>
        </li>
        <li><a href="#section3">Commencer votre essai gratuit</a></li>
        <li><a href="#section4">Fonctionne pour</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->

        <li><a href="#section6">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="../assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Gérer des écoles n'a jamais été aussi facile</h6>
              <h2><em>amazing</em> School</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Découvrir plus</a></div>
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
              <p>Une gestion des admissions simplifiée qui numérise, automatise et met à niveau tous les aspects du cycle du processus d'admission.</p>
                <p class="hidden-sm">Une gestion des admissions simplifiée qui numérise, automatise et met à niveau tous les aspects du cycle du processus d'admission.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Étudiante</h4>
              </div>
              <div class="content-hide">
              <p>Créez une représentation en ligne de vos classes, regroupez les élèves en classes. Ouverture des portes de pré-inscription via le formulaire d'inscription. </p>
                <p class="hidden-sm">Créez une représentation en ligne de vos classes, regroupez les élèves en classes. Ouverture des portes de pré-inscription via le formulaire d'inscription. </p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-usd"></i>Paiements</h4>
              </div>
              <div class="content-hide">
              <p>Gérez les paiements mensuels ou annuels en scannant le code QR.Suivez tous les étudiants qui sont en retard dans le paiement des frais du mois.Suivez vos pertes mensuelles ou annuelles...</p>
                <p class="hidden-sm">Gérez les paiements mensuels ou annuels en scannant le code QR.Suivez tous les étudiants qui sont en retard dans le paiement des frais du mois.Suivez vos pertes mensuelles ou annuelles...</p>
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
            <h2>Pourquoi choisir amazing School?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Qui sommes-nous ?</a></li>
              <li><a href='#tabs-2'>flexibilité</a></li>
              <li><a href='#tabs-3'>Sécurité</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="../assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Qui sommes-nous ?</h4>
                    <p>Quelle que soit la taille de votre école, académie ou studio, amazing School vous aide à gérer efficacement tous vos processus.<br><br>

                    Qu'il s'agisse d'une école, d'un studio de danse, d'un gymnase, d'une académie ou de tout autre établissement d'enseignement, toutes vos opérations administratives concernant les cours, les paiements et les étudiants sont désormais facilement pris en charge.<br>
                      
                    Une solution facile à utiliser et abordable pour toute organisation éducative.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="../assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>flexibilité</h4>
                    <p>Créez vos classes avec plusieurs groupes, inscrivez vos étudiants et affectez-les à des classes. Gérez les paiements et démarrez en quelques minutes.</p> 

                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="../assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Sécurité</h4>
                    <p>La protection de vous et de vos informations est notre priorité. Amazing School, elle est protégée de plus de 1000+ vulnérabilités.Avec un suivi mensuel et une maintenance en cas de nouvelles vulnérabilités...
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
              <h4>Vous êtes un pas de plus vers un meilleur programme de gestion scolaire.<br> <em>Réservez votre démo aujourd'hui</em></h4>
              <div class="counter">

                <div class="days">
                  <div class="value">00</div>
                  <span>Journées</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Heures</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>secondes</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Une fois que vous aurez rempli le formulaire, <em>notre équipe d'assistance </em> vous contactera </h6>
            </div>
            <form id="contact" action="../thx.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="votre nom"  required>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="votre Email"  required>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone_number" type="text" class="form-control" id="phone-number" placeholder="Votre téléphone (+123552101)" >
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" name="submit_demo" id="form-submit" class="button">Obtenez le maintenant</button>
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
          <h2>Fonctionne pour tout type d'école</h2>
                  </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="../assets/images/Vocational-School-amazing-SCHOOL.jpg" alt="Course #1">
            <div class="down-content">
            <h4>École professionnelle</h4>
               <p>Offrir une formation secondaire ou post-secondaire sur des compétences professionnelles ou techniques, pour aider les gens à chercher un emploi dans des emplois spécifiques..</p>
              <div class="author-image">
                <img src="../assets/images/author-01.png" alt="Author 1">
              </div>
            </div>
          </div>
          <div class="item">
            <img src="../assets/images/music-School-amazing-SCHOOL.jpg" alt="Course #2">
            <div class="down-content">
            <h4>École de musique</h4>
               <p><br>Comprend l'école de musique, l'académie de musique, la faculté de musique, le collège de musique, le département de musique et le conservatoire.<br></p>
              <div class="author-image">
                <img src="../assets/images/author-02.png" alt="Author 2">
              </div>
            </div>
          </div>
          <div class="item">
            <img src="../assets/images/Faith-based-School-amazing-SCHOOL.jpg" alt="Course #3">
            <div class="down-content">
            <h4>École confessionnelle</h4>
               <p>Offrir l'enseignement général d'une école K-12, avec un caractère religieux particulier, ou des liens formels avec une organisation confessionnelle.</p>
              <div class="author-image">
                <img src="../assets/images/author-03.png" alt="Author 3">
              </div>
            </div>
          </div>
          <div class="item">
            <img src="../assets/images/Summer-School-amazing-SCHOOL.jpg" alt="Course #4">
            <div class="down-content">
            <h4>École d'été</h4>
               <p>Généralement des programmes sponsorisés d'une durée limitée, proposant des activités éducatives structurées pendant les vacances d'été.</p>
              <div class="author-image">
                <img src="../assets/images/author-04.png" alt="Author 4">
              </div>
            </div>
          </div>
          <div class="item">
            <img src="../assets/images/Preschool-AMIZING-SCHOOL.jpg" alt="">
            <div class="down-content">
            <h4>Préscolaire</h4>
               <p>Aussi connu sous le nom d'école maternelle, maternelle ou préprimaire, le préscolaire offre une éducation précoce aux enfants, avant l'enseignement primaire.</p>
              <div class="author-image">
                <img src="../assets/images/author-05.png" alt="">
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  

<section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(../assets/images/sec.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>SÉCURITÉ</h2>
        </div>
      </div>
      <div class="col-md-6 ">
        <article class="video-item">
          <div class="video-caption">
            <h4>SPY page </h4>
          </div>
          
          <figure>
            <img src="../assets/images/spy-amazing-SCHOOL.jpg" alt="" srcset="">
          </figure>
        </article>

      </div>
      <div class="col-md-6 align-self-center">
        <div class="left-content">

        <h4>Vous protéger, vous et vos informations, est notre priorité <em>amazing School</em> elle a protégé</h4>
           <p>
             - de plus de 1000 vulnérabilités. <br>
             - de deviner le mot de passe (l'accès est bloqué en cas de 3 tentatives de connexion infructueuses).<br>
             - Le programme est équipé d'un suivi de toutes les activités qui ont été réalisées.<br>
             - Vous pouvez télécharger votre base de données en un clic après avoir entré un mot de passe spécial.<br>
           - choisir le rôle de chacun
           Si vous choisissez (admin), cela lui permettra d'accéder à toutes les fonctionnalités du programme
           Dans le cas de (administrateur), cette personne pourra accéder à toutes les fonctionnalités sauf pour tout ce qui concerne le paiement et la page d'espionnage (de plus il ne pourra pas connaître les statistiques du jour, du mois et de l'année....)
           </p>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(../assets/images/choosing-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>STATISTIQUES</h2>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            
          <h4><em>amazing School</em> vous offre un moyen simple de suivre vos statistiques.</h4>
             <p>- suivre les profits et les pertes quotidiens, mensuels et annuels. <br>
               - Gardez une trace de tous les paiements effectués. <br>
               - Vous pouvez revenir à tout moment sur les gains de l'année dernière. <br>
               - Vous pouvez payer vos frais de scolarité pour garder une trace des pertes matérielles.</p>
            
          </div>
        </div>
 
        
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Page d'accueil</h4>
            </div>
            <figure>
              <img src="../assets/images/home-page-amazing-SCHOOL.jpg" alt="" srcset="">
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(../assets/images/manag.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>GESTION</h2>
          </div>
        </div>
        <div class="col-md-6 ">
          <article class="video-item">
            <div class="video-caption">
              <h4>Page de paiement</h4>
            </div>
            <figure>
              <img src="../assets/images/payement-amazing-SCHOOL.jpg" alt="" srcset="">

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
            
          <h4>Si vous cherchez à gérer des cours, des activités et des paiements, <em>amazing School</em> est le meilleur choix pour vous.</h4>
            <span>vous pouvez :</span>
            <p>- ajouter des noms de classe avec des noms de groupe (au cas où il y aurait plus d'un groupe dans la même classe)<br>
              - ajouter des activités parascolaires qui sont payées au choix avec la possibilité de lier des activités à la classe (de cette façon, vous pourrez contrôler le prix que l'étudiant paiera à chaque semestre).<br>
              - inscrire un groupe d'élèves dans sa classe<br>
              - Générez un code QR spécial pour chaque étudiant<br><span id="dots">...</span><span id="more">
              - transférer les élèves d'une classe à une autre ou d'un groupe à un autre<br>
              - trouver tous les étudiants qui sont en retard dans le paiement des frais du mois<br>
              - scannez le qr d'un étudiant par caméra (téléphone ou ordinateur) et vous pourrez payer les frais mensuels ou le prix des activités (vous pouvez également utiliser un dispositif spécial de numérisation QR).<br>
              - entrez les pertes qui ont été payées liées à votre école (afin d'être séparées des statistiques).<br>
              - Afficher les informations sur les étudiants<br>
              - Ajouter une remise.....<br>
            </span> </p> 
            <button class="btn btn-warning" onclick="redmore1()" id="myBtn"><em>Lire la suite</em></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
    <section class="section video" data-section="section5" style="background-image: linear-gradient(rgb(0 14 52 / 68%), rgb(44 21 10 / 50%)),url(../assets/images/choosing-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>PERSONNALISATION</h2>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="left-content">
            <h4><em>amazing School</em> vous laisse libre cours à votre créativité et à la modification des paramètres.</h4>
               <span>vous pouvez :</span>

               <p>- Changer l'année scolaire.<br>- Changer les couleurs.<br>- Changer le logo.<br>- Changer le slogan. <br>- Mode sombre & clair.
              </p>
            </div>
          </div>
   
          
          <div class="col-md-6">
            <article class="video-item">
              <div class="video-caption">
                <h4>Page des paramètres</h4>
              </div>
              <figure>
                <img src="../assets/images/stting-amazing-SCHOOL.jpg" alt="" srcset="">
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
            <h2>Restons en contact</h2>
          </div>
        </div>
        
        
      </div>
      <div class="row">
        <div class="col-md-12">
           
        <form id="contact" action="../thx.php" method="POST">
          <div class="row">
            <div class="col-md-6">
                <fieldset>
                  <input name="name_contact" type="text" class="form-control" id="name" placeholder="votre nom"  required>
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="email_contact" type="text" class="form-control" id="email" placeholder="Votre e-mail"  required>
                </fieldset>
              </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message_contact" rows="6" class="form-control" id="message" placeholder="Votre message..."  required></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" name="submit_contact" id="form-submit" class="button">Envoyer</button>
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
          <p><i class="fa fa-copyright"></i> Copyright 2022 par amazing School 
          
           | Désign: <a href="#" rel="sponsored" target="_parent">Adil chergui</a></p>
           <a href="../"><span class="fi fi-us" style="font-size: 23px;margin-right: 5%;"></span></a>
<a href="#"><span class="fi fi-fr" style="font-size: 23px;"></span></a>
<br>
<br>
<br>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/lightbox.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="../assets/js/video.js"></script>
    <script src="../assets/js/slick-slider.js"></script>
    <script src="../assets/js/custom.js"></script>
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
</body>
</html>