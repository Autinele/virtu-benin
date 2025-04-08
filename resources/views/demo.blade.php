<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Démo du jeu</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      width: 100%;
      background-color: #c49b42 /* couleur or */
    }
    video {
      width: 100%;
      height: 100%;
      object-fit: contain;
      background-color: #c49b42 /* couleur or pour la vidéo aussi */
      display: block;
    }
  </style>
</head>
<body>
  <video id="demoVideo" autoplay playsinline>
    <source src="/videos/demo.mp4" type="video/mp4">
    Votre navigateur ne supporte pas la lecture vidéo.
  </video>

  <script>
    const video = document.getElementById('demoVideo');

    // Définit la vitesse de lecture à 2x
    video.playbackRate = 9.0;

    video.onended = function() {
      window.location.href = 'https://beethogedeon.github.io/wawo-puzzle/';
    };
  </script>
</body>
</html>
