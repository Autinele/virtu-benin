<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Virtu-Benin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-size: 0.95rem;
            /* Police légèrement réduite */
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

<body class="m-0 p-0">

    <!-- Section principale -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('/images/3.jpg');">
        <!-- Couche d'ombre -->
        <div class="absolute inset-0 bg-black/40"></div>

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



        <!-- Contenu -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#c49b42] leading-tight">
               Explorez les sites culturels<br> comme si vous y étiez.
            </h1>
            <p class="mt-6 max-w-2xl text-white text-lg">
                Avec un simple mouvement de souris, explore, joue, découvre et soutiens la richesse culturelle du Bénin grâce à une plateforme unique mêlant
                patrimoine, artisanat et aventure interactive.
            </p>
            <div class="mt-8 flex space-x-4">
                <a href="#sites"
                    class="bg-[#c49b42] text-black px-6 py-3 rounded-md font-semibold hover:bg-yellow-500 transition">
                    Découvrir les sites
                </a>
                <a href="/demo" target="_blank"
                    class="border border-white px-6 py-3 rounded-md font-semibold hover:bg-white hover:text-black transition">
                    Commencer l'aventure
                </a>
            </div>
        </div>

        <!-- Bannière centrée en bas -->
        <div
    class="absolute bottom-8 left-1/2 transform -translate-x-1/2 w-4/5 bg-yellow-100 text-black rounded-lg shadow-lg flex items-center justify-between px-6 py-4 text-sm space-x-4">

    <!-- Partie gauche avec texte -->
    <div class="flex items-center space-x-2">
        <span>🎁</span>
        <span>Acheter des objets dans le jeu, recevez-les chez vous !</span>
    </div>

    <!-- Ligne verticale -->
    <div class="h-10 border-l-2 border-[#c49b42]"></div> <!-- Ligne verticale verte -->

    <!-- Partie droite avec texte -->
    <div>
        Chaque achat aide à soutenir un artisan local et à préserver les sites
    </div>
