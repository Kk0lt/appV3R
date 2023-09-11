
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/formConnexion.css') }} ">
    <script src="main.js"></script>

    <!-- NAVBAR -->

<nav class="navbar navbar-custom">
    <div class="">      

      <img src="/img/logoV3R.jpg" alt="Logo Image" class="imgLogoV3R" ></a>
    </div>
    
    <div>
    <nav class="sub-nav">    

    </nav>
  </div>
</nav>     
</head>
<body>
@if($errors->has('email'))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->get('email') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="wrapper">
<!-- MAIN CONTAINER -->
<div class="container  ">
    <div class="row justify-content-center custom-row ">
        <div class="col-md-6 custom-bg ">
            <h2 class="text-center custom-title">CONNEXION</h2>
            <form method="POST" action="" class="p-4 custom-form">
                @csrf
                <div class="form-group">
                    <label for="email" class="custom-text">Courriel :</label>
                    <input type="email" class="form-control" id="email" placeholder="Adresse courriel" name="email">
                </div>
                <div class="form-group">
                    <label for="password" class="custom-text">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
                </div>
 
            </form>
            <div class="text-center mb-4">
            <button type="submit" class="m-2 btn btn-primary ">Connexion</button>
                <a href="#" class="btn btn-dark">Création de compte</a>
            </div>

            
        </div>
    </div>
</div>




</div>
</div>
</div>
</div>


    <!-- FOOTER -->
<footer class="custom-footer text-center">
  <div class="container p-4">
    <div class="row">
      <!-- Grid column for "V3R.NET" -->
      <div class="col-6 mb-4">
        <h5 class="custom-text">V3R.NET</h5>
      </div>
      <!-- Grid column for "311" -->
      <div class="col-6 mb-4">
        <h5 class="custom-text">311</h5>
      </div>
    </div>
  </div>

</footer>

  </div>

<script src="https://kit.fontawesome.com/ce7fbe0b49.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>