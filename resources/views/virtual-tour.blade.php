<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Visite Virtuelle</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
  <div class="container mx-auto py-10 text-center">
    <h1 class="text-3xl font-bold">Visite Virtuelle 360°</h1>
    <iframe style="max-width:100%; width: 100%; height: 600px;"
    src="https://www.klapty.com/tour/tunnel/LR30Cj4PJb" frameborder="0"
    allowfullscreen mozallowfullscreen webkitallowfullscreen allowvr="true"
    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; vr"></iframe>
    <a href="/" class="mt-6 block text-blue-500">Retour</a>
  </div>
</body>
</html>
