<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
  <header>
    <!-- structure de navigation -->
    <nav style="padding: 5px;">
      <!-- je met mon menu et mon bouton dans une meme div -->
      <div style="display: flex; justify-content: space-between;">
       <!-- menu   -->
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="lieu.html">Lieux</a></li>
          <li><a href="commerce.html">Commerces</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <!-- bouton -->
        <div>
          <button style="border-radius: 10px;" id="darkModeToggle">
            Dark Mode
          </button>
        </div>
      </div>
    </nav>
    <div class="container">
      <img src="IMAGES/joy.png" alt="mon logo" style="width: 100px; height: 100px; object-fit: contain; border-radius: 50%;">
      <h1>BIENVENUE DANS MON SITE <span>PRESENTANT BRAZZAVILLE</span></h1>
    </div>
    <script src="script.js"></script>
  </header>
  <?php if (isset($_SESSION['message'])): ?>
      <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
          <?php echo $_SESSION['message']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php unset($_SESSION['message']); unset($_SESSION['message_type']); // Supprime le message après affichage ?>
  <?php endif; ?>
  <main>
    <section id="introduction">
      <h2>Introduction</h2>
      <p>Ma ville se nomme Brazzaville capitale du Congo,c'est est une ville riche en histoire et en culture. Située sur les rives du majestueux fleuve Congo, elle allie modernité et traditions. De ses parcs verdoyants à ses monuments emblématiques comme la Basilique Sainte-Anne, Brazzaville offre un cadre de vie agréable et accueillant. Venez découvrir la diversité et la vitalité de cette ville fascinante.</p>
    </section>

    <section>
      <h3>Voici quelques images à decouvrir </h3>
      <div class="image-container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="IMAGES/corniche.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="LA CORNICHE">LA CORNICHE</h5>
                <p class="card-text">c'est bien plus qu'une simple route le long du fleuve Congo. C'est une artère de vie qui est un lieu de promenade pour admirer le coucher du soleil apportant une touche de modernité et de dynamisme à la ville </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="IMAGES/brzza.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="POINTE NOIRE">POINTE NOIRE</h5>
                <p class="card-text">Pointe-Noire est une ville côtière située à l'extrême sud-ouest de la République du Congo. C'est la deuxième plus grande ville du pays après Brazzaville et elle joue un rôle crucial dans l'économie nationale</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="IMAGES/cfco.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="lLA GARE ">LA GARE </h5>
                <p class="card-text">La gare de Brazzaville est une gare ferroviaire située à Brazzaville, la capitale de la République du Congo. Elle fait partie de la ligne de chemin de fer Congo-Océan (CFCO), qui relie Pointe-Noire à Brazzaville</p>
              </div>
            </div>
          </div>
         
        </div>
    </section>

    <section>
      <h2>Ces splondides vues aeriennes </h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./IMAGES/aerienne5.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./IMAGES/VUE AER 3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./IMAGES/aerienne3.jpeg" class="d-block w-100" alt="...">
          </div>
  
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section id ="map">
      <h2>Voici la carte presentant ma ville</h2>
       <div id ="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127323.5696379461!2d15.144820859448274!3d-4.247190723711275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a32ac441bb83b%3A0xab3deababe7de443!2sBrazzaville%2C%20R%C3%A9publique%20du%20Congo!5e0!3m2!1sfr!2sfr!4v1739921688840!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
     </section> 

    <section>
      <h2>Son historique </h2>
      <p>l'histoire de Brazzaville, la capitale de la République du Congo, a une histoire riche et fascinante. Fondée le 3 octobre 1880 par l'explorateur franco-italien Pierre Savorgnan de Brazza, la ville a été établie sur le site de l'ancien village de Mfoa. Elle a été nommée en l'honneur de son fondateur.Pendant la période coloniale, Brazzaville est devenue un centre administratif important pour l'Afrique-Équatoriale française, une fédération de colonies françaises en Afrique centrale. En 1940, pendant la Seconde Guerre mondiale, Brazzaville a servi de capitale de la France libre sous le général de Gaulle.Après l'indépendance du Congo en 1960, Brazzaville a continué à se développer en tant que centre politique, économique et culturel du pays. Aujourd'hui, la ville est connue pour ses boulevards animés, ses marchés colorés et ses nombreux monuments historiques.</p>
      <div class="card-group">
  <div class="card">
    <img src="IMAGES/bz love.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">congo </h5>
    </div>
  </div>
  <div class="card">
    <img src="IMAGES/drapeau.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">drapeau</h5>
    </div>
  </div>
  <div class="card">
    <img src="IMAGES/congo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">carte</h5>
    </div>
  </div>
</div>
    </section>         
  </main>

    <footer>
        <p>&copy; 2025 Brazzaville. Tous droits reservés.</p>
        <p>Contactez-nous: <a href="joycenkounkou0gmail.com">joycenkounkou0gmail.com</a></p>
    </footer>
   
    <script src="script.js"></script>

</body>
</html>