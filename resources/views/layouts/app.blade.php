<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c7d7f880b6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/formConnexion.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    
    <title>Document</title>
</head>
<body>


  <!-- Side-Nav -->
<div class="side-navbar justify-content-between flex-wrap flex-column" id="sidebar">

<div class="navbar">
  <a class="menu-btn" id="menu-btn">
    <i class="fa-solid fa-bars" style="color: #000000;"></i>
  </a>
</div>

    <div class="nav flex-column text-white w-100">
        <div class="nav-link2 padNav">
            <img class="LogoBoule LogoBoule2" src="{{ asset('img/bouleOrange2.png') }}" alt="">
            <img id="Logo" class="logoVille img-fluid "src="{{ asset('img/LogoVille.png') }}" alt="">
        </div>
    
        <hr>

        <a class="nav-link white my-2" href="{{ route('employes.accueil') }}">
          
              <img class="img-fluid logoUser" src="{{ asset('img/user.png') }}" alt="">
              <h5 class="padNav2">Nom de l'employé</h5>
          
        </a>

        <hr>

        <div href="#" class="nav-link ">
          <i class="fa-regular fa-rectangle-list orange"></i>
              <a class="orange titreNav" href="{{ route('formulaires.listesForm') }}"><span class="mx-2">Formulaires:</span></a>
              <div class="mt-3 mx-3">
                  <h6><a class="liens" href="{{ route('formulaires.formAccidentTravail') }}">Déclaration d'accident de travail</a></h6>
                  <h6><a class="liens" href="{{ route('formulaires.formSituationDangereuse') }}">Signalement de situation d'urgence</a></h6>
                  <h6><a class="liens" href="{{ route('formulaires.grilleAuditSST') }}">Audit SST</a></h6>
                  <h6><a class="liens" href="{{ route('formulaires.rapportAccident') }}">Atelier mécanique -Rapport d'accident</a></h6>
              </div>
        </div>
        <hr>
        <div href="#" class="nav-link ">
        <i class="fa-solid fa-file-lines orange"></i>
            <a class="orange titreNav" href=""><span class="mx-2">Documents:</span></a>
            <div class="mt-3 mx-3">
                <h6><a class="liens" href="">Procédures de travail</a></h6>
            </div>
        </div>
        <hr> 
        
        <div class="mx-3">
          <button class="btnD disconnect">Fermer la session</button>
        </div>

        <span href="#" class="nav-link2 h4 w-100 mb-5 padNav3 mt-3">
        <a class="v3r" href="https://www.v3r.net/"><i class= "white bx bx-link"></i>v3r.net</a>
        <a class="phone" href="https://www.v3r.net/services-a-la-population/ligne-d-information-municipale-311"><i class= "white bx bx-phone"></i>311</a>
        </span>

</div>


</div>
    <!--End Top Nav -->


  @yield('contenuDuMilieu')




<script src="{{ asset('js/admin.js') }}"></script>

<script src="{{ asset('js/sidebar.js') }}"></script>

</body>
</html>
