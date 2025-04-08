<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Virtu-Benin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-size: 0.95rem;
        }

        footer {
            background: #d0b27f;
            /* Couleur légèrement plus claire pour le footer */
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

        /* Artistes du moment */
        .artiste-section {
            background-color: #d7c192;
            padding: 60px 0;
            display: flex;
            justify-content: center;
            /* Centrage des éléments horizontalement */
            flex-direction: column;
        }

        .artiste-title {
            text-align: center;
            font-size: 2.5rem;
            color: white;
            margin-bottom: 40px;
            font-weight: bold;
        }

        /* Conteneur des artistes */
        .artistes {
            display: flex;
            justify-content: center;
            /* Centrage des éléments dans la section */
            gap: 30px;
            /* Réduction de l'espace entre les éléments */
        }

        .artiste {
            text-align: center;
            width: 20%;
            /* Réduction de la largeur à 20% */
        }

        /* Conteneur pour les images des artistes */
        .artiste-image-container {
            width: 100%;
            height: 300px;
            /* Augmentation de la hauteur */
            margin-bottom: 15px;
            background-color: #d7c192;
            /* Fond des images de la couleur de la section */
            border-radius: 10px;
        }

        .artiste-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: inset 0 0 0 15px #c49b42;
        }

        /* Image 1 (première image du premier artiste) */
        .artiste-image-1 {
            border-top-right-radius: 160px;
            /* Arrondi du coin supérieur gauche */
            border-top-left-radius: 00px;
            /* Reste du coin supérieur droit normal */
            border-bottom-right-radius: 00px;
            /* Coin inférieur gauche normal */
            border-bottom-left-radius: 160px;
            /* Arrondi du coin inférieur droit */
        }

        /* Image 2 (deuxième image du deuxième artiste) */
        .artiste-image-2 {
            border-top-left-radius: 160px;
            /* Arrondi du coin supérieur gauche */
            border-top-right-radius: 160px;
            /* Arrondi du coin supérieur droit */
            border-bottom-left-radius: 00px;
            /* Coin inférieur gauche normal */
            border-bottom-right-radius: 00px;
            /* Coin inférieur droit normal */
        }

        /* Image 3 (troisième image du troisième artiste) */
        .artiste-image-3 {
            border-top-right-radius: 00px;
            /* Arrondi du coin supérieur gauche */
            border-top-left-radius: 160px;
            /* Reste du coin supérieur droit normal */
            border-bottom-right-radius: 160px;
            /* Coin inférieur gauche normal */
            border-bottom-left-radius: 00px;
            /* Arrondi du coin inférieur droit */
        }

        .artiste-description {
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
        }

        .section-3 {
            background-color: #fff7e6;
            /* Fond de la section 1 */
            padding: 60px 16px;
        }

        .section-3 .content {
            display: flex;
            justify-content: center;
            /* Centrer les éléments ensemble */
            margin-bottom: 30px;
            align-items: center;
            gap: 40px;
            /* Espacement pour rapprocher sans que ça soit trop centré */
        }

        .section-3 .content-reversed {
            flex-direction: row-reverse;
            /* Texte à gauche, image à droite (modification ici) */
        }

        .section-3 .content .image-container {
            width: 230px;
            /* Taille ajustée pour garder une forme carrée */
            height: 230px;
            overflow: hidden;
        }

        .section-3 .content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .section-3 .content .text {
            max-width: 45%;
            /* Taille flexible pour le texte */
        }

        .section-3 .content .text h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }

        .section-3 .text p {
    text-align: justify;
    line-height: 1.8;
    margin-bottom: 15px;
    color: #333;
    font-size: 1rem;
}


        /* Arrondi spécifique pour chaque image */
        .content .image-container img:nth-child(1) {
            border-top-left-radius: 160px;
            /* Arrondi du côté supérieur gauche de l'image 1 */
        }

        .content-reversed .image-container img:nth-child(1) {
            border-bottom-right-radius: 160px;
            border-top-left-radius: 160px;
            /* Arrondi du côté inférieur droit de l'image 2 */
        }
    </style>
