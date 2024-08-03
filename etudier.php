<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="etudier.css">
     <title>EVE-Etudes</title>
</head>

<body>
     <?php
          include("header.php");
     ?>

     <br>

     <div class="main">
          <div class="choix">
               <ul>
                    <li><a href="#destinations">Voir les destinations</a></li>
                    <li><a href="#guide">Télécharger notre guide </a></li>
               </ul>
          </div>
     </div>


     <!---------- Block pourquoi étudier à l'étranger---------------->

     <div class="why-abroad">
          <div class="img-content">
          </div>
          <div class="text-content">
               <ul>
                    <h3>Pourquoi étudier à l'étranger</h3>
                    <li>Diplômes facilitant la mobilité et l'insertion à internationale</li>
                    <li>Découvrir des nouvelles cultures</li>
                    <li>Se faire des amis internationaux et augmenter son réseau</li>
                    <li>Se créer des opportunités professionnelles</li>
                    <li>Devenir bilingue… ou trilingue!</li>
               </ul>
          </div>
     </div>


     <!---------- Block meilleurs destinations---------------->

     <div class="best-choices">
          <div class="img-choices">
               <div class="container">
                    <h1>Liste de Pays par Région</h1>
                    <form id="regionForm" action="#" method="get">
                         <label for="region">Sélectionnez une région :</label>
                         <select id="region" name="region">
                              <option value="afrique">Afrique</option>
                              <option value="europe">Europe</option>
                              <option value="amerique">Amérique</option>
                         </select>

                         <label for="pays">Pays :</label>
                         <select id="pays" name="pays" disabled>
                              <option value="">Sélectionnez d'abord une région</option>
                         </select>
                    </form>
               </div>
          </div>

          <div class="text-content">
               <h3>Meilleures destinations pour études</h3>

               <div class="flag-grid">
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/germany-flag.jpeg" alt="Drapeau Allemagne">
                         </div>
                         <div class="flag-name">Allemagne</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/canada-flag.jpeg" alt="Drapeau Canada"></div>
                         <div class="flag-name">Canada</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/france-flag.jpeg" alt="Drapeau France"></div>
                         <div class="flag-name">France</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/italy-flag.jpeg" alt="Drapeau Italie"></div>
                         <div class="flag-name">Italie</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/maroc-flag.jpeg" alt="Drapeau Maroc"></div>
                         <div class="flag-name">Maroc</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/roumanie-flag.jpeg" alt="Drapeau Roumanie">
                         </div>
                         <div class="flag-name">Roumanie</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/usa-flag.jpeg" alt="Drapeau États-Unis"></div>
                         <div class="flag-name">États-Unis</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/poland-flag.jpeg" alt="Drapeau Pologne"></div>
                         <div class="flag-name">Pologne</div>
                    </div>
                    <div class="flag-item">
                         <div class="flag-image"><img src="img/flags/russia-flag.jpeg" alt="Drapeau Russie"></div>
                         <div class="flag-name">Russie</div>
                    </div>
               </div>
          </div>
     </div>




     <!---------- Comment planifier sont projet d'études à l'étranger ---------------->

     <div class="studies-plan">
          <h1>Comment faire un projet d'études gagnant</h1>
          <ol>
               <li>
                    <h3>Identification du sujet :</h3>
                    <p>Choisissez un sujet qui vous passionne et qui est pertinent pour votre domaine
                         d'études.</p>
               </li>
               <li>
                    <h3>Objectifs clairs :</h3>
                    <p>Définissez clairement ce que vous souhaitez accomplir avec votre projet, qu'il s'agisse
                         d'acquérir de nouvelles compétences, de faire avancer la recherche, ou de résoudre un
                         problème
                         spécifique.</p>
               </li>
               <li>
                    <h3>Planification structurée :</h3>
                    <p>Élaborez un plan détaillé qui inclut les étapes principales, les délais et les
                         ressources
                         nécessaires.</p>
               </li>
               <li>
                    <h3>Recherche approfondie :</h3>
                    <p>Effectuez une recherche approfondie pour étayer votre projet avec des données
                         pertinentes et
                         des
                         références académiques solides.</p>
               </li>
               <li>
                    <h3>Méthodologie rigoureuse :</h3>
                    <p>Décrivez la méthode que vous utiliserez pour collecter des données, effectuer des
                         analyses
                         et
                         tirer des conclusions.</p>
               </li>

               <li>
                    <h3>Innovation et originalité :</h3>
                    <p>Mettez en avant ce qui rend votre projet unique ou innovant par rapport aux travaux
                         existants.
                    </p>
               </li>

               <li>
                    <h3>Impact et applications pratiques :</h3>
                    <p>Découvrez l'impact potentiel de votre projet et ses applications pratiques dans le
                         monde
                         réel.
                    </p>
               </li>
               <li>
                    <h3>Budget et ressources :</h3>
                    <p>Évaluez les coûts estimés et les ressources nécessaires pour mener à bien votre projet.
                    </p>
               </li>
               <li>
                    <h3>Évaluation et gestion des risques :</h3>
                    <p>Anticipez les défis potentiels et proposez des stratégies pour les surmonter.</p>
               </li>
               <li>
                    <h3>Communication efficace :</h3>
                    <p>Préparez-vous à présenter clairement votre projet, en mettant en avant ses mérites et
                         son
                         potentiel, que ce soit à des collègues, des professeurs ou des financiers potentiels.
                    </p>
               </li>
          </ol>
     </div>


     <!--------------------- Bloc pourquoi nous choisir  ----------------->


     <h2 class="nous-choisir"> Pourquoi choisir EVE pour vous accompagner dans votre aventure ?</h2>

     <div class="image-grid">
          <div class="image-item first-item">
               <img src="img/etudier/drapeau-monde.jpeg" alt="Image">
               <h3>Connaissance approfondie du système éducatif international</h3>
               <p>Connaissance des différents systèmes éducatifs à travers le monde, ainsi que les exigences
                    spécifiques
                    des universités étrangères,ce qui est essentiel pour conseiller les étudiants de manière
                    informée
               </p>

          </div>

          <div class="image-item">
               <img src="img/etudier/planification.jpg" alt="Image">
               <h3>Compétences en planification et organisation</h3>
               <p> Pour vous aidez à naviguer dans les
                    différentes étapes du processus de candidature, y compris la recherche d'universités, la
                    préparation des documents requis, et la gestion des délais car cela nécessite une capacité
                    forte en planification et en organisation.</p>
          </div>

          <div class="image-item">
               <img src="img/etudier/interculturelle.jpeg" alt="Image">
               <h3>Compétences interculturelles et sensibilité culturelle</h3>
               <p> Étant donné que vous seriez immergés
                    dans des cultures différentes, il est important d'être accompagnés par une entitée ayant
                    des
                    compétences interculturelles pour
                    comprendre et apprécier les différences culturelles, et pour vous aidez à vous adapter
                    adapter
                    efficacement dans votre nouvel environnement.</p>
          </div>

          <div class="image-item last-item">
               <img src="img/etudier/besoins-educatif.webp" alt="Image">
               <h3>Capacité à évaluer les besoins individuels</h3>
               <p>Chaque étudiant est unique avec des besoins spécifiques et des
                    objectifs différents. Nous avons les les compétances d'évaluer ces besoins individuels,
                    trouver solution à vos préoccupations, satisfaire vos aspirations, et vous prodiguer des
                    conseils adapter pour un accompagnement efficace.</p>
          </div>
     </div>



     <div class="contact-eve">
          <p class="avoid-mistake">L'une des plus grandes erreurs de la vie est de remettre ses projets à
               demain !
          </p>

          <p>
               Contactez-nous dès aujourd'hui pour bénéficier d'un accompagnement personnalisé dans votre
               projet
               d'immigration étudiante.
               Ensemble, réalisons vos ambitions académiques à l'international. Vous trouverez nos différents
               contacts
               soit dans le ped de page, soit dans l'entête en haut à gauche.
          </p>

     </div>

     <!---------------Insertion du pied de page----------------->

     <?php
     include ('foother.php');     
     ?>

     <script src="etudier.js">
     </script>

</body>

</html>