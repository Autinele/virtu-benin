<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulaire de contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      height: 100%;
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      height: 60px;
      background: rgba(17, 25, 35, 0.7);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 30px;
      z-index: 999;
      backdrop-filter: blur(8px);
    }

    .cta {
  background-color: transparent;
  color: white;
  padding: 8px 16px;
  border: 1px solid white;
  border-radius: 20px;
  cursor: pointer;
  text-decoration: none; /* empêche le soulignement */
  display: inline-block;  /* rend le lien comme un bouton */
  font-size: 14px;
}

.cta:hover {
  background-color: white;
  color: black;
}

    header .logo {
      color: #f9c846;
      font-weight: bold;
      font-size: 18px;
    }

    nav a {
      margin: 0 12px;
      color: #fff;
      text-decoration: none;
      font-size: 14px;
      position: relative;
    }

    nav a.active {
      font-weight: bold;
    }

    .cta {
      background: none;
      border: 1px solid #fff;
      padding: 6px 12px;
      border-radius: 20px;
      color: #fff;
      font-size: 13px;
      cursor: pointer;
    }

    .contact-section {
      margin-top: 60px;
      position: relative;
      background: url('/images/3.jpg') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .overlay {
      position: absolute;
      background: rgba(17, 25, 35, 0.6);
      top: 100px;
      bottom: 60px;
      left: 50px;
      right: 50px;
      z-index: 1;
      border-radius: 12px;
    }

    .contact-container {
      position: relative;
      z-index: 2;
      display: flex;
      width: 90%;
      max-width: 1200px;
      justify-content: space-between;
      align-items: stretch;
      gap: 40px;
    }

    .left-box {
      width: 40%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .left-box h2 {
      font-size: 36px;
      font-weight: 800;
      margin-bottom: 30px;
      line-height: 1.3;
    }

    .left-box p {
      font-size: 16px;
      margin: 10px 0;
    }

    .phone-box {
      background: #d9961e;
      color: #fff;
      border-radius: 10px;
      padding: 12px 16px;
      display: flex;
      align-items: center;
      width: fit-content;
      font-weight: 600;
      margin: 10px 0;
    }

    .phone-box i {
      margin-right: 10px;
    }

    .social-icons {
      margin-top: 30px;
    }

    .social-icons a {
      margin-right: 15px;
      font-size: 20px;
      color: #fff;
      background: #d9961e;
      padding: 10px;
      border-radius: 50%;
      display: inline-block;
    }

    .right-box {
      width: 55%;
      background: #fff;
      color: #000;
      border-radius: 20px;
      padding: 40px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    form label {
      margin-top: 20px;
      font-weight: bold;
      color: #444;
    }

    form input,
    form textarea {
      border: none;
      border-bottom: 2px solid #ccc;
      padding: 10px 5px;
      font-size: 16px;
      background: transparent;
      color: #333;
      transition: 0.3s;
    }

    form input:focus,
    form textarea:focus {
      outline: none;
      border-bottom: 2px solid #d9961e;
    }

    form textarea {
      resize: vertical;
      min-height: 100px;
    }

    form button {
      margin-top: 30px;
      background: #d9961e;
      color: #fff;
      padding: 14px;
      border: none;
      border-radius: 10px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }

    form button i {
      margin-right: 10px;
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
    <div class="logo">
        <a href="/">
        <img src="/images/Wawo logo secondary.png" alt="Logo WA WO" style="height: 50px;">
      </div>
    </a>
    <nav>
      <a href="/">Accueil</a>
      <a href="/produit">Galeries</a>
      <a href="#">À propos</a>
      <a href="/contact" class="active">Contact</a>
    </nav>
    <a href="/detailjeu" class="cta">Accéder au jeu</a>
  </header>

  <section class="contact-section">
    <div class="overlay"></div>
    <div class="contact-container">
      <div class="left-box">
        <h2>Un mot, une idée ? Parlons-en !</h2>
        <p><i class="fas fa-envelope"></i> Wawo@gmail.com</p>
        <div class="phone-box">
          <i class="fas fa-phone"></i>
          <span>+229 01 98589013</span>
        </div>
        <p><i class="fas fa-map-marker-alt"></i> Cotonou, Bénin</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
      <div class="right-box">
        <form>
          <label for="nom">Nom</label>
          <input type="text" id="nom" />
          <label for="mail">Mail</label>
          <input type="email" id="mail" />
          <label for="message">Message</label>
          <textarea id="message"></textarea>
          <button type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
        </form>
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
