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
              <a class="nav-link active" aria-current="page" href="#">Gestion des Mission</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gestion
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{route('PageEntreprise')}}">Gestion des organisations</a>
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
            <th scope="col">R??f??rence</th>
            <th scope="col">Titre</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Accompte</th>
            <th scope="col">Organisation</th>
          </tr>
        </thead>
        <tbody>         
                @foreach ($Missions as $Mission)
                @if ($user->id==$Mission->user_id)
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
                  <td><button class="btn btn-success" onclick="passaParam({{$Mission->id}})" data-toggle="modal" data-target="#AjoutLigne">Ajouter une Ligne</button></td>
                  <td><button class="btn btn-warning" onclick="window.location.href='{{route('InsertionLigne',['id_Mission'=>$Mission->id])}}'" >Voir le d??tails</button></td>
                  <td><form method="POST" action="{{route('PageMission')}}"> @csrf  {{ method_field('DELETE') }}<div class="form-group"><input type="hidden" value="{{$Mission->id}}" name="id_mission" /><input  type="submit"class="btn btn-danger"  name="BoutonSupression"value="Supprimer"/></div></form></td>

              </tr>

                @endif
                @endforeach
        </tbody>
      </table>
    <script>
            function passaParam(id){
                    document.getElementById('mission_id').value=id;
                }
    </script>
    </div>
    <footer>
      <nav class="navbar navbar-expand-lg bg-dg">
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

<div class="modal fade" id="AjoutLigne" tabindex="-1" role="dialog" aria-labelledby="AjoutLigne" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Ajouter une ligne</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"  action="{{route('InsertionLigne')}}">
            @csrf
            <div class="form-group">
              <label>Titre</label>
              <input name='title' type="text" class="form-control" placeholder="Entrez le titre" required>
            </div>
            <div class="form-group">
              <label>Unit??e</label>
              <input name="unity" type="text" class="form-control"  required>
            </div>
            <div class="form-group">
              <label>Quantit??e </label>
              <input name="quantity"type="number" class="form-control" min="1" id="exampleInputEmail1"  required>
            </div>            
            <div class="form-group">
              <label>Prix </label>
              <input name="price"type="number" class="form-control"  min="0"  step="0.01"required>
            </div>
            <input type="hidden" name="mission_id" id="mission_id"/>                
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
</html>
