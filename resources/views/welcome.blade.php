<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VIRTU-BENIN</title>
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background: #f8f8f8; /* Pas d'image de fond globale */
    }

    /* Menu personnalisé */
    header {
      background: transparent;
      padding: 20px 50px;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .logo {
      color: #f5c518;
      font-weight: bold;
      font-size: 24px;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #f5c518;
    }

    .btn-menu {
      border: 1px solid white;
      padding: 8px 20px;
      border-radius: 30px;
      color: white;
      text-decoration: none;
      transition: background 0.3s, color 0.3s;
    }

    .btn-menu:hover {
      background: white;
      color: #333;
    }

    /* Première section avec image de fond */
    .hero {
      height: 100vh;
      background: url('/images/3.png') no-repeat center center/cover;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      color: white;
      padding: 0 20px;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4); /* Assombrir l'image pour que le texte ressorte */
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      color: #f5c518;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .hero .btn {
      background: #f5c518;
      color: #333;
      padding: 12px 25px;
      border: none;
      border-radius: 30px;
      font-weight: bold;
      text-decoration: none;
      margin: 0 10px;
      transition: background 0.3s;
    }

    .hero .btn:hover {
      background: white;
      color: #333;
    }

     /* Footer */
     footer {
      background: #c49b42;
      color: white;
      padding: 40px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      text-align: left;
    }

    footer div {
      flex: 1;
      min-width: 200px;
      margin-bottom: 20px;
    }

    footer h3 {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <!-- Menu -->
  <header>
    <div class="logo">VIRTU-BENIN</div>
    <nav>
      <a href="/">Accueil</a>
      <a href="#galerie">Galerie</a>
      <a href="#apropos">À propos</a>
      <a href="#contact">Contact</a>
      <a href="#statistiques">Statistiques</a>
    </nav>
    <a href="#jeu" class="btn-menu">Accéder au jeu</a>
  </header>

  <!-- Section Héros -->
  <section class="hero">
    <div class="hero-content">
      <h1>Jouer pour apprendre, acheter pour soutenir.</h1>
      <p>Explore, joue, découvre et soutiens la richesse culturelle du Bénin grâce à une plateforme unique mêlant patrimoine, artisanat et aventure interactive.</p>
      <a href="#decouverte" class="btn">Découvrir les sites</a>
      <a href="#aventure" class="btn">Commencer l’aventure</a>
    </div>
  </section>

  <!-- Section des sites -->
  <section id="galerie" class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Explorez nos sites</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="relative group card-animate">
          <img src="/images/site1.jpg" alt="Site 1" class="w-full h-64 object-cover rounded-lg shadow-lg group-hover:opacity-75">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center space-y-3 transition">
            <button class="text-white text-2xl"><i class="fas fa-eye"></i></button>
            <a href="/visite" class="bg-blue-500 text-white px-3 py-1 rounded">Visite virtuelle</a>
          </div>
        </div>
        <div class="relative group card-animate">
          <img src="/images/site2.jpg" alt="Site 2" class="w-full h-64 object-cover rounded-lg shadow-lg group-hover:opacity-75">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center space-y-3 transition">
            <button class="text-white text-2xl"><i class="fas fa-eye"></i></button>
            <a href="/visite" class="bg-blue-500 text-white px-3 py-1 rounded">Visite virtuelle</a>
          </div>
        </div>
        <div class="relative group card-animate">
          <img src="/images/site3.jpg" alt="Site 3" class="w-full h-64 object-cover rounded-lg shadow-lg group-hover:opacity-75">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center space-y-3 transition">
            <button class="text-white text-2xl"><i class="fas fa-eye"></i></button>
            <a href="/visite" class="bg-blue-500 text-white px-3 py-1 rounded">Visite virtuelle</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section À propos -->
  <section id="apropos" class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Notre Projet</h2>
      <p class="max-w-3xl mx-auto text-lg text-gray-700">
        VIRTU-BENIN est une expérience immersive qui vous transporte au cœur des plus beaux sites touristiques du Bénin. Explorez, découvrez et préparez vos prochaines aventures depuis chez vous !
      </p>
    </div>
  </section>

  <!-- Section des articles -->
  <section id="produits" class="py-16 bg-gray-100">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Nos Produits Artisanaux</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Poterie -->
        <div class="relative group card-animate">
          <img src="/images/poterie.jpg" alt="Poterie" class="w-full h-64 object-cover rounded-lg shadow-lg group-hover:opacity-75">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center space-y-3 transition">
            <button class="text-white text-2xl"><i class="fas fa-eye"></i></button>
            <button class="bg-green-500 text-white px-3 py-1 rounded">Ajouter au panier</button>
            <p class="text-white mt-2">Prix: 5000 FCFA</p>
          </div>
        </div>
        <!-- Sculpture -->
        <div class="relative group card-animate">
          <img src="/images/sculpture.jpg" alt="Sculpture" class="w-full h-64 object-cover rounded-lg shadow-lg group-hover:opacity-75">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center space-y-3 transition">
            <button class="text-white text-2xl"><i class="fas fa-eye"></i></button>
            <button class="bg-green-500 text-white px-3 py-1 rounded">Ajouter au panier</button>
            <p class="text-white mt-2">Prix: 8000 FCFA</p>
          </div>
        </div>
        <!-- Tableau -->
        <div class="relative group card-animate">
          <img src="/images/tableau.jpg" alt="Tableau" class="w-full h-64 object-cover rounded-lg shadow-lg group-hover:opacity-75">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center space-y-3 transition">
            <button class="text-white text-2xl"><i class="fas fa-eye"></i></button>
            <button class="bg-green-500 text-white px-3 py-1 rounded">Ajouter au panier</button>
            <p class="text-white mt-2">Prix: 12000 FCFA</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Statistiques -->
  <section id="statistiques" class="py-16" style="background: none;">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Statistiques</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold">Sites Disponibles</h3>
          <p class="text-2xl">10</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold">Visites Virtuelles</h3>
          <p class="text-2xl">150</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold">Articles Vendus</h3>
          <p class="text-2xl">250</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold">Revenus</h3>
          <p class="text-2xl">20%</p>
        </div>
      </div>
    </div>
  </section>

   <!-- Footer -->
   <footer>
    <div>
      <h3>Liens utiles</h3>
      <p><a href="#visite">Visite virtuelle</a></p>
      <p><a href="#projet">Le projet</a></p>
      <p><a href="#contact">Contact</a></p>
    </div>
    <div>
      <h3>Informations légales</h3>
      <p>Mentions légales</p>
      <p>Politique de confidentialité</p>
    </div>
  </footer>

  <script>
    // Détection de l'apparition des cartes lors du défilement
    const cards = document.querySelectorAll('.card-animate');
    window.addEventListener('scroll', () => {
      cards.forEach(card => {
        if (card.getBoundingClientRect().top < window.innerHeight) {
          card.classList.add('visible');
        }
      });
    });
</script>
</body>
</html>
