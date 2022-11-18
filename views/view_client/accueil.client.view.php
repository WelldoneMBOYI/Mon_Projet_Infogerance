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

    <!-- Style des card de la page d'accueil du cliet -->
    <link rel="stylesheet" href="/assets/assets_client/card.client.style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    <!-- Debut du card des clients -->
    <div class="container">
        <div class="box">
            <div class="image">
                <img src="/assets/assets_client/photo1.jpg">
            </div>
            <div class="name_job">David Chrish</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
            <div class="btns">
                <button>Modifier</button>
                <button>Mettre à jour</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/assets/assets_client/photo2.jpg" alt="">
            </div>
            <div class="name_job">Kristina Bellis</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
            <div class="btns">
                <button>Modifier </button>
                <button>Mettre à jour</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/assets/assets_client/photo3.jpg" alt="">
            </div>
            <div class="name_job">Stephen Marlo</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
            <div class="btns">
                <button>Modifier</button>
                <button>Mettre à jour</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="image">
                <img src="/assets/assets_client/photo1.jpg">
            </div>
            <div class="name_job">David Chrish</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
            <div class="btns">
                <button>Modifier</button>
                <button>Mettre à jour</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/assets/assets_client/photo2.jpg" alt="">
            </div>
            <div class="name_job">Kristina Bellis</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
            <div class="btns">
                <button>Modifier </button>
                <button>Mettre à jour</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/assets/assets_client/photo3.jpg" alt="">
            </div>
            <div class="name_job">Stephen Marlo</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
            <div class="btns">
                <button>Modifier</button>
                <button>Mettre à jour</button>
            </div>
        </div>
    </div>

    <!-- <div class="footerClient">
        <footer id="footer">
            <div class="copyright"> Réalisé par Welldone MBOYI <strong><span>Developper</span></strong>. Merci infiniment</div><br>
            <div class="credits">Entreprise Informatique <a href="https://freeetemplates.com/">IT CORP</a></div>
        </footer>
    </div> -->
    <script src="/assets/assets_client/accueil.client.script.js"></script>

</body>

</html>