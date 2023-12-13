@extends('layouts.app')
@section('title', 'documents')
@section('contenuDuMilieu')

<body class="bg">
<div>
    <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
</div>


  <!-- Début card les formulaires -->        
<div class="container">
<h3 class="titreForm mt-5">Liste des documents:</h3>
<div class="mesForms row">

    <div class="col-md-6">
        <a href="" class="card-link">
            <div class="card">
                <i class="fa-solid fa-file-lines black isize2 mb-1 mt-2 "></i>
                <div class="card-body">    
                    <h6 class="card-title">Description...</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-6">
        <a href="" class="card-link">
            <div class="card">
            <i class="fa-solid fa-file-lines black isize2 mb-1 mt-2"></i>
                <div class="card-body">    
                <h6 class="card-title">Description...</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-6">
        <a href="" class="card-link">
            <div class="card">
            <i class="fa-solid fa-file-lines black size2 mb-1 mt-2"></i>
                <div class="card-body">    
                <h6 class="card-title">Description...</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-6">
        <a href="" class="card-link">
            <div class="card">
            <i class="fa-solid fa-file-lines black size2 mb-1 mt-2"></i>
                <div class="card-body">    
                <h6 class="card-title">Description...</h6>
                </div>
            </div>
        </a>
    </div>

    
</div>
</div>
<!-- Fin card les formulaires -->
  

   
<!-- FOOTER -->
<footer class="custom-footer text-center ">
<div class="row">
      <div class="col-xl-3 offset-xl-2 ">
        <h3>Liens:</h3>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://www.v3r.net/" class="nav-link p-0 v3rLink">v3r.net</a></li>
        </ul>
      </div>

      <div class="col-xl-3 offset-xl-1">
          <h3>Besoin d'aide ? </h3>
          <h6>Contactez-nous : 311 <i class="fa-solid fa-phone"></i></h6>
      </div>
    </div>
      <p class="padFoot">© Ville de Trois-Rivières. Tous droits réservés.</p>
</footer>

@endsection





</body>