@extends('layouts.app')
@section('title', 'documents')
@section('contenuDuMilieu')

<body class="bg">
<div>
    <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
</div>

<div class="container">
  <div class="card my-2">
    <div class="row align-items-center">
      <div class="col-2 m-2">
        <i class="fa-solid fa-file-lines black isize"></i>
      </div>
      <div class="col-8 px-2">
        <h2 class="text-xl md:text-3xl font-bold my-4">Document</h2>
        <div class="">
          <h3 class="">Description du document</h3>
        </div>
        <div class="my-4">
          <a class="btn btn-primary" href="">lien</a>
        </div>
      </div>
   
    </div>
  </div>
  

  <div class="card my-2">
  <h2 class="text-xl md:text-3xl font-bold my-4">Document</h2>
    <div class="">
      <h3 class="">Description du document</h3>
    </div>
    <div class="my-4">
      <a class="btn btn-primary" href="">lien</a>
    </div>
  </div>

  <div class="card my-2">
  <h2 class="text-xl md:text-3xl font-bold my-4">Document</h2>
    <div class="">
      <h3 class="">Description du document</h3>
    </div>
    <div class="my-4">
      <a class="btn btn-primary" href="">lien</a>
    </div>
  </div>

  <div class="card my-2">
  <h2 class="text-xl md:text-3xl font-bold my-4">Document</h2>
    <div class="">
      <h3 class="">Description du document</h3>
    </div>
    <div class="my-4">
      <a class="btn btn-primary" href="">lien</a>
    </div>
  </div>

</div>



   
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