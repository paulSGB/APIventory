<?php
  session_start();

  // Ces identifiants et mots de passe sont des exemples.
  // En pratique, vous devez les stocker de manière sécurisée dans une base de données.
  $valid_username = 'admin-exim';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];
	  $encryption_key="Eu@R84*e-mm2N9";
	  $encrypted_text = "pG0pVeOo40R+6HioRhrIQg==";
	  $decrypted_text = openssl_decrypt($encrypted_text, 'aes-256-cbc', $encryption_key);
      if ($username === $valid_username && $password === $decrypted_text) {
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          // Redirection vers la page accueil.php après une connexion réussie
          header("Location: liste-recherche.php");
          exit();
      } else {
          $error_message = "Identifiant ou mot de passe incorrect.";
      }
  }

 include 'pages/top.php';

 ?>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 d-flex animated animTop justify-content-center align-items-center heightCustom bg-cover start-effect masque text-center" style="background-image: url('images/main-background.jpg');">
        <div>
          <img src="images/icons/logo.svg" alt="logo client" class="logo">
          <h1>APIventory</h1>
        </div>
        <span class="d-flex justify-content-center align-items-center fullBrand">
          <img src="images/icons/ppm-logo.svg" alt="logo PrimPromo" class="logo">
          <ul>
            <li class="font-weight-bold">PrimPromo</li>
            <li class="small">by Open</li>
          </ul>
        </span>
      </div><!-- / col-lg-6 -->
      <div class="col-lg-6 d-flex animated animBottom justify-content-center align-items-center heightCustom">
        <div class="col-sm-7 col-md-11 col-xl-7 start-effect">

          <div class="card p-lg-5 py-5 px-3 shadow">
            <span class="text-uppercase">S'identifier</span>
            <?php if (isset($error_message)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error_message; ?>
                </div>
            <?php } ?>
            <form action="index.php" method="post">
              <div class="my-4">
                  <label for="username" class="sr-only">Adresse email</label>
                  <input id="username" name="username" class="form-control" placeholder="Adresse email" required>

                  <label for="password" class="sr-only">Mot de Passe</label>
                  <input type="password" class="form-control" id="password" name="password" required>

                  <div class="d-flex justify-content-between align-items-center small mt-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="se_souvenir">
                      <label class="custom-control-label" for="se_souvenir">Se souvenir de moi</label>
                    </div>

                    <a href="#" class="text-light" data-toggle="modal" data-target="#mdpOublie">Mot de passe oublié ?
                    </a>
                  </div>
              </div>
              <button class="btn btn-lg btn-custom btn-block mt-3" type="submit">
                <svg class="mr-2"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="251"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg><span>Connexion</span>
              </button>
            </form>
          </div>
        </div>
      </div>  <!-- / col-lg-6 -->
    </div> <!-- / row -->
</div> <!-- / container-fluid -->
  <div class="modal fade" id="mdpOublie">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Réinitialiser mot de passe</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="alert alert-warning alert-dismissible fade show mt-3 mb-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Veuillez renseigner <strong>l'adresse email</strong> utilisée pour vous enregistrer
          </div>
          <label>Adresse email</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required="" autofocus="">
          <button data-toggle="modal" data-target="#mdpValide" class="btn btn-lg btn-primary btn-block mt-3 mb-3" type="submit">Réinitialiser le mot de passe</button>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="mdpValide">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Réinitialiser mot de passe</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="alert alert-success fade show mt-3 mb-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p><strong>C'est enregistré !</strong></p>
            <p>Un mail de confirmation vient de vous être envoyé.</p>
          </div>
          <button class="btn btn-lg btn-secondary btn-block mt-3 mb-3" data-dismiss="modal">Retour Connexion</button>
        </div>

      </div>
    </div>
  </div>

  <?php
    include 'pages/footer.php';
   include 'pages/bottom.php';
   ?>
