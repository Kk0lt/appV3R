<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    
    <title>Document</title>
</head>
<body>


  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
        <li class="nav-link2 pad">
            <img id="Logo" class="logoVille img-fluid "src="{{ asset('img/LogoVille.png') }}" alt="">
        </li>
    
        <hr class="hr">

        <li class="nav-link white py-2">
            <img class="img-fluid logoUser" src="{{ asset('img/user.png') }}" alt="">
            <h5 class="pad2">Nom de l'employé</h5>
        </li>

        <hr>

      <li href="#" class="nav-link size">
        <i class="bx bx-spreadsheet"></i>
        <span class="mx-2">Formulaires</span>
      </li>
      <li href="#" class="nav-link size">
        <i class="bx bx-archive"></i>
        <span class="mx-2">Documents</span>
      </li>
    </ul>

    <div class="px-3 pad4">
        <button class="btnD disconnect">Fermer la session</button>
    </div>

    <span href="#" class="nav-link2 h4 w-100 mb-5 pad3">
      <a class="v3r" href=""><i class= "white bx bx-link"></i>v3r.net</a>
      <a class="phone" href=""><i class= "white bx bx-phone"></i>311</a>
    </span>
  </div>

  <!-- Main Wrapper -->
  <div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>


    @yield('contenuDuMilieu')


    <!--End Top Nav -->
  </div>



@yield('contenuDuMilieu')


<script src="{{ asset('js/sidebar.js') }}"></script>

</body>
</html>
