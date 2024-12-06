<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
   $path = $_SERVER['PHP_SELF'];
   $title = basename ($path);
   ?>
  <title>APIventory | Connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="favicon.ico" />
  <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
  <link type="text/css" href="css/style.css" rel="stylesheet" />
</head>


  <?php
  if ($title == "index.php") { ?>
    <body class="home">
      <?php } else { ?>
    <body class="not-home pt-0">
      <div id="toggle">
      </div>
      <nav class="sidebar animated animTop">
        <a class="navbar-brand" href="index.php">
          <span class="d-flex">
            <img src="images/icons/logo.svg" alt="logo client" class="logo">
            <span class="d-none d-md-inline">APIventory</span>
          </span>
        </a>
        <ul class="nav flex-column mainNav">
          <li class="nav-item">
            <a href="liste-recherche.php" class="active nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text"><path d="M15 12h-5"/><path d="M15 8h-5"/><path d="M19 17V5a2 2 0 0 0-2-2H4"/><path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3"/></svg>
              <span>Liste APIs</span>
            </a>
          </li>
        </ul>
        <ul class="user d-flex">
          <li class="d-flex align-items-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <ul>
              <li><a href="index.php">Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </nav>

  <?php }?> <!-- == not-home -->