</head>

<body class="m-0 p-0">

    <!-- Header -->
    <header class="fixed top-0 left-0 w-full z-20 flex justify-between items-center px-16 py-6 text-white bg-[#0f172a] bg-opacity-95 backdrop-blur-lg shadow-lg" style="height: 70px;">
        <a href="/">
            <img src="/images/logoooo.jpg" alt="Logo WA WO" style="height: 80px; object-fit: contain;">
        </a>
        <nav class="flex space-x-12">
            <a href="/" class="text-[#c49b42] hover:text-white transition font-semibold">Accueil</a>
            <a href="/produit" class="text-[#c49b42] hover:text-white transition font-semibold">Galleries</a>
            <a href="#" class="text-[#c49b42] hover:text-white transition font-semibold">À propos</a>
            <a href="/contact" class="text-[#c49b42] hover:text-white transition font-semibold">Contact</a>
        </nav>
        <a href="/detailjeu"
            class="border border-[#c49b42] text-[#c49b42] px-4 py-2 rounded-full text-sm hover:bg-[#c49b42] hover:text-white transition font-semibold shadow">
            Accéder au jeu
        </a>
    </header>


    <!-- Section principale -->
    <section class="pt-32 px-16 flex items-start justify-center bg-[#fff7e6] min-h-screen space-x-80 mb-0">
        <!-- Texte à gauche -->
        <div class="mt-10 max-w-md">
            <h1 class="text-5xl font-bold text-black leading-snug">
                Galerie<br>
                d’émotions<br>
                locales
            </h1>
            <p class="text-gray-700 mt-4 text-sm">
                Chaque pièce raconte une histoire.
            </p>
            <p class="text-gray-700 mt-4 text-sm">
                Trouver la vôtre!
            </p>
        </div>

        <!-- Images à droite -->
        <div class="flex items-end">
            <!-- Première image (petite) -->
            <div class="relative">
                <img src="/images/image1.jpg" alt="Image 1" class="w-48 h-48 object-cover rounded-lg shadow-md">
                <div class="absolute top-2 right-2 flex items-center justify-center bg-white p-2 rounded-full shadow-md">
                    <i class="fa fa-shopping-cart text-xs text-black add-to-cart" onclick="addToCart('20.00€')"></i> <!-- Icône de panier -->
                </div>
                <div class="absolute bottom-2 left-2 bg-black bg-opacity-60 text-white p-2 rounded">
                    20.00€ <!-- Prix -->
                </div>
            </div>

            <!-- Deuxième image (grande, deux fois plus haute) -->
            <div class="relative">
                <img src="/images/image2.jpg" alt="Image 2" class="w-48 h-96 object-cover rounded-lg shadow-md">
                <div class="absolute top-2 right-2 flex items-center justify-center bg-white p-2 rounded-full shadow-md">
                    <i class="fa fa-shopping-cart text-xs text-black add-to-cart" onclick="addToCart('40.00€')"></i> <!-- Icône de panier -->
                </div>
                <div class="absolute bottom-2 left-2 bg-black bg-opacity-60 text-white p-2 rounded">
                    40.00€ <!-- Prix -->
                </div>
            </div>

            <!-- Trois autres images à droite, empilées et dépassant légèrement la deuxième -->
            <div class="flex flex-col gap-4 ml-4 relative">
                <div class="relative">
                    <img src="/images/image3.jpg" alt="Image 3" class="w-48 h-48 object-cover rounded-lg shadow-md" style="top: -40px;">
                    <div class="absolute top-2 right-2 flex items-center justify-center bg-white p-2 rounded-full shadow-md">
                        <i class="fa fa-shopping-cart text-xs text-black add-to-cart" onclick="addToCart('30.00€')"></i> <!-- Icône de panier -->
                    </div>
                    <div class="absolute bottom-2 left-2 bg-black bg-opacity-60 text-white p-2 rounded">
                        30.00€ <!-- Prix -->
                    </div>
                </div>
                <div class="relative">
                    <img src="/images/image4.jpg" alt="Image 4" class="w-48 h-48 object-cover rounded-lg shadow-md" style="top: -80px;">
                    <div class="absolute top-2 right-2 flex items-center justify-center bg-white p-2 rounded-full shadow-md">
                        <i class="fa fa-shopping-cart text-xs text-black add-to-cart" onclick="addToCart('25.00€')"></i> <!-- Icône de panier -->
                    </div>
                    <div class="absolute bottom-2 left-2 bg-black bg-opacity-60 text-white p-2 rounded">
                        25.00€ <!-- Prix -->
                    </div>
                </div>
                <div class="relative">
                    <img src="/images/image5.jpg" alt="Image 5" class="w-48 h-48 object-cover rounded-lg shadow-md" style="top: -120px;">
                    <div class="absolute top-2 right-2 flex items-center justify-center bg-white p-2 rounded-full shadow-md">
                        <i class="fa fa-shopping-cart text-xs text-black add-to-cart" onclick="addToCart('15.00€')"></i> <!-- Icône de panier -->
                    </div>
                    <div class="absolute bottom-2 left-2 bg-black bg-opacity-60 text-white p-2 rounded">
                        15.00€ <!-- Prix -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Artistes du moment -->
    <section class="artiste-section">
        <h2 class="artiste-title">Artiste du moment</h2>
        <div class="artistes">
            <!-- Artiste 1 -->
            <div class="artiste">
                <div class="artiste-image-container">
                    <img src="/images/Rectangle 1.jpg" alt="Artiste 1" class="artiste-image artiste-image-1">
                </div>
                <p class="artiste-description" style="font-size: 1.2rem; font-family: 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #333;">
                    Alphonse est spécialisé dans le tissage traditionnel du pagne tissé (kita). Originaire de Savalou, il s’engage dans la valorisation des techniques ancestrales de tissage. Il participe à divers salons d’artisanat au Bénin et en Afrique de l’Ouest, promouvant le textile béninois comme produit d’exportation culturelle.
                </p>
            </div>

            <!-- Artiste 2 -->
            <div class="artiste">
                <div class="artiste-image-container">
                    <img src="/images/Rectangle 3.jpg" alt="Artiste 2" class="artiste-image artiste-image-2">
                </div>
                <p class="artiste-description" style="font-size: 1.2rem; font-family: 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #333;">Donatien Adandé est un sculpteur béninois reconnu pour son travail du
                    bois.
                    Il est basé à Abomey et puise son inspiration dans les traditions royales et les symboles vodoun.
                    Ses œuvres sont exposées dans plusieurs galeries africaines et européennes.
                    Il forme également de jeunes apprentis dans son atelier pour transmettre son savoir-faire.</p>
            </div>

            <!-- Artiste 3 -->
            <div class="artiste">
                <div class="artiste-image-container">
                    <img src="/images/Rectangle 2.jpg" alt="Artiste 3" class="artiste-image artiste-image-3">
                </div>
                <p class="artiste-description" style="font-size: 1.2rem; font-family: 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #333;">Charbel Gantua a remporté le prix d’or lors des FAM&DIY Awards 2019,
                    une distinction qui célèbre les meilleures femmes artisanes du Bénin. Son entreprise se spécialise
                    dans la création de
                    produits cosmétiques naturels et artisanaux.
                    Elle est saluée pour la qualité et l’originalité de ses créations.</p>
            </div>
        </div>
    </section>

    <!-- Section 3 -->

    <section class="section-3">
        <!-- Première partie (image à gauche, texte à droite) -->
        <div class="content">
            <div class="image-container">
                <img src="/images/image2.jpg" alt="Image 1" />
            </div>
            <div class="text">
                <h2>Savoir-faire béninois : entre passé et présent</h2>
                <p>
                    Les œuvres exposées dans cet espace, issues de l’artisanat béninois, ont longtemps été présentées de
                    manière traditionnelle. Aujourd’hui, nous avons repensé cette présentation afin de valoriser ces
                    créations dans toute leur richesse, leur diversité et leur modernité.
                </p>
                <p>
                    Cette nouvelle installation met en lumière le savoir-faire des artisanes et artisans du Bénin, tout
                    en replaçant leurs œuvres dans des contextes culturels et symboliques plus larges. Elle vise à
                    dépasser une vision figée de l’artisanat pour en révéler la créativité, l’innovation et les
                    multiples expressions contemporaines.
                </p>
            </div>
        </div>

        <!-- Deuxième partie (texte à gauche, image à droite) -->
        <div class="content content-reversed">
            <div class="text">
                <h2>Valoriser tous les visages de la création</h2>
                <p>
                    Avec cette nouvelle installation, il nous a semblé essentiel d’intégrer des œuvres issues de
                    l’artisanat local afin de proposer une présentation plus inclusive, plus ouverte, et surtout plus
                    fidèle à la réalité de la création artistique au Bénin.
                </p>
                <p>
                    Ces ajouts ne remplacent pas nos espaces dédiés à l’artisanat traditionnel, mais viennent les
                    compléter en mettant en lumière la place centrale qu’occupent ces savoir-faire dans notre patrimoine
                    culturel et artistique.
                </p>
            </div>
            <div class="image-container">
                <img src="/images/image5.jpg" alt="Image 2" />
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div>
            <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
            <p><a href="#visite">Accueil</a></p>
            <p><a href="#projet">Galleries</a></p>
            <p><a href="#contact">Contact</a></p>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-4">Contact</h3>
            <p>Email: example@example.com</p>
            <p>Téléphone: +229 00 00 00 00</p>
        </div>
    </footer>
