<!DOCTYPE html> <!-- initialisation du de la page -->
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="Style.css"> <!-- lien avec le fichier local CSS -->
    <link rel="stylesheet" href="cardgenerator.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- dispositif pour le responsive -->
    <meta name="description" content="All the Cards in the Game"> <!-- description de la page -->

    <title>Pokemon Trading Center</title> <!-- Nom de la page -->
</head>

<body>    
  <header id="entete">
    <div>
      <img class="logo" src="../assets/ImagePokemon/Pokeball.png" alt="Pokeball"> <!-- Logo de pokeball -->
    </div>
    <button id="BurgerMenuToggle" class="Burger-menu"> <!-- bouton menu burger pour mobile -->
      ☰
    </button>
    <nav id="menu">  <!-- Menu des liens et boutons -->
      <a href="../Landing page/Index.html">Pokemon Trading Center The Begining</a>
      <h3>Home</h3>  
      <a href="../Card List/Index.html">CardList</a>
      <a href="../MyCards/Index.html">MyCards</a>
      <a href="../Stats/Index.html">PokemonStats</a>
      <button id="darkModeToggle">Activer le mode sombre</button> <!-- bouton darkmode -->
      <button id="sign_in" onclick="window.location.href = '../sign_in/Index.html';">Sign in</button>
      <button id="sign_up" onclick="window.location.href = '../Sign_up/Index.html';">Sign up</button>
    </nav>
  </header>


  <main> <!-- section principale de la page -->
    <div id="filters"> <!-- zone des filtres -->
      <input type="text" id="searchBar" placeholder="Rechercher un Pokémon..."> <!-- barre de recheche -->
      
      <select id="typeFilter"> <!-- filtre par type -->
          <option value="">Tous les types</option>
          <option value="fire">Feu</option>
          <option value="water">Eau</option>
          <option value="grass">Plante</option>
          <option value="electric">Électrik</option>
          <option value="ice">Glace</option>
          <option value="fighting">Combat</option>
          <option value="psychic">Psy</option>
          <option value="ghost">Spectre</option>
          <option value="dragon">Dragon</option>
          <option value="dark">Ténèbres</option>
          <option value="fairy">Fée</option>
      </select>
  
      <select id="statFilter"> <!-- filtre par stats -->
          <option value="">Trier par stats</option>
          <option value="hp">PV</option>
          <option value="attack">Attaque</option>
          <option value="defense">Défense</option>
          <option value="speed">Vitesse</option>
      </select>
  </div>
  
  <div id="pokemon-container"></div> <!-- le receptacle a carte -->   
      </Section>     
  </main>
    <footer id="footer"> <!-- information pour contacter le responsable du site -->
      <div>
        <h3>Nos contacts : Lorenzo.lhostis@edu.devinci.fr</h3>
      </div>
    </footer>
    <script src="Script.js"></script> <!-- lien avec un fichier local JavaScript -->
    <script src="cardgenerator.js"></script> <!-- lien avec un fichier local JavaScript -->
</body>
</html> <!-- fin du document -->