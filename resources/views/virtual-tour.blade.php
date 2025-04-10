<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Visite Virtuelle</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    /* CSS personnalisé */
    body {
      background-color: #c6b393;
      color: white;
    }

    header {
      background-color:#0f172a;
      background-opacity: 95%;
      backdrop-blur-lg;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      height: 60px; /* Réduction de la hauteur du header */
      padding: 10px 16px; /* Réduction du padding */
    }

    header a {
      color: #c49b42; /* Couleur des liens du menu */
      text-decoration: none;
      font-weight: 600;
      padding: 10px 15px;
      transition: color 0.3s ease;
    }

    header a:hover {
      color: white; /* Couleur des liens en hover */
    }

    .floating-menu {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: rgba(0, 0, 0, 0.6);
      padding: 10px;
      border-radius: 5px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      z-index: 200;
    }

    .floating-menu button {
      color: white;
      background-color: transparent;
      border: none;
      font-size: 18px;
      cursor: pointer;
      margin-bottom: 10px;
    }

    .floating-menu button:hover {
      color: #e2b97d;
    }

    footer {
      background: #e2b97d;
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
      position: relative;
    }

    .modal-content h2 {
      margin-bottom: 20px;
      color: #e2b97d;
    }

    .modal-content button {
      background: #e2b97d;
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

<body>

  <!-- Header -->
  <header class="fixed top-0 left-0 w-full z-20 flex justify-between items-center px-16 py-6 text-white">
    <a href="/">
      <img src="/images/Wawo logo secondary.png" alt="Logo WA WO" style="height: 50px; object-fit: contain;">
    </a>
    <nav class="flex space-x-12">
      <a href="/" class="hover:text-white">Accueil</a>
      <a href="/produit" class="hover:text-white">Galleries</a>
      <a href="#" class="hover:text-white">À propos</a>
      <a href="/contact" class="hover:text-white">Contact</a>
    </nav>
    <a href="/detailjeu"
      class="border border-[#c49b42] text-[#c49b42] px-4 py-2 rounded-full text-sm hover:bg-[#c49b42] hover:text-white transition font-semibold shadow">
      Accéder au jeu
    </a>
  </header>

  <!-- Contenu principal -->
  <main class="pt-40 container mx-auto text-center px-4">
    <section id="visite">
      <h2 class="text-3xl font-bold mb-8 text-[#e2b97d]">Explorez les Tata Somba du Nord en 360°</h2>

      <div class="relative shadow-lg rounded-lg overflow-hidden border border-[#e2b97d] cursor-pointer" id="video-container" style="position: relative;">
        <iframe id="virtual-tour" style="max-width:100%; width: 100%; height: 400px"
          src="https://www.klapty.com/tour/tunnel/U9b0tlmwqI" frameborder="0" allowfullscreen="true"
          mozallowfullscreen="true" webkitallowfullscreen="true" allowvr="true"
          allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; vr">
        </iframe>

        <div class="floating-menu">
          <button id="chat-icon" aria-label="Chat">
            <i class="fa fa-comment"></i>
          </button>
          <button id="audio-icon" aria-label="Audio">
            <i class="fa fa-volume-up"></i>
          </button>
          <button id="premium-btn" aria-label="Mode Premium">
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
        <label class="sr-only" for="name">Nom sur la carte</label>
        <input type="text" id="name" placeholder="Nom sur la carte" required />
        <label class="sr-only" for="number">Numéro de carte</label>
        <input type="number" id="number" placeholder="Numéro de carte" required />
        <label class="sr-only" for="expiry">Date d'expiration</label>
        <input type="text" id="expiry" placeholder="Date d'expiration" required />
        <label class="sr-only" for="cvv">CVV</label>
        <input type="number" id="cvv" placeholder="CVV" required />
        <button type="submit">Payer 0€ (Simulation)</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div>
      <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
      <p><a href="#visite">Accueil</a></p>
      <p><a href="/produit">Galleries</a></p>
      <p><a href="#apropos">À propos</a></p>
    </div>
    <div>
      <h3 class="text-lg font-semibold mb-4">Informations légales</h3>
      <p><a href="#">Politique de confidentialité</a></p>
      <p><a href="#">Conditions générales</a></p>
    </div>
  </footer>

  <!-- Script -->
  <script>
    const paymentModal = document.getElementById('payment-modal');
    const paymentForm = document.getElementById('payment-form');
    const premiumBtn = document.getElementById('premium-btn');
    const closeModalBtn = document.getElementById('close-modal');
    const chatIcon = document.getElementById('chat-icon');
    const audioIcon = document.getElementById('audio-icon');

    function showModal() {
      paymentModal.style.display = 'flex';
    }

    premiumBtn.addEventListener('click', showModal);
    chatIcon.addEventListener('click', showModal);
    audioIcon.addEventListener('click', showModal);

    window.addEventListener('click', function (e) {
      if (e.target === paymentModal) {
        paymentModal.style.display = 'none';
      }
    });

    closeModalBtn.addEventListener('click', function () {
      paymentModal.style.display = 'none';
    });

    paymentForm.addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Paiement simulé avec succès ! Vous êtes maintenant en mode premium.');
      paymentModal.style.display = 'none';
    });
  </script>

</body>

</html>
