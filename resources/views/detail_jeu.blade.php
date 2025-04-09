<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Wawo - Accueil</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: rgba(0, 0, 0, 0.7); /* Couleur sombre avec transparence */
      color: white;
      padding-top: 90px;
      line-height: 1.6;
    }

    header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 40px;
  background-color: #2A3D4F;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  height: 90px; /* <-- fixe la hauteur */
}

.logo img {
  height: 70px; /* taille augmentée */
  object-fit: contain;
}


    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #F2C94C;
    }

    .btn-header {
      padding: 10px 20px;
      border: 1px solid white;
      border-radius: 20px;
      background: transparent;
      color: white;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-header:hover {
      background: rgba(255, 255, 255, 0.1);
    }

    .hero {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    padding: 60px 10%;
    background: url('/images/3.jpg') no-repeat center center/cover;
    position: relative;
    min-height: 500px;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7); /* Couleur sombre avec transparence */
    z-index: 1; /* Pour que l'overlay soit au-dessus de l'image mais sous le contenu */
}

.hero > * {
    position: relative;
    z-index: 2; /* Pour s'assurer que le contenu (texte, etc.) est au-dessus de l'overlay */
}


    .hero-text {
      flex: 1;
      max-width: 600px;
      margin-right: 30px;
    }

    .hero-text h1 {
      font-family: 'Playfair Display', serif;
      font-size: 48px;
      color: #F2C94C;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .hero-text p {
      font-size: 15px;
      color: #d3d3d3;
      margin-bottom: 20px;
    }

    .info-box {
      background-color: #FFF3B0;
      padding: 12px 18px;
      border-radius: 6px;
      color: #000;
      font-weight: bold;
      display: inline-block;
      margin-bottom: 20px;
    }

    .btn-main {
  background-color: #F2C94C;
  color: #000;
  padding: 8px 16px; /* Réduit le padding */
  border-radius: 30px;
  font-weight: bold;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s, box-shadow 0.3s;
  font-size: 14px; /* Réduit la taille du texte */
}

