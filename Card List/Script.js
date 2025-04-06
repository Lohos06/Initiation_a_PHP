// Fonction pour ouvrir un onglet spécifique
function openTab(tabId) {
    // Masquer tous les contenus des onglets
    const contents = document.querySelectorAll('.tab-content'); // Sélectionne tous les éléments ayant la classe "tab-content"
    contents.forEach(content => content.classList.remove('active')); // Supprime la classe "active" de chaque contenu

    // Désactiver tous les boutons
    const buttons = document.querySelectorAll('.tab-button'); // Sélectionne tous les boutons d'onglets
    buttons.forEach(button => button.classList.remove('active')); // Supprime la classe "active" de chaque bouton

    // Activer le contenu de l'onglet sélectionné
    document.getElementById(tabId).classList.add('active'); // Ajoute la classe "active" au contenu correspondant à l'ID fourni

}

// DarkMode

// declaration des elements qui changeront en darkmode
let darkModeToggle = document.getElementById('darkModeToggle'); // Sélectionne le bouton pour activer ou désactiver le mode sombre
let body = document.body;
let entete = document.getElementById('entete');
let menu = document.getElementById('menu');
let footer = document.getElementById('footer');
let isDarkMode = body.classList.contains('dark-mode');

let darkmode = localStorage.getItem("darkmode"); // Initialisation du localstorage pour le dark mode

if (darkmode === "enabled") { // Si le darkmode est cativé dans le local storage, il sera activé dés le chargement du site
  activatedarkmode();
}

darkModeToggle.addEventListener("click", () => { // Change le contenu du localstorage en fonction de si le darkmode est actif ou non

  darkmode = localStorage.getItem("darkmode");

  if (darkmode !== "enabled") {
    localStorage.setItem ("darkmode","enabled");
    activatedarkmode ();
  }
  
  else {
    localStorage.setItem ("darkmode","disabled");
    deactivatedarkmode ();
  } 

  darkmode = localStorage.getItem("darkmode");

});

// Fonction pour activer le darkmode
function activatedarkmode () {
  darkModeToggle.classList.add('dark-mode');
  body.classList.add('dark-mode');
  entete.classList.add('dark-mode');
  menu.classList.add('dark-mode');
  footer.classList.add('dark-mode');
}
// Fonction pour desactiver le darkmode
function deactivatedarkmode () {
  darkModeToggle.classList.remove('dark-mode');
  body.classList.remove('dark-mode');
  entete.classList.remove('dark-mode');
  menu.classList.remove('dark-mode');
  footer.classList.remove('dark-mode');
}

// MenuBurger pour le format mobile

let BurgerMenuToggle = document.getElementById("BurgerMenuToggle"); // Selectionne le bouton du menu

// Donne une vlasse faisant apparaitre et disparaitre le menu apres avoir cliqué sur le bouton
BurgerMenuToggle.addEventListener("click", () => { 
    menu.classList.toggle("active");
});

function toggleFavorite(button) {
  button.classList.toggle("favori");

  // Change l'icône du cœur entre vide et plein
  let heart = button.querySelector(".heart");
  heart.textContent = button.classList.contains("favori") ? "❤️" : "♡";
}

document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('click', () => {
    card.classList.toggle('flipped');
  });
});