<!-- Tout ce contenu sera stocké dans la variable $resultat -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title><?= $titreAdmin; ?></title>
   <meta name="robots" content="noindex, nofollow">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <link href="/assets/img/favicon.png" rel="icon">
   <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link href="/https://fonts.gstatic.com" rel="preconnect">
   <link rel="stylesheet" href="/assets/assets_icons/css.css">
   <link href="/assets/assets_template/css/bootstrap.min.css" rel="stylesheet">
   <link href="/assets/assets_template/css/bootstrap-icons.css" rel="stylesheet">
   <link href="/assets/assets_template/css/boxicons.min.css" rel="stylesheet">
   <link href="/assets/assets_template/css/quill.snow.css" rel="stylesheet">
   <link href="/assets/assets_template/css/quill.bubble.css" rel="stylesheet">
   <link href="/assets/assets_template/css/remixicon.css" rel="stylesheet">
   <link href="/assets/assets_template/css/simple-datatables.css" rel="stylesheet">
   <link href="/assets/assets_template/css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="/assets/assets_icons/boxicons.min.css">
   <link rel="stylesheet" href="/node_modules/boxicons/css/boxicons.min.css">
</head>

<body>
   <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between"> <a href="dashboard.template.view.php" class="logo d-flex align-items-center"> <img src="assets/img/logo.png" alt=""> <span class="d-none d-lg-block">InfoGerance</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
      <div class="search-bar">
         <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query" placeholder="Rechercher..." title="Enter search keyword"> <button type="submit" title="Search"><i class="bi bi-search"></i></button></form>
      </div>
      <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i class="bi bi-search"></i> </a></li>
            <li class="nav-item dropdown">
               <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-bell"></i> <span class="badge bg-primary badge-number">4</span> </a>
               <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                  <li class="dropdown-header">Vous avez 4 notifications <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Tout Voir plus</span></a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li class="notification-item">
                     <i class="bi bi-exclamation-circle text-warning"></i>
                     <div>
                        <h4>Rappel d'intervention</h4>
                        <p>Vous devez effectuer une intervention dans</p>
                        <p>30 minutes déjà passé</p>
                     </div>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li class="notification-item">
                     <i class="bi bi-x-circle text-danger"></i>
                     <div>
                        <h4>Maintenance Currative</h4>
                        <p>Vous avez été notifié sur un incident imprevu</p>
                        <p>Il y a une heure</p>
                     </div>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li class="notification-item">
                     <i class="bi bi-check-circle text-success"></i>
                     <div>
                        <h4>Intervention effectué</h4>
                        <p>Votre intervention a été validée</p>
                        <p>Il y a deux heures passées </p>
                     </div>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li class="notification-item">
                     <i class="bi bi-info-circle text-primary"></i>
                     <div>
                        <h4>L'etat des appareils</h4>
                        <p>Vous avez des notifications des mises a jour</p>
                        <p>Il y a 4 heures</p>
                     </div>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li class="dropdown-footer"> <a href="#">Voir plus toutes les notifications</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown pe-3">
               <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="/assets/assets_template/img/photo.jpg" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">Collaborateur</span> </a>
               <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                     <h6>Welldone</h6>
                     <span>Web Developper</span>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i class="bi bi-person"></i> <span>Mon Profile</span> </a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li> <a class="dropdown-item d-flex align-items-center" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>Besoin d'aide ?</span> </a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li> <a class="dropdown-item d-flex align-items-center" href="/index.php"> <i class="bi bi-box-arrow-right"></i> <span>Se deconnecter</span> </a></li>
               </ul>
            </li>
         </ul>
      </nav>
   </header>

   <!-- ============================================================================================= -->
   <!-- La section du sidebar -->
   <section>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm">
               <aside id="sidebar" class="sidebar">
                  <ul class="sidebar-nav" id="sidebar-nav">
                     <li class="nav-item"> <a class="nav-link " href="dashboard.template.view.php"> <i class='bx bx-home-alt icon'></i> <span>Acceuil</span> </a></li>
                     <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class='bx bxs-cube-alt'></i><span>Parc</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                           <li> <a href="components-alerts.html"> <i class="bi bi-circle"></i><span>Ordinateurs</span> </a></li>
                           <li> <a href="components-accordion.html"> <i class="bi bi-circle"></i><span>Moniteurs</span> </a></li>
                           <li> <a href="components-badges.html"> <i class="bi bi-circle"></i><span>Logiciels</span> </a></li>
                           <li> <a href="components-breadcrumbs.html"> <i class="bi bi-circle"></i><span>Materiels réseau</span> </a></li>
                           <li> <a href="components-buttons.html"> <i class="bi bi-circle"></i><span>Peripheriques</span> </a></li>
                           <li> <a href="components-carousel.html"> <i class="bi bi-circle"></i><span>Cartouches</span> </a></li>
                           <li> <a href="components-list-group.html"> <i class="bi bi-circle"></i><span>Telephones</span> </a></li>
                           <li> <a href="components-modal.html"> <i class="bi bi-circle"></i><span>Baies</span> </a></li>
                           <li> <a href="components-tooltips.html"> <i class="bi bi-circle"></i><span>Cables</span> </a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"><i class='bx bx-support'></i><span>Assistance</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                           <li> <a href="forms-layouts.html"> <i class="bi bi-circle"></i><span>Rapports</span> </a></li>
                           <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Planning</span> </a></li>
                           <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Statistiques</span> </a></li>
                           <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Incidents recurrents</span> </a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Gestion</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                           <li> <a href="tables-general.html"> <i class="bi bi-circle"></i><span>Licences</span> </a></li>
                           <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Documents</span> </a></li>
                           <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Logiciels</span> </a></li>
                           <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Machines</span> </a></li>
                           <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Parcs IT</span> </a></li>
                           <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Projets Infogerance</span> </a></li>
                           <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Interventions</span> </a></li>
                        </ul>
                     </li>
                     <li class="nav-item"> <a class="nav-link collapsed" href="users-profile.html"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
                     <li class="nav-item"> <a class="nav-link collapsed" href="pages-contact.html"> <i class='bx bxs-phone-call'></i><span>Contacts</span> </a></li>
                     <li class="nav-item"> <a class="dropdown-item d-flex align-items-center nav-link collapsed" href="/index.php"><i class='bx bx-log-out'></i><span>Se deconnecter</span> </a></li>

                  </ul>
               </aside>
            </div>
         </div>
      </div>
   </section>
   <!-- ============================================================================================= -->

   <!-- ============================================================================================ -->
   <!-- Premiere section -->
   <section class="maSection1">
      <!-- Premier container -->
      <div class="container-fluid">
         <!-- Premiere ligne -->
         <div class="row maDiv mt-1">
            <!-- Col1 de la premiere ligne -->
            <div class="col-sm mt-4">
               <div class="mb-3">

               </div>
            </div>
            <!-- Col2 de la premiere ligne -->
            <div class="col-sm mt-4">
               <div class="mb-3">
                  <div class="card mt-5 text-center maCard maPosition" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-laptop'></i>
                        <strong>
                           <div class="label">Les Ordinateurs</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard  maPosition" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-radar'></i>
                        <strong>
                           <div class="label">Les Licences</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard  maPosition" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-radar'></i>
                        <strong>
                           <div class="label">Les Logiciels</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard  maPosition" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-infinite'></i>
                        <strong>
                           <div class="label">Les Liens externes</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Col3 de la premiere ligne -->
            <div class="col-sm mt-4">
               <div class="mb-3">
                  <div class="card mt-5 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-printer'></i>
                        <strong>
                           <div class="label">Les Imprimantes</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bxs-error'></i>
                        <strong>
                           <div class="label text-white bg-danger">Les Incidents</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-group'></i>
                        <strong>
                           <div class="label">Les Clients</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-edit-alt'></i>
                        <strong>
                           <div class="label">Les Rapports</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Col4 de la premiere ligne -->
            <div class="col-sm mt-4">
               <div class="mb-3">
                  <div class="card mt-5 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bxl-microsoft-teams'></i>
                        <strong>
                           <div class="label">Les Projets Infogerance</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bxl-stack-overflow'></i>
                        <strong>
                           <div class="label">Les Statistiques</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bxs-message-edit'></i>
                        <strong>
                           <div class="label">Les Historiques</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-clipboard'></i>
                        <strong>
                           <div class="label">Les Contrats</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Col5 de la premiere ligne -->
            <div class="col-sm mt-4">
               <div class="mb-3">
                  <div class="card mt-5 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-error-circle'></i>
                        <strong>
                           <div class="label">Les Pannes</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-rfid'></i>
                        <stron>
                           <div class="label">Les Appareils Reseaux</div>
                        </stron>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center bg-danger-light maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class="bx bx-user"></i>
                        <strong>
                           <div class="label">Les Collaborateurs</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total:</h5>
                        <p class="card-text">With supporting.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
                  <div class="row"></div>
                  <div class="card mt-1 text-center maCard" style="width: 20rem;">
                     <div class="card-header">
                        <i class='bx bx-category-alt'></i>
                        <strong>
                           <div class="label">Les Parcs</div>
                        </strong>
                     </div>
                     <div class=" card-body">
                        <h5 class="card-title">Nombre Total</h5>
                        <p class="card-text">With supporting text bent.</p>
                        <a href="#" class="btn btn-primary text-center">Voir plus</a>
                     </div>
                  </div>
               </div>
            </div>
   </section>


   <footer id="footer" class="footer bg-white">
      <div class="copyright"> Réalisé par Welldone MBOYI <strong><span>Developper</span></strong>. Merci infiniment</div>
      <div class="credits">Entreprise Informatique <a href="https://freeetemplates.com/">IT CORP</a></div>
   </footer>
   <!-- Ce lien fait l'icon qui permet de remonter plus haut -->
   <a href="#" class="back-to-top d-flex bg-success align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <!-- <script src="/assets/assets_boostrap/js/bootstrap.min.js"></script> -->
   <script src="/assets/assets_template/js/apexcharts.min.js"></script>
   <script src="/assets/assets_template/js/bootstrap.bundle.min.js"></script>
   <script src="/assets/assets_template/js/chart.min.js"></script>
   <script src="/assets/assets_template/js/echarts.min.js"></script>
   <script src="/assets/assets_template/js/quill.min.js"></script>
   <script src="/assets/assets_template/js/simple-datatables.js"></script>
   <script src="/assets/assets_template/js/tinymce.min.js"></script>
   <script src="/assets/assets_template/js/validate.js"></script>
   <script src="/assets/assets_template/js/main.js"></script>

</body>

</html>