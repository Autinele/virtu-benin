<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto py-10 text-center">
        <h1 class="text-3xl font-bold">Panier</h1>
        <p class="mt-4">Ajoutez des articles ou soutenez un artisan</p>

        <button class="bg-green-500 text-white px-4 py-2 rounded mt-4" onclick="alert('Merci pour votre soutien !')">
            Soutenir un artisan
        </button>

        <a href="/" class="mt-6 block text-blue-500">Retour</a>
    </div>
</body>
</html>
