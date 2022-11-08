<!-- Tout ce contenu sera stocké dans la variable $resultat -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Tableau de bord Admin</title>
   <meta name="robots" content="noindex, nofollow">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <link href="/assets/img/favicon.png" rel="icon">
   <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link href="/https://fonts.gstatic.com" rel="preconnect">
   <link href="/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
   <link href="/assets/css/boxicons.min.css" rel="stylesheet">
   <link href="/assets/css/quill.snow.css" rel="stylesheet">
   <link href="/assets/css/quill.bubble.css" rel="stylesheet">
   <link href="/assets/css/remixicon.css" rel="stylesheet">
   <link href="/assets/css/simple-datatables.css" rel="stylesheet">
   <link href="/assets/css/style.css" rel="stylesheet">
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
                  <li class="dropdown-header">Vous avez 4 notifications <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Tout voir</span></a></li>
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
                  <li class="dropdown-footer"> <a href="#">Voir toutes les notifications</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown pe-3">
               <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="/assets/img/photo.jpg" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span> </a>
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
                  <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i class="bi bi-gear"></i> <span>Paramettre du compte</span> </a></li>
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
               <li> <a href="components-cards.html"> <i class="bi bi-circle"></i><span>Imprimantes</span> </a></li>
               <li> <a href="components-carousel.html"> <i class="bi bi-circle"></i><span>Cartouches</span> </a></li>
               <li> <a href="components-list-group.html"> <i class="bi bi-circle"></i><span>Telephones</span> </a></li>
               <li> <a href="components-modal.html"> <i class="bi bi-circle"></i><span>Baies</span> </a></li>
               <li> <a href="components-tooltips.html"> <i class="bi bi-circle"></i><span>Cables</span> </a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class='bx bxs-phone-call'></i><span>Assistance</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="forms-elements.html"> <i class="bi bi-circle"></i><span>Tableau de bord</span> </a></li>
               <li> <a href="forms-layouts.html"> <i class="bi bi-circle"></i><span>Créer un rapport</span> </a></li>
               <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Planning</span> </a></li>
               <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Statistiques</span> </a></li>
               <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Incidents recurrents</span> </a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Gestion</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="tables-general.html"> <i class="bi bi-circle"></i><span>Licences</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Budgets</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>CLients</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Contrats</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Documents</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Logiciels</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Machines</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Budgets</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Equipes</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Parcs IT</span> </a></li>
               <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Projets Infogerance</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Edition des etats</span> </a></li>
               <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Interventions</span> </a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Administration</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Utilisateurs</span> </a></li>
               <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>Equipes</span> </a></li>
               <li> <a href="charts-echarts.html"> <i class="bi bi-circle"></i><span>Règles</span> </a></li>
            </ul>
         </li>
         <li class="nav-item"> <a class="nav-link collapsed" href="users-profile.html"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
         <li class="nav-item"> <a class="nav-link collapsed" href="pages-contact.html"> <i class="bi bi-envelope"></i> <span>Contacts</span> </a></li>
         <li class="nav-item"> <a class="dropdown-item d-flex align-items-center nav-link collapsed" href="/index.php"><i class='bx bx-log-out'></i><span>Se deconnecter</span> </a></li>

      </ul>
   </aside>
   <main id="main" class="main">
      <div class="pagetitle">
         <h1>Tableau de bord Admin</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.template.view.php">Acceuil</a></li>
               <li class="breadcrumb-item active">Tableau de bord</li>
            </ol>
         </nav>
      </div>
      <section class="section dashboard">
         <div class="row">
            <div class="col-lg-8">
               <div class="row">
                  <div class="col-xxl-4 col-md-6">
                     <div class="card info-card sales-card">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Les incidents<span>| D'aujourd'hui</span></h5>
                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class='bx bx-error'></i></div>
                              <div class="ps-3">
                                 <h6>145</h6>
                                 <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">d'incidents</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="card info-card revenue-card">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Incidents<span>| De ce mois</span></h5>
                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class='bx bx-error'></i></div>
                              <div class="ps-3">
                                 <h6>264</h6>
                                 <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">d'incidents</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xxl-4 col-xl-12">
                     <div class="card info-card customers-card">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Les incidents <span>| De cette année</span></h5>
                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class='bx bx-error'></i></div>
                              <div class="ps-3">
                                 <h6>1244</h6>
                                 <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">D'incidents</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="card recent-sales overflow-auto">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-md-6">
                     <div class="card info-card sales-card">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Les incidents<span>| D'aujourd'hui</span></h5>
                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class='bx bx-error'></i></div>
                              <div class="ps-3">
                                 <h6>145</h6>
                                 <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">d'incidents</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="card info-card revenue-card">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Incidents<span>| De ce mois</span></h5>
                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class='bx bx-error'></i></div>
                              <div class="ps-3">
                                 <h6>264</h6>
                                 <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">d'incidents</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-12">
                     <div class="card info-card customers-card">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Les incidents <span>| De cette année</span></h5>
                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class='bx bx-error'></i></div>
                              <div class="ps-3">
                                 <h6>1244</h6>
                                 <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">D'incidents</span>
                              </div>
                           </div>
                        </div>

                     </div>

                  </div>
                  <div class="col-12">
                     <div class="card recent-sales overflow-auto">
                        <div class="filter">
                           <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                 <h6>Filtrer</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">Par jour</a></li>
                              <li><a class="dropdown-item" href="#">Par mois</a></li>
                              <li><a class="dropdown-item" href="#">Par année</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
   <footer id="footer" class="footer">
      <div class="copyright"> Réalisé par Welldone MBOYI <strong><span>Developper</span></strong>. Merci infiniment</div>
      <div class="credits">Entreprise Informatique <a href="https://freeetemplates.com/">IT CORP</a></div>
   </footer>
   <!-- Ce lien fait l'icon qui permet de remonter plus haut -->
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <script src="/assets/js/apexcharts.min.js"></script>
   <script src="/assets/js/bootstrap.bundle.min.js"></script>
   <script src="/assets/js/chart.min.js"></script>
   <script src="/assets/js/echarts.min.js"></script>
   <script src="/assets/js/quill.min.js"></script>
   <script src="/assets/js/simple-datatables.js"></script>
   <script src="/assets/js/tinymce.min.js"></script>
   <script src="/assets/js/validate.js"></script>
   <script src="/assets/js/main.js"></script>

</body>

</html>