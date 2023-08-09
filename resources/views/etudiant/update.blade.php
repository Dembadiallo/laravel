<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD EN lARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
             <h1>Modifier un Etudiant</h1>
             <hr> 
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            
            <ul>
                @foreach ($errors->all() as $error)
                <li class="alert alert-danger"> {{ $error }}</li>
            @endforeach
            </ul>

             <form action="/update/traitement" method="POST" class="form-group">
                @csrf

                <input type="text" name="id" style="display: none;" value="{{ $etudiants->id }}">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiants->nom }}">
  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $etudiants->prenom }}">
  </div>
  <div class="form-group">
    <label for="classe">Classe</label>
    <input type="text" class="form-control" id="classe" name="classe" value="{{ $etudiants->classe }}">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Modifier un Etudiant</button>
  <br> </br>

  <a href="/etudiant" class="btn btn-danger">Retour </a>
</form>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>