<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Visite Virtuelle</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Ajout Font Awesome -->
  @vite('resources/css/app.css')
  <style>
    footer {
      background: #e2b97d; /* Jaune plus clair et plus doux */
      color: black;
      padding: 40px 20px;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 40px;
    }

    footer div {
      min-width: 200px;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    footer h3 {
      margin-bottom: 15px;
      text-align: right;
    }

    footer p {
      margin: 5px 0;
      text-align: left;
    }

    footer a {
      color: black;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    /* Modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 50;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: white;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      max-width: 400px;
      width: 90%;
    }

    .modal-content h2 {
      margin-bottom: 20px;
      color: #e2b97d; /* Jaune plus doux pour le titre du modal */
    }

    .modal-content button {
      background: #e2b97d; /* Jaune plus doux */
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .modal-content input {
      margin-bottom: 10px;
      padding: 8px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    /* Menu flottant sur l'iframe */
    .floating-menu {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: rgba(0, 0, 0, 0.6);
      padding: 10px;
      border-radius: 5px;
      display: flex;
      flex-direction: column; /* Menu vertical */
      justify-content: space-around;
      align-items: center;
      z-index: 200; /* Augmenter pour être au-dessus de l'iframe */
    }

    .floating-menu button {
      color: white;
      background-color: transparent;
      border: none;
      font-size: 18px;
      cursor: pointer;
      margin-bottom: 10px; /* Espacement entre les boutons */
    }

    .floating-menu button:hover {
      color: #e2b97d; /* Jaune plus doux au survol */
    }

    /* Croisillon de fermeture */
    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      color: black;
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-900">

  <!-- Header -->
  <header class="fixed top-0 left-0 w-full z-20 flex justify-between items-center px-16 py-6 text-white bg-[#e2b97d]"> <!-- Jaune atténué ici -->
    <div class="font-bold text-lg">WA WO</div>
    <nav class="flex space-x-12">
      <a href="/" class="hover:text-white transition">Accueil</a>
      <a href="/produit" class="hover:text-white transition">Galleries</a>
      <a href="#" class="hover:text-white transition">À propos</a>
      <a href="/contact" class="hover:text-white transition">Contact</a>
    </nav>
    <a href="/detailjeu" class="border border-white px-4 py-2 rounded-full text-sm hover:bg-white hover:text-black transition">
      Accéder au jeu
    </a>
  </header>

  <!-- Contenu principal -->
  <main class="pt-40 container mx-auto text-center px-4">
    <section>
      <h2 class="text-3xl font-bold mb-8 text-[#e2b97d]">Explorez les Tata Somba du Nord en 360°</h2> <!-- Jaune atténué pour le titre -->

      <div class="relative shadow-lg rounded-lg overflow-hidden border border-[#e2b97d] cursor-pointer" id="video-container"> <!-- Jaune atténué pour le bord -->
        <iframe id="virtual-tour" style="max-width:100%; width: 100%; height: 400px"
          src="https://www.klapty.com/tour/tunnel/U9b0tlmwqI" frameborder="0" allowfullscreen="true"
          mozallowfullscreen="true" webkitallowfullscreen="true" allowvr="true"
          allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; vr">
        </iframe>

        <!-- Menu flottant avec icônes (posé sur l'iframe) -->
        <div class="floating-menu">
          <button id="chat-icon" title="Chat">
            <i class="fa fa-comment"></i>
          </button>
          <button id="audio-icon" title="Audio">
            <i class="fa fa-volume-up"></i>
          </button>
          <button id="premium-btn" title="Mode Premium">
            <i class="fa fa-gem"></i>
          </button>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal Simulation Paiement -->
  <div class="modal" id="payment-modal">
    <div class="modal-content">
      <span id="close-modal" class="close-btn">&times;</span>
      <h2>Mode Premium</h2>
      <p>Pour continuer l'immersion, passez en mode premium !</p>
      <form id="payment-form">
        <input type="text" placeholder="Nom sur la carte" required /><br />
        <input type="number" placeholder="Numéro de carte" required /><br />
        <input type="text" placeholder="Date d'expiration" required /><br />
        <input type="number" placeholder="CVV" required /><br />
        <button type="submit">Payer 0€ (Simulation)</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div>
      <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
      <p><a href="#visite">Accueil</a></p>
      <p><a href="#projet">Galleries</a></p>
      <p><a href="#contact">À propos</a></p>
    </div>
    <div>
      <h3 class="text-lg font-semibold mb-4">Informations légales</h3>
      <p><a href="#">Politique de confidentialité</a></p>
      <p><a href="#">Conditions générales</a></p>
    </div>
  </footer>

  <!-- Script -->
  <script>
    let clickCount = 0;
    const videoContainer = document.getElementById('video-container');
    const paymentModal = document.getElementById('payment-modal');
    const paymentForm = document.getElementById('payment-form');
    const premiumBtn = document.getElementById('premium-btn');
    const closeModalBtn = document.getElementById('close-modal');
    const chatIcon = document.getElementById('chat-icon');
    const audioIcon = document.getElementById('audio-icon');

    // Fonction pour afficher le modal
    function showModal() {
      paymentModal.style.display = 'flex';
    }

    // Afficher le modal pour l'option premium lorsque l'utilisateur clique sur le bouton
    premiumBtn.addEventListener('click', showModal);

    // Afficher le modal lorsque l'utilisateur clique sur les autres icônes
    chatIcon.addEventListener('click', showModal);
    audioIcon.addEventListener('click', showModal);

    // Fermer le modal si l'utilisateur clique en dehors de celui-ci
    window.addEventListener('click', function (e) {
      if (e.target === paymentModal) {
        paymentModal.style.display = 'none';
      }
    });

    // Fermer le modal avec la croix
    closeModalBtn.addEventListener('click', function () {
      paymentModal.style.display = 'none';
    });

    // Simulation de paiement
    paymentForm.addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Paiement simulé avec succès ! Vous êtes maintenant en mode premium.');
      paymentModal.style.display = 'none';
    });
  </script>

</body>

</html>