</body>

<!-- Modal -->
<div id="paymentModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96 relative">
      <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-black text-xl">&times;</button>
      <h2 class="text-xl font-bold mb-4">Formulaire de commande</h2>
      <form id="paymentForm" onsubmit="submitForm(event)">
        <div class="mb-3">
          <label class="block mb-1 font-medium">Nom complet</label>
          <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" required />
        </div>
        <div class="mb-3">
          <label class="block mb-1 font-medium">Email</label>
          <input type="email" class="w-full border border-gray-300 rounded px-3 py-2" required />
        </div>
        <div class="mb-3">
          <label class="block mb-1 font-medium">Adresse de livraison</label>
          <textarea class="w-full border border-gray-300 rounded px-3 py-2" required></textarea>
        </div>
        <button type="submit" class="bg-[#c49b42] hover:bg-[#b28930] text-white font-bold py-2 px-4 rounded w-full">Envoyer</button>
      </form>
      <p id="confirmationMessage" class="text-green-600 mt-4 font-semibold hidden">Votre commande a été enregistrée, nous vous contacterons pour la livraison.</p>
    </div>
  </div>

  <script>
    // Ouvrir le modal
    function openModal() {
      document.getElementById("paymentModal").classList.remove("hidden");
    }

    // Fermer le modal
    function closeModal() {
      document.getElementById("paymentModal").classList.add("hidden");
      document.getElementById("confirmationMessage").classList.add("hidden");
      document.getElementById("paymentForm").reset();
    }

    // Soumettre le formulaire
    function submitForm(event) {
      event.preventDefault();
      document.getElementById("confirmationMessage").classList.remove("hidden");
      setTimeout(() => {
        closeModal();
      }, 3000);
    }

    // Ajouter le curseur pointer + déclencheur sur images et icônes panier
    document.addEventListener("DOMContentLoaded", () => {
      const clickableElements = document.querySelectorAll(".add-to-cart, .flex.items-end img");

      clickableElements.forEach(el => {
        el.style.cursor = "pointer";
        el.addEventListener("click", openModal);
      });
    });
  </script>

</html>
