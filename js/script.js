// Bouton de thème clair / sombre (choix mémorisé dans le navigateur)
(function () {
  var racine = document.documentElement;
  var bouton = document.getElementById('theme');
  if (!bouton) return;

  bouton.addEventListener('click', function () {
    var sombre = racine.dataset.theme
      ? racine.dataset.theme === 'dark'
      : window.matchMedia('(prefers-color-scheme: dark)').matches;
    var nouveau = sombre ? 'light' : 'dark';
    racine.dataset.theme = nouveau;
    try { localStorage.setItem('theme', nouveau); } catch (e) {}
  });
})();
