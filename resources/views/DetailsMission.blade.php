<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha484-Gn5484xqQ1aoWXA+058RXPxPg4fy4IWvTNh0E244XmFcJlSAwiGgFAW/dAiS4JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
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
            <a class="dropdown-item" href="{{route('PageEntreprise')}}">Gestion des organisations</a>
             <a class="dropdown-item" href="{{route('PageMission')}}">Gestion des missions</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>

    <div class="container">
        <div class="Jumbotron">
            <div class="row">
                <div class="col-4">
                    <div class="row">
                      <label >ID</label>
                    </div>
                    <div class="row">
                        {{$Mission[0]->id}}
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <Label>R??f??rence</Label>
                    </div>
                    <div class="row">
                    {{$Mission[0]->reference}}
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <Label>Titre</Label>
                    </div>
                    <div class="row">
                        {{$Mission[0]->title}}
                    </div>
                </div>
               <div class="col-4">
                <div class="row">
                    <Label>Commentaire</Label>
                </div>
                <div class="row">
                    {{$Mission[0]->comment}}
                </div>
                </div>
               <div class="col-4">
                <div class="row">
                    <Label>Accompte</Label>
                </div>
                <div class="row">
                    {{$Mission[0]->deposit}}
                </div>
                </div>               
                @foreach ($Organisations as $organisation)
                    @if ( $organisation->id === $Mission[0]->organisation_id)
                    <div class="col-4">
                        <div class="row">
                        <Label>Noms de l'organisation</Label>
                        </div>
                       {{$organisation->name}}
                    </div>
                    @endif
                @endforeach

                

            </div>
        </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Quantit??e</th>
            <th scope="col">Prix</th>
            <th scope="col">Unit??e</th>
          </tr>
        </thead>
        <tbody>         
            @foreach ($MissionsLines as $lines)
            <tr>
                <td>{{$lines->id}}</td>
                <td>{{$lines->title}}</td>
                <td>{{$lines->quantity}}</td>
                <td>{{$lines->price}}</td>
                <td>{{$lines->unity}}</td>
                <td><form method="POST" action="{{route('InsertionLigne')}}"> @csrf  {{ method_field('DELETE') }}<div class="form-group"><input type="hidden" value="{{$lines->id}}" name="id_ligne" /><input  type="submit"class="btn btn-danger"  name="BoutonSupression"value="Supprimer"/></div></form></td>

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
      <div class="modal-footer ">
      </div>
    </div>
  </div>
</div>
</html>
