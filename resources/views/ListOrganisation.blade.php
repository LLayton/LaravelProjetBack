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
              <a class="nav-link active" aria-current="page" href="#">Gestion des organisations</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gestion
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                <hr class="dropdown-divider"></a>
                <a class="dropdown-item" href="#">Gestion des factures</a>
                  <hr class="dropdown-divider"></a>
                <a class="dropdown-item" href="#">Gestion des missions</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddUser">
        Ajouter une organisation
      </button>
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
<div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="AddUser" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form method="post"  action="{{route('PageEntreprise')}}">
            @csrf
            <div class="form-group">
              <input name='name' type="text" class="form-control" placeholder="Entrez le noms de l'entreprise" required>
            </div>
            <div class="form-group">
              <label>Adresse mail</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1"  placeholder="Entrez votre mail" required>
              <small  class="form-text text-muted">Nous ne partagerons jamais votre adresse mail à personne</small>
            </div>
            <div class="form-group">
              <label>Adresse </label>
              <input name="address"type="text" class="form-control" id="exampleInputEmail1"  placeholder="Entrez votre Adresse" required>
              <small  class="form-text text-muted">Nous ne partagerons jamais votre adresse à personne</small>
            </div>            
            <div class="form-group">
              <label>Numéro de téléphone </label>
              <input name="tel"type="text" class="form-control" id="exampleInputEmail1"  placeholder="Entrez votre Numéro de téléphone" required>
              <small  class="form-text text-muted">Nous ne partagerons jamais votre adresse à personne</small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Type d'organisation</label>
              <select  name="type"class="form-control" id="exampleFormControlSelect1" required>
                <option>school</option>
                <option>organisation</option>
                <option>government</option>
              </select>
            <button type="submit" class="btn btn-success">Ajouter</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
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

</html>

  