</div>

    </section>

    <!-- Section des visites -->
    <section id="sites" class="py-20 px-4 bg-white">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
            Une visite... <span class="text-[#c49b42]">sans bouger de chez vous</span>
        </h2>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Carte 1 -->
            <div class="border border-[#c49b42] rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <img src="/images/site1.jpg" alt="Esplanade de l'Amazone" class="w-full h-60 object-cover" />
                <div class="p-6">
                    <h3 class="text-[#c49b42] font-bold text-lg mb-2">Esplanade de l'Amazone</h3>
                    <p class="text-gray-700 text-sm">
                        Le monument Amazone renvoie à un ancien régiment militaire entièrement féminin qui a existé
                        jusqu’à la fin du XIXe siècle dans le royaume de Danxomè.
                        Il s’agit d’un corps créé sous le règne de Tassi Hangbè (de 1708 à 1711) et dénommé « Ahosi » ou
                        encore « Agoodjié », restructuré par le roi Ghézo.
                    </p>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="border border-[#c49b42] rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <img src="/images/site2.jpg" alt="Temple des pythons" class="w-full h-60 object-cover" />
                <div class="p-6">
                    <h3 class="text-[#c49b42] font-bold text-lg mb-2">Temple des pythons</h3>
                    <p class="text-gray-700 text-sm">
                        Le Temple des Pythons est un sanctuaire vaudou situé à Ouidah. Il abrite des pythons royaux
                        sacrés considérés comme des divinités, vivant librement dans le temple. On y découvre aussi des
                        statues, des objets sacrés et un vocabulaire codé propre à la royauté.
                    </p>
                </div>
            </div>

            <!-- Carte 3 -->
            <div
                class="border border-[#c49b42] rounded-lg overflow-hidden shadow hover:shadow-lg transition relative group">
                <img src="/images/tata.jpg" alt="Tata Somba" class="w-full h-60 object-cover" />

                <!-- Icônes et texte cachés jusqu'au survol -->
                <div
                    class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black bg-opacity-50">
                    <!-- Icône d'œil pour voir l'image en grand -->
                    <button onclick="openModal('/images/tata.jpg')" class="text-white text-lg mx-2">
                        <i class="fa fa-eye"></i>
                    </button>
                    <!-- Icône de lien pour commencer la visite -->
                    <a href="/visite" class="text-white text-lg mx-2">
                        <i class="fa fa-link"></i>
                    </a>
                </div>

                <div class="p-6">
                    <h3 class="text-[#c49b42] font-bold text-lg mb-2">Tata Somba</h3>
                    <p class="text-gray-700 text-sm">
                        Les Tatas Somba, véritables forteresses traditionnelles du nord du Bénin, témoignent de
                        l'ingéniosité du peuple Somba. Ces habitations en terre battue, à la fois résidentielles et
                        défensives, sont un symbole fort de l'histoire et de la culture de la région.
                    </p>
                </div>
            </div>

            <!-- Modal -->
            <div id="imageModal"
                class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden"
                onclick="closeModal(event)">
                <div class="relative bg-white rounded-lg p-4 max-w-3xl w-full" onclick="event.stopPropagation()">
                    <!-- Bouton fermer -->
                    <button onclick="closeModal()"
                        class="absolute top-2 right-2 text-gray-500 hover:text-black text-2xl">
                        &times;
                    </button>
                    <!-- Image agrandie -->
                    <img id="modalImage" src="" alt="Image agrandie" class="w-full h-auto rounded">
                </div>
            </div>

            <!-- Script pour ouvrir et fermer le modal -->
            <script>
                function openModal(imageSrc) {
                    document.getElementById('modalImage').src = imageSrc;
                    document.getElementById('imageModal').classList.remove('hidden');
                }

                function closeModal(event) {
                    // Vérifie si l'événement est fourni (quand on clique dans le vide)
                    if (event) {
                        // Ferme seulement si on clique sur le fond noir (pas sur l'image ou le contenu)
                        if (event.target.id === 'imageModal') {
                            document.getElementById('imageModal').classList.add('hidden');
                        }
                    } else {
                        // Fermer via le bouton de fermeture
                        document.getElementById('imageModal').classList.add('hidden');
                    }
                }
            </script>


            <!-- Modal -->
            <div id="imageModal"
                class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
                <div class="relative bg-white rounded-lg p-4 max-w-3xl w-full">
                    <!-- Bouton fermer -->
                    <button onclick="closeModal()"
                        class="absolute top-2 right-2 text-gray-500 hover:text-black text-2xl">
                        &times;
                    </button>
                    <!-- Image agrandie -->
                    <img id="modalImage" src="" alt="Image agrandie" class="w-full h-auto rounded">
                </div>
            </div>

            <!-- Script pour ouvrir et fermer le modal -->
            <script>
                function openModal(imageSrc) {
                    document.getElementById('modalImage').src = imageSrc;
                    document.getElementById('imageModal').classList.remove('hidden');
                }

                function closeModal() {
                    document.getElementById('imageModal').classList.add('hidden');
                }
            </script>

        </div>
    </section>

    <!-- Bouton flèche -->
    <div class="flex justify-center mt-12">
        <button
            class="flex items-center border border-[#c49b42] px-6 py-3 rounded-full text-[#c49b42] hover:bg-[#c49b42] hover:text-white transition">
            <span class="mr-2">Suivant</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10.293 15.707a1 1 0 010-1.414L13.586 11H3a1 1 0 110-2h10.586L10.293 4.707a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    </section>

    <!-- Section Derrière le projet -->
    <section class="py-20 px-4 bg-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">
            Derrière le projet
        </h2>
        <div class="w-20 h-1 bg-[#c49b42] mb-6 mx-auto"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="/images/carte.jpg" alt="Carte du Bénin" class="border border-[#c49b42] rounded-lg p-4" />
            </div>
            <div>

                <p class="text-gray-700 mb-4">
                    Nous sommes un groupe de jeunes venus de différents horizons, unis par un amour commun : celui du
                    Bénin, de ses racines, de sa créativité… et de l’innovation.
                </p>
                <p class="text-gray-700 mb-4">
                    Notre mission ? Redonner vie à notre patrimoine culturel en le rendant accessible, vivant et
                    engageant.
                </p>
                <p class="text-gray-700 mb-4">
                    Comment ? Grâce à un jeu mobile ludique, inspiré de l’univers de Candy Crush, qui fait voyager à
                    travers les sites historiques du Bénin.
                </p>
                <p class="text-gray-700 mb-4">
                    Chaque niveau du jeu vous transporte dans une région, où il vous faudra résoudre des énigmes ou
                    reconstituer des images en puzzle pour débloquer des histoires fascinantes et discuter en direct
                    avec un guide local.
                </p>
                <p class="text-gray-700 mb-4">
                    Votre avatar pourra porter des tenues traditionnelles issues de chaque région visitée. Certaines
                    seront à gagner, d’autres à acheter, toujours créées par nos artisans béninois talentueux.
                </p>
                <p class="text-gray-700 mb-4">
                    Mais ce n’est pas tout : les objets virtuels que vous achetez dans le jeu sont bien réels. Ils vous
                    seront livrés à domicile, et une partie des revenus générés sera reversée aux communautés locales
                    pour entretenir et préserver les sites culturels.
                </p>
                <p class="text-gray-700 mb-4">
                    Pour ceux qui préfèrent découvrir sans jouer, nous avons aussi une galerie d’exposition des œuvres
                    d’artisanat local – peinture, sculpture, tressage de cordes, bijoux en pagne… Tout est Made in
                    Bénin, tout est vrai.
                </p>
                <p class="text-gray-700 mb-4">
                    Ensemble, nous faisons plus que jouer.
                </p>
                <p class="text-gray-700 mb-6">
                    Nous explorons, nous partageons, et nous bâtissons un avenir où culture, technologie et solidarité
                    se donnent la main.
                </p>
                <a href="/detailjeu">
                <button
                    class="bg-[#c49b42] text-white px-6 py-3 rounded-md font-semibold hover:bg-yellow-500 transition">
                    En savoir plus
                </button> </a>
            </div>
        </div>
    </section>

    <!-- Section Newsletter -->
    <section class="py-20 px-4 bg-gray-50">
        <!-- Section pour centrer uniquement le titre et la ligne -->
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Restez connecté avec nous !
            </h2>
            <!-- Largeur modifiée pour élargir la ligne -->
            <div class="w-1/3 h-1 bg-[#c49b42] mx-auto mb-8"></div>
        </div>

        <!-- Section pour le contenu aligné à gauche -->
        <div class="max-w-4xl mx-auto">
            <p class="text-gray-700 mb-8 text-justify">
                Soyez les premiers à découvrir les dernières nouveautés de notre jeu, les œuvres uniques de nos artisans
                locaux, et les événements à ne pas manquer ! Inscrivez-vous à notre newsletter pour recevoir des
                informations exclusives et soutenir la culture béninoise.
            </p>
            <div class="flex justify-start mb-4 text-xl font-semibold">
                <svg class="w-6 h-6 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M2 4a2 2 0 012-2h16a2 2 0 012 2v2l-10 6L2 6V4zm0 4v12a2 2 0 002 2h16a2 2 0 002-2V8l-10 6L2 8z" />
                </svg>
                Abonnez-vous à notre newsletter
            </div>
            <form class="flex flex-col md:flex-row items-center justify-start gap-4">
                <input type="email" placeholder="Adresse mail"
                    class="w-full md:w-1/2 px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#c49b42]"
                    required />
                <button type="submit"
                    class="bg-[#c49b42] text-white px-6 py-3 rounded-md font-semibold hover:bg-yellow-500 transition">
                    S'abonner
                </button>
            </form>
            <div class="text-left mt-6">
                <p class="text-gray-700 font-medium mb-2">Ce que vous obtiendrez en vous inscrivant :</p>
                <ul class="text-gray-700 list-disc list-inside">
                    <li>Des mises à jour sur les nouveaux niveaux du jeu</li>
                    <li>Des offres exclusives sur les produits artisanaux</li>
                    <li>Des invitations aux événements culturels locaux</li>
                </ul>
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
