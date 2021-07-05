<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Accueil</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Projet laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Gestion des organisations</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ajout
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Gestion des organisations</a>
                <a>
                  <hr class="dropdown-divider"></a>
                <a class="dropdown-item" href="#">Créer une facture</a>
                <a>
                  <hr class="dropdown-divider"></a>
                <a class="dropdown-item" href="#">Gestion Mission</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Slug</th>
            <th scope="col">Nom</th>
            <th scope="col">Mail</th>
            <th scope="col">Adresse</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody>
          @foreach($organisations as $organisation)            
              <tr>
                <th scope="row">{{$organisation->id}}</th>
                <td>{{$organisation->slug}}</td>
                <td>{{$organisation->name}}</td>
                <td>{{$organisation->email}}</td>
                <td>{{$organisation->tel}}</td>
                <td>{{$organisation->adress}}</td>
                @if ($organisation->type==="organisation")
                <td>Entreprise</td>                             
                @elseif ($organisation->type==="school")
                <td>École</td>                
                @elseif ($organisation->type==="government")
                <td>Gouvernement</td>
                @endif   
              </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
    <footer>
      <nav class="navbar navbar-expand-lg bg-dg fixed-bottom">
        <div class="container justify-content-center">
          <div class="row">
            <div class="col">
              <p>Lyes souifi</p>
            </div>
          </div>
        </div>
      </nav>
    </footer>
</body>