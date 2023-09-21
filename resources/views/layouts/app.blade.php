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
<div class="side-navbar d-flex justify-content-between flex-wrap flex-column" id="sidebar">

<div class="navbar">
    <a class="menu-btn" id="menu-btn">
    <i class="fa-solid fa-bars" style="color: #000000;"></i>
  </a>
</div>

    <ul class="nav flex-column text-white w-100">
        <li class="nav-link2 pad">
            <img id="Logo" class="logoVille img-fluid "src="{{ asset('img/LogoVille.png') }}" alt="">
        </li>
    
        <hr>

        <li class="nav-link white py-2">
            <img class="img-fluid logoUser" src="{{ asset('img/user.png') }}" alt="">
            <h5 class="pad2">Nom de l'employé</h5>
        </li>

        <hr>

        <div href="#" class="nav-link ">
        <i class="fa-regular fa-rectangle-list orange"></i>
            <a class="orange titre" href=""><span class="mx-2">Formulaires:</span></a>
            <div class="pt-3 px-3">
                <h6><a class="liens" href="">Déclaration d'accident de travail</a></h6>
                <h6><a class="liens" href="">Signalement de situation d'urgence</a></h6>
                <h6><a class="liens" href="">Audit SST</a></h6>
                <h6><a class="liens" href="">Atelier mécanique -Rapport d'accident</a></h6>
            </div>
      </div>
        <hr>
      <div href="#" class="nav-link ">
      <i class="fa-solid fa-file-lines orange"></i>
            <a class="orange titre" href=""><span class="mx-2">Documents:</span></a>
            <div class="pt-3 px-3">
                <h6><a class="liens" href="">Procédures de travail</a></h6>
            </div>
      </div>
      <hr> 
      
      <div class="px-3">
        <button class="btnD disconnect">Fermer la session</button>
      </div>

        <span href="#" class="nav-link2 h4 w-100 mb-5 pad3 pt-3">
        <a class="v3r" href="https://www.v3r.net/"><i class= "white bx bx-link"></i>v3r.net</a>
        <a class="phone" href="https://www.v3r.net/services-a-la-population/ligne-d-information-municipale-311"><i class= "white bx bx-phone"></i>311</a>
        </span>

    </ul>


</div>
    <!--End Top Nav -->


  @yield('contenuDuMilieu')

  <!-- FOOTER -->
  <footer class="custom-footer text-center ">
<div class="row">
      <div class="col-xl-3 offset-xl-2 ">
        <h3>Liens:</h3>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://www.v3r.net/" class="nav-link p-0 v3rLink">v3r.net</a></li>
        </ul>
      </div>

      <div class="col-xl-3 offset-xl-1  aide">
          <h3>Besoin d'aide ? </h3>
          <h6>Contactez-nous : 311 <i class="fa-solid fa-phone"></i></h6>
      </div>
    </div>
      <p class="padFoot">© Ville de Trois-Rivières. Tous droits réservés.</p>
</footer>

  </div>



<script src="{{ asset('js/sidebar.js') }}"></script>

</body>
</html>
