<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>EVE-voyage</title>
     <link rel="stylesheet" href="immigrer.css">
</head>

<body>

     <?php 
     include('header.php')
     ?>
     <br>

     <!---=======================================================
                         Bannière
     =============================================================---->
     <header class="banner">
          <h1>Bienvenue chez EVE</h1>
          <p>Votre partenaire pour des aventures inoubliables dans les quatre coins du monde en toute sécurité dans la
               légalité
          <div class="subscribe">
               <a href="#singIn" class="sinscrire">Les destinations</a>
               <a href="signUp" class="seconnecter"> Simuler un devis</a>
          </div>
          </p>
     </header>

     <!---      
               ============================================================
                               Section texte et image
               =============================================================
     ---->

     <section class=" content-section">
          <div class="text-content">
               <h2>Explorez le monde avec nous</h2>
               <p>Nous vous aidons à planifier votre expatriation de A à Z. Découvrez des destinations de
                    rêve, des
                    conseils pratiques, et des offres exclusives.</p>
               <div class="destinations">
                    <a href="#">Offres exclusives</a>
               </div>
          </div>
          <div class="image-content">
               <img src="img/best-choices.jpeg" alt="Image de voyage">
          </div>
     </section>

     <!---      
               ===================================================================
                                Architecture pourquoi notre agence?
               ===================================================================
     ---->

     <section class="features">
          <h2>Pourquoi choisir notre agence?</h2>

          <div class="feature">
               <i class="fas fa-handshake"></i>
               <h3>Expérience exceptionnelle</h3>
               <p>Nos conseillers s'occupent de vos démarche éfficacement dans le respect règles et u délais.</p>
          </div>
          <div class="feature">
               <i class="fas fa-globe"></i>
               <h3>Destinations variées</h3>
               <p>Nous offrons des voyages vers plusieurs destinations dans le monde entier.</p>
          </div>
          <div class="feature">
               <i class="fas fa-plane"></i>
               <h3>Voyages personnalisés</h3>
               <p>Nos conseillers planifie votre voyage et votre accueil à
                    destination pour une expérience enthousiate.
               </p>
          </div>
          <div class="feature">
               <i class="fas fa-star"></i>
               <h3>Service 5 étoiles</h3>
               <p>Profitez d'un service client exceptionnel tout au long de votre voyage.</p>
          </div>
          <div class="feature">
               <i class="fas fa-shield-alt"></i>
               <!-- Exemple d'icône de bouclier, à remplacer par une icône pertinente -->
               <h3>Fiabilité garantie</h3>
               <p>Nous assurons une fiabilité optimale pour répondre à toutes vos attentes en toute
                    sécurité.</p>
          </div>
     </section>


     <!---=======================================================
                         Foother
     =============================================================----> <?php 
     include('foother.php')
     ?>
</body>

</html>