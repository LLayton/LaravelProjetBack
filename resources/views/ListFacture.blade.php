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
        <a class="navbar-brand" href="{{route('home')}}">Projet laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Gestion des Factures</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gestion
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{route('PageMission')}}">Gestion des missions</a>
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
            <th scope="col">Référence</th>
            <th scope="col">Titre</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Accompte</th>
            <th scope="col">Organisation</th>
          </tr>
        </thead>
        <tbody>         
                @foreach ($Missions as $Mission)
                <tr>
                  <td>{{$Mission->id}}</td>
                  <td>{{$Mission->reference}}</td>
                  <td>{{$Mission->title}}</td>
                  <td>{{$Mission->comment}}</td>
                  <td>{{$Mission->deposit}}</td>
                  <td>
                    @foreach ($Organisations as $organisation)
                        @if ($Mission->organisation_id===$organisation->id)
                            {{$organisation->name}}
                        @endif
                    @endforeach
                  </td>
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