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
    <div class="container">
      <div class="jumbotron"  >
        <a href="{{route('google.redirect')}}"><button class="btn btn-danger">Connexion Google</button>
        </a>    
        <a href="{{route('google.redirect')}}"><button class="btn btn-primary">Connexion Github</button>
        </a>

      </div>

    </div>
  </body>
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
