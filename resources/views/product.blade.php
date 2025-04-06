<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit 3D</title>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto py-10 text-center">
        <h1 class="text-3xl font-bold">Objet Artisanal en 3D</h1>
        <model-viewer
            src="https://modelviewer.dev/shared-assets/models/Astronaut.glb"
            alt="Objet artisanal"
            auto-rotate
            camera-controls
            ar
            style="width: 100%; height: 500px;">
        </model-viewer>
        <a href="/" class="mt-6 block text-blue-500">Retour</a>
    </div>
</body>
</html>
