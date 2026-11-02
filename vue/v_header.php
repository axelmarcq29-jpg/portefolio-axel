<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($titrePage) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v1.4">
  <script>
    // Applique le thème choisi avant l'affichage (évite un flash)
    try { var t = localStorage.getItem('theme'); if (t) document.documentElement.dataset.theme = t; } catch (e) {}
  </script>
</head>
<body>
<main>
  <nav>
    <b>Axel</b>
    <button class="toggle" id="theme" aria-label="Changer de thème">◐ Thème</button>
  </nav>
