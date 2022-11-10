<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="/assets/assets_client/accueil.client.style.css">
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title><?= $titreClient ?></title>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><a href="#"></a></span>

            <div class="menu">
                <ul class="nav-links">
                    <li><a href="#">accueil</a></li>
                    <li><a href="form.create.client.view.php">Créer</a></li>
                    <li><a href="form.update.client.view.php">Mettre à jour</a></li>
                    <li><a href="#">Bloquer</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <h2 class="text-white">Mode</h2>
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">

                    <div class="searchToggle">

                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'></i>
                    </div>

                    <div class="search-field">
                        <input type="text" placeholder="Rechercher...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <footer id="footer" class="footer">
        <div class="copyright"> Réalisé par Welldone MBOYI <strong><span>Developper</span></strong>. Merci infiniment</div>
        <div class="credits">Entreprise Informatique <a href="https://freeetemplates.com/">IT CORP</a></div>
    </footer>
    <script src="/assets/assets_client/accueil.client.script.js"></script>

</body>

</html>