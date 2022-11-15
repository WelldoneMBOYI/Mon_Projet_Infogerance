<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title><?= $titreCreeClient ?> </title>
  <link rel="stylesheet" href="/assets/assets_client/create.client.style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container divClient">
    <div class="title">Inscription</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom et prenom</span>
            <input type="text" placeholder="Entrer votre nom" required>
          </div>
          <div class="input-box">
            <span class="details">Nom d'utilisateur</span>
            <input type="text" placeholder="Entrer votre nom d'utilisateur" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="text" placeholder="Entrer votre email" required>
          </div>
          <div class="input-box">
            <span class="details">Numéro du telephone</span>
            <input type="text" placeholder="Entrer votre numéro" required>
          </div>
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input type="text" placeholder="Entrer votre mot de passe" required>
          </div>
          <div class="input-box">
            <span class="details">Confirmer le mot de passe</span>
            <input type="text" placeholder="Confirmer votre mot de passe" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Le genre</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Homme</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Femme</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Préfère ne pas le dire</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="S'inscrire">
        </div>
      </form>
    </div>
  </div>
  <div class="footerClient">
    <footer id="footer">
      <div class="copyright"> Réalisé par Welldone MBOYI <strong><span>Developper</span></strong>. Merci infiniment</div><br>
      <div class="credits">Entreprise Informatique <a href="https://freeetemplates.com/">IT CORP</a></div>
    </footer>
  </div>

</body>

</html>