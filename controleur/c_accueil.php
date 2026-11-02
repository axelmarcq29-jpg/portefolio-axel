<?php
/**
 * Contrôleur de la page d'accueil.
 * Il prépare les données puis charge les vues.
 * Pour modifier le contenu, change les tableaux ci-dessous.
 */
$titrePage = 'Axel – Portfolio';

$a_propos = [
    [
        'tag'   => 'Général',
        'titre' => 'Qui suis-je ?',
        'texte' => 'Axel Marcq, étudiant en BTS SIO au lycée André Malraux. Passionné d’informatique, je voudrais devenir développeur de jeux vidéo. J’aime les petites choses du quotidien, les personnes qui m’entourent, et je suis plutôt tranquille : j’apprécie aussi mes moments à moi.',
    ],
    [
        'tag'   => 'État d’esprit',
        'titre' => 'Ce que j’aime dans le développement',
        'texte' => 'C’est un domaine très vaste où il y a toujours quelque chose à apprendre, que ce soit une nouvelle technologie ou une nouvelle façon de développer.',
    ],
    [
        'tag'   => 'Formation',
        'titre' => 'Parcours',
        'texte' => 'Brevet, bac pro CIEL (2022-2025), puis BTS SIO en cours (2025-2027).',
    ],
];

$xp = [
    [
        'tag'   => 'Stage · 2026',
        'titre' => 'Phone House Concept, Lens',
        'texte' => 'Création d’un site avec base de données : vitrine, backend, design et analyse, en collaboration avec mon tuteur de stage.',
        'image' => 'image/site-phone-house.png'
    ],
    [
        'tag'   => 'Stage · 2024',
        'titre' => 'Phone House Concept, Lens',
        'texte' => 'Réparation de smartphones et d’un ordinateur portable en atelier.',
        'image' => 'image/reparation.jpg'
    ],
    [
        'tag'   => 'Stage · 2023',
        'titre' => 'Sonolens Sonorisation, Lens',
        'texte' => 'Câblage d’enceintes et d’une table de mixage, réparation d’une machine à fumée.',
    ],
    [
        'tag'   => 'Stage',
        'titre' => 'Initiative solidaire, Lens',
        'texte' => 'Réparation mécanique : moteur, triangles de suspension, feux de croisement et roues.',
    ],
];

$jeu = [
    'nom'    => 'space-survivors',
    'resume' => 'Un survival spatial 2D, mon premier projet sur Unity.',
    'url'    => 'https://play.unity.com/en/games/75a68580-f375-4758-bf03-506ff117cbfc/axel-space-entrainement',
    'embed'  => 'game/index.html?v1.3',
    'infos'  => [
        'Moteur'     => 'Unity 2D · C#',
        'Durée'      => '3 à 4 semaines',
        'Plateforme' => 'Web (WebGL)',
        'Commandes'  => 'Peu, voire pas de commandes',
    ],
];

$role = 'Programmation du vaisseau, des ennemis et obstacles, et des collisions. Les assets (sprites, sons, effets) sont faits par moi, d’après une formation Unity Learn pour apprendre à coder un jeu 2D sur Unity.';

$difficultes = [
    [
        'tag'   => 'Animation & états',
        'titre' => 'Comprendre les machines à états',
        'texte' => 'J’ai étudié le Gamekit2D pour comprendre comment un personnage passe d’un état à un autre avec l’Animator et les StateMachineBehaviour. Grâce à cela, j’ai pu réaliser un deuxième projet qui me sert de modèle et de base pour mes futurs projets de jeux vidéo : il me permet d’animer un personnage, ou encore de mettre une musique d’ambiance et des bruitages d’animations et de mouvements.',
    ],
    [
        'tag'   => 'Publication',
        'titre' => 'Du build éditeur au build web',
        'texte' => 'Un jeu qui marche dans l’éditeur n’est pas forcément prêt pour le web. En effet, j’ai eu beaucoup de mal à l’intégrer dans ce portfolio, car un problème de compression m’empêchait de le faire tourner n’importe où. Heureusement, la solution a été trouvée grâce à Unity Play, car c’est la configuration recommandée dans la documentation de Unity pour faire tourner un jeu web.',
    ],
];

$etapes = [
    ['V0',    'Premier prototype : un carré qui bouge.',  'image/prototype.png'],
    ['V1',    'Ajout du vaisseau que l’on contrôle.',  'image/v1.png'],
    ['V2',    'Version à compléter avant de la publier sur Unity Play.',  'image/v2.png'],
    ['Suite', 'Préparation d’un nouveau jeu.',  'image/sprite2.png'],
];

// Galerie du prototype : pour ajouter une image, ajoute une ligne ici
// (et mets le fichier dans le dossier image/), puis baisse 'vides' de 1.
$prototype = [
    'intro'  => '[nom du prototype, genre, idée en une phrase]',
    'images' => [
        ['src' => 'image/croquis-carte.jpg', 'alt' => 'Croquis au crayon de la carte du jeu', 'legende' => 'Croquis de la carte du jeu.', 'classe' => 'wide'],
        ['src' => 'image/sprite1.png', 'alt' => 'Sprite du personnage principal à écharpe orange', 'legende' => 'Sprite, variante 1. [légende]', 'classe' => 'sprite'],
        ['src' => 'image/sprite2.png', 'alt' => 'Sprite du personnage avec cheveux bruns et écharpe orange', 'legende' => 'Sprite, variante 2. [légende]', 'classe' => 'sprite'],
        ['src' => 'image/croquis.jpg', 'alt' => 'Croquis au crayon d’un monstre du jeu', 'legende' => 'Croquis d’un monstre du jeu. [apparence et mécanique]', 'classe' => 'sprite'],
        ['src' => 'image/croquis-debut-jeu.jpg', 'alt' => 'Croquis au crayon du début du jeu', 'legende' => 'Croquis de la zone de début de jeu.', 'classe' => 'wide'],
        ['src' => 'image/croquis-inventaire.jpg', 'alt' => 'Croquis au crayon de l’apparence de l’inventaire', 'legende' => 'Croquis de l’inventaire.', 'classe' => 'wide'],
        ['src' => 'image/croquis-monstre1.jpg', 'alt' => 'Croquis au crayon d’un monstre du jeu', 'legende' => 'Croquis d’un monstre du jeu. [apparence et mécanique]', 'classe' => 'wide'],
        ['src' => 'image/croquis-monstre2.jpg', 'alt' => 'Croquis au crayon d’un monstre du jeu', 'legende' => 'Croquis d’un monstre du jeu. [apparence et mécanique]', 'classe' => 'wide'],
        ['src' => 'image/croquis-boss1.jpg', 'alt' => 'Croquis au crayon d’un boss du jeu', 'legende' => 'Croquis d’un boss du jeu. [apparence]', 'classe' => 'wide'],
    ],
    'vides' => null,
];

$contact = ['mail' => 'axelmarcq29@gmail.com',
            'github' => 'https://github.com/axelmarcq29-jpg',
            'linkedin' => 'www.linkedin.com/in/axel-marcq-3ab8953a9'];

include 'vue/v_header.php';
include 'vue/v_accueil.php';
include 'vue/v_footer.php';