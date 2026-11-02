  <header class="hero">
    <div>
      <p class="kicker">Développeur · Game dev débutant</p>
      <h1>Salut, moi c’est <span>Axel</span>.</h1>
      <p class="lead">Étudiant en BTS SIO, je me forme au développement web et au jeu vidéo. Voici mon premier jeu 2D, réalisé de A à Z avec Unity.</p>
      <a class="btn" href="#a-propos">a propos de moi</a> 
      <br>
      <a class="btn" href="#jeu">Jouer</a><a class="btn ghost" href="#difficultes">Voir comment je l’ai fait</a>
    </div>
    <svg class="ship" viewBox="0 0 200 240" role="img" aria-label="Vaisseau spatial">
      <path d="M100 10 C140 60 150 130 140 170 L60 170 C50 130 60 60 100 10Z" fill="#e8eaff" stroke="#141a33" stroke-width="5"/>
      <circle cx="100" cy="88" r="20" fill="#6aa6ff" stroke="#141a33" stroke-width="5"/>
      <path d="M60 140 L20 195 L62 175Z M140 140 L180 195 L138 175Z" fill="#e8503a" stroke="#141a33" stroke-width="5" stroke-linejoin="round"/>
      <path d="M82 178 Q100 235 118 178Z" fill="#ffd166" stroke="#141a33" stroke-width="5" stroke-linejoin="round"/>
    </svg>
  </header>

  <section id="a-propos">
    <p class="kicker">00 · a propos de moi</p>
    <h2>une presentation breve</h2>
    <?php foreach ($a_propos as $propos): ?>
      <div class="card">
        <span class="tag"><?= htmlspecialchars($propos['tag']) ?></span>
        <h3><?= htmlspecialchars($propos['titre']) ?></h3>
        <p><?= htmlspecialchars($propos['texte']) ?></p>
      </div>
    <?php endforeach; ?>
  </section>

  <section id="xp">
    <p class="kicker">B1 · experience profesionnel</p>
    <h2>travaux réaliser</h2>
    <?php foreach ($xp as $xp): ?>
      <div class="card">
        <span class="tag"><?= htmlspecialchars($xp['tag']) ?></span>
        <h3><?= htmlspecialchars($xp['titre']) ?></h3>
        <p><?= htmlspecialchars($xp['texte']) ?></p>
        <?php if (!empty($xp['image'])) :?>
        <img src="<?= htmlspecialchars($xp['image']) ?>" alt="" loading="lazy">
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </section>

  <section id="jeu">
    <p class="kicker">01 · Le jeu</p>
    <h2><?= htmlspecialchars($jeu['nom']) ?></h2>
    <p><?= htmlspecialchars($jeu['resume']) ?></p>
    <div class="jeu-cadre">
      <iframe src="<?= htmlspecialchars($jeu['embed']) ?>" title="<?= htmlspecialchars($jeu['nom']) ?>"allowfullscreen loading="lazy"></iframe>
    </div>
<p><a class="btn" href="<?= htmlspecialchars($jeu['url']) ?>" target="_blank" rel="noopener">Ouvrir sur Unity Play</a></p>
    <div class="meta">
      <?php foreach ($jeu['infos'] as $label => $valeur): ?>
        <div><small><?= htmlspecialchars(mb_strtoupper($label)) ?></small><?= htmlspecialchars($valeur) ?></div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="role">
    <p class="kicker">02 · Mon rôle</p>
    <h2>Ce que j’ai fait moi-même</h2>
    <div class="card"><p><?= htmlspecialchars($role) ?></p></div>
  </section>

  <section id="difficultes">
    <p class="kicker">03 · Les difficultés</p>
    <h2>Ce qui m’a fait progresser</h2>
    <?php foreach ($difficultes as $d): ?>
      <div class="card">
        <span class="tag"><?= htmlspecialchars($d['tag']) ?></span>
        <h3><?= htmlspecialchars($d['titre']) ?></h3>
        <p><?= htmlspecialchars($d['texte']) ?></p>
      </div>
    <?php endforeach; ?>
  </section>

  <section id="processus">
    <p class="kicker">04 · Le processus</p>
    <h2>Du prototype au jeu publié</h2>
    <div class="steps">
      <?php foreach ($etapes as [$nom, $texte, $images]): ?>
        <div>
          <b><?= htmlspecialchars($nom) ?></b>
          <br><?= htmlspecialchars($texte) ?>
          <br> <img src="<?= $images ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="prototype">
    <p class="kicker">05 · Prochain projet</p>
    <h2>Un prototype en préparation</h2>
    <p>Un deuxième jeu, encore au stade du dessin : <?= htmlspecialchars($prototype['intro']) ?>.</p>
    <div class="proto-grid">
      <?php foreach ($prototype['images'] as $img): ?>
        <figure class="shot <?= htmlspecialchars($img['classe']) ?>">
          <img src="<?= htmlspecialchars($img['src']) ?>" alt="<?= htmlspecialchars($img['alt']) ?>" loading="lazy">
          <figcaption><?= htmlspecialchars($img['legende']) ?></figcaption>
        </figure>
      <?php endforeach; ?>
      <?php for ($i = 1; $i <= $prototype['vides']; $i++): ?>
        <figure class="shot empty"><span>Image <?= count($prototype['images']) + $i ?><br>bientôt</span></figure>
      <?php endfor; ?>
    </div>
  </section>