.btn-main:hover {
  background-color: #e6ba3d;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

    .hero-img {
      flex: 1;
    }

    .hero-img img {
      max-width: 100%;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .hero-img img:hover {
      transform: scale(1.05);
    }

    section {
      padding: 80px 10%;
      min-height: 500px;
    }

    h2 {
      font-size: 26px;
      margin-bottom: 20px;
    }

    p {
      font-size: 16px;
      margin-bottom: 15px;
    }

    .section-light {
      background: linear-gradient(to bottom, #FFF0B3, #FFEC8D);
      color: #1a1a1a;
    }

    .section-dark {
      background: linear-gradient(to bottom, #B97450, #6E4B3A);
      color: #fff;
    }

    .section-flex {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    align-items: center;
    justify-content: center;
    margin: 0;
}

.section-image-text {
    position: relative;
    flex: 1;
    min-width: 300px;
    text-align: block;
}

.section-image-text img {
    width: 100%; /* Les images prennent toute la largeur disponible */
    height: 100%; /* Les images prennent toute la hauteur disponible */
    object-fit: cover; /* Ajuste l'image sans la déformer */
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.section-image-text img:hover {
    transform: scale(1.05);
}

.section-image-text p {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff; /* Couleur du texte */
    padding: 10px 20px;
    border-radius: 5px;
    background: none; /* Pas de fond */
}

    button {
      transition: transform 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .hero {
        padding: 60px 5%;
      }

      .hero-text h1 {
        font-size: 32px;
      }

      .hero-text p {
        font-size: 14px;
      }

      .section-flex {
        flex-direction: column;
        gap: 20px;
      }
    }

    footer {
            background: #c49b42;
            color: black;
            padding: 40px 20px;
            display: grid;
            /* Utilisation de la grille */
            grid-template-columns: repeat(2, 1fr);
            /* Deux colonnes de largeur égale */
            gap: 40px;
            /* Espacement entre les colonnes */
        }

        footer div {
            min-width: 200px;
            display: flex;
            /* Utilisation de flex pour la mise en page */
            flex-direction: column;
            /* Permet de garder les éléments sous les uns des autres */
            align-items: flex-end;
            /* Aligner tout à droite dans la colonne */
        }

        footer h3 {
            margin-bottom: 15px;
            text-align: right;
            /* Aligner les titres à droite */
        }

        footer p {
            margin: 5px 0;
            text-align: left;
            /* Aligner le texte des paragraphes à gauche */
        }
  </style>
</head>
<body>
    <header>
        <div class="logo" style="flex: 1;">
          <a href="/">
            <img src="/images/logoooo.jpg" alt="Logo WA WO">
          </a>
        </div>
        <nav style="flex: 1; text-align: center;">
          <a href="/">Accueil</a>
          <a href="/produit">Galleries</a>
          <a href="#">A propos</a>
          <a href="/contact">Contact</a>
        </nav>
        <div style="flex: 1;"></div> <!-- Espace vide à droite pour équilibrer -->
      </header>

  <section class="hero">
    <div class="hero-text">
      <h1> Jouer pour apprendre, acheter<br>pour soutenir.  </h1>
      <p>Pas besoin de prendre la route pour voyager à travers le Bénin. Grâce à notre immersion virtuelle, promenez-vous librement dans des sites culturels reconstitués en 3D depuis chez vous.</p>
      <p>Avec un simple mouvement de souris, vous vous déplacez au cœur de ces lieux uniques, comme si vous y étiez réellement.</p>
      <div class="info-box">🔍 Accessible gratuitement depuis la page d’accueil</div> <br>
      <a href="/#sites" class="btn-main">Découvrir les sites</a>
    </div>
    <div class="hero-img">
      <img src="/images/image6.jpg" alt="Aperçu site culturel">
    </div>
  </section>

  <section class="section-light">
    <h2 style="text-align: center; margin-bottom: 40px;">Un jeu pas comme les autres</h2>
    <div class="section-flex">
      <div style="flex: 1; min-width: 250px; text-align: center;">
        <div style="background-color: #FFF0B3; padding: 10px; border-radius: 10px;">
          <img src="/images/image7.png" alt="Carte interactive" style="mix-blend-mode: multiply; border-radius: 10px; max-width: 100%;">
        </div>
      </div>
      <div style="flex: 2; min-width: 300px;">
        <p>Partez à la découverte du Bénin à travers une carte interactive où chaque site culturel est un niveau à débloquer. Résolvez des énigmes, découvrez des histoires uniques liées aux richesses culturelles locales.</p>
      </div>
    </div>
  </section>

  <section class="section-dark section-flex">
    <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column; justify-content: center;">
      <h2>Crée ton avatar, habille le en 100% local</h2>
      <p>Personnalisez votre avatar avec des tenues régionales</p>
    </div>
    <div style="flex: 1; min-width: 300px;">
      <img src="/images/image8.jpg" alt="Avatar local" style="width: 100%; height: 100%; object-fit: cover; display: block;">
    </div>
  </section>

  <section class="section-flex">
    <div class="section-image-text" style="flex: 1; min-width: 300px; position: relative;">
        <a href="https://beethogedeon.github.io/wawo-puzzle/" target="_blank">
            <img src="/images/2.png" alt="Énigme">
            <p>Résolvez des énigmes</p>
        </a>
    </div>
    <div class="section-image-text" style="flex: 1; min-width: 300px; position: relative;">
        <a href="https://beethogedeon.github.io/wawo-puzzle/" target="_blank">
            <img src="/images/puwwle.png" alt="Oeuvre à révéler">
            <p>Chaque niveau, une œuvre à révéler</p>
        </a>
    </div>
</section>

  <section class="section-light">
    <div class="section-flex">
      <div style="flex: 2; min-width: 300px; max-width: 600px;">
        <h2>Boutique virtuelle – Personnalisez votre avatar</h2>
        <p>Dans cette boutique, débloquez ou achetez des tenues traditionnelles et accessoires uniques pour habiller votre avatar. Chaque tenue reflète une région ou une communauté du Bénin, conçue dans le respect des codes culturels locaux.</p>
        <p><strong>Utilisez les pièces gagnées en jeu</strong> ou achetez des pièces spéciales pour aller plus loin dans la personnalisation.</p>
        <p><strong>Devinez quoi ?</strong> Un pourcentage de chaque achat est reversé à la mairie du site que vous venez de visiter virtuellement, pour contribuer à la protection, restauration ou mise en valeur du patrimoine.</p>
        <a href="/demo" class="btn-main" target="_blank" style="margin-top: 20px;">Commencer l’aventure</a>
      </div>
      <div style="flex: 1; text-align: center;">
        <img src="/images/image11.jpg" alt="Boutique mobile" style="max-width: 250px;">
      </div>
    </div>
  </section>

  <footer>
    <div>
        <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
        <p><a href="/">Accueil</a></p>
        <p><a href="/produit">Galleries</a></p>
        <p><a href="/contact">A propos</a></p>
    </div>
    <div>
        <h3 class="text-lg font-semibold mb-4">Informations légales</h3>
        <p>Politique de confidentialité</p>
        <p>Conditions d'utilisation</p>
        <p>Mentions légales</p>
    </div>
</footer>
</body>
</html>
