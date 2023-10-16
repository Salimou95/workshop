<?php 
  include("fonction.php");

?>

<header>
  <?php if(isConnected()): ?>
    <nav class="navbar navbar-expand-lg bg-primary px-5">
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="#">Concession Voiture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Publier</a>
            </li>
  <?php if(isAdmin()): ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="gestiondesvoiture.php">Gestion des voiture</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Gestion des membres</a>
            </li>
  <?php endif; ?>
            <li class="nav-item">
            <a class="nav-link text-white" href="#">Bienvenue <?php echo $_SESSION["membre"]['pseudo'] ?></a>
            </li>
            <li class="nav-item text-white">
            <a href="deconnexion.php" class="nav-link text-white">Déconnexion</a>
            </li>
      </ul>
    </div>
  </div>
</nav>
<?php else : ?>
<nav class="navbar navbar-expand-lg bg-primary px-5">
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="#">Concession Voiture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item text-white">
            <a href="connexion_utilsation.php" class="nav-link text-white">Connexion</a>
            </li>
            <li class="nav-item text-white">
            <a href="inscription.php" class="nav-link text-white">inscription</a>
            </li>
      </ul>
    </div>
  </div>
</nav>
<?php endif; ?>
</header>
