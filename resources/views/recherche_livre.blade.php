<x-navbar>
  <title>Bootstrap Simple Data Table</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  body {
      color: #566787;
      background: #f5f5f5;
      font-family: 'Roboto', sans-serif;
  }
  .table-responsive {
      margin: 30px 0;
  }
  .table-wrapper {
      min-width: 1000px;
      background: #fff;
      padding: 20px;
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
  }
  .table-title {
      padding-bottom: 10px;
      margin: 0 0 10px;
      min-width: 100%;
  }
  .table-title h2 {
      margin: 8px 0 0;
      font-size: 22px;
  }
  .search-box {
      position: relative;        
      float: right;
  }
  .search-box input {
      height: 34px;
      border-radius: 20px;
      padding-left: 35px;
      border-color: #ddd;
      box-shadow: none;
  }
  .search-box input:focus {
      border-color: #3FBAE4;
  }
  .search-box i {
      color: #a0a5b1;
      position: absolute;
      font-size: 19px;
      top: 8px;
      left: 10px;
  }
  table.table tr th, table.table tr td {
      border-color: #e9e9e9;
  }
  table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
  }
  table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
  }
  table.table td:last-child {
      width: 130px;
  }
  table.table td a {
      color: #a0a5b1;
      display: inline-block;
      margin: 0 5px;
     
  }
  table.table td {
    text-align: center;
  }
  table.table td a.view {
      color: #03A9F4;
      
  }
  table.table td a.edit {
      color: #FFC107;
  }
  table.table td a.delete {
      color: #E34724;
  }
  table.table td i {
      font-size: 19px;
      
  }    
 
  .hint-text {
      float: left;
      margin-top: 6px;
      font-size: 95%;
  }    
  </style>
  
  <div class="container-xl">
      <div class="table-responsive">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-8"><h2>Liste des <b>Livres</b></h2></div>
                      <div class="col-sm-4"> 
                              <form id="form-recherche" action="{{route('create')}}" method="get">
                                @csrf
                                <div class="search-box">
                                    <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" id="input-recherche" placeholder="rechercher&hellip;" name="recherche">
                                <button type="submit" style="display: none;">rechercher</button>
                              </form>
                      </div>
                      </div>
                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Titre </th>
                          <th>Auteur</th>
                          <th>Quantite </th>
                          <th>Categorie</th>
                          <th>statut</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($Livres as $livre )
                        
                     <tr>
                          <td>{{$livre->id}}</td>
                          <td>{{$livre->Titre}}</td>
                          <td>{{$livre->Auteur}}</td>
                          <td>{{$livre->Quantite}}</td>
                          <td>{{$livre->Categorie}}</td>
                          @if ($livre->Quantite == 1 )
                          <td>hors pret</td>
                          @else
                          <td>disponible</td>
                          @endif
                          <td>
                              <a href="{{ route('afficherlivre', ['livre_id' => $livre->id]) }}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                             
                          </td>
                      </tr>
                      @endforeach  
                     
                  </tbody>
              </table>
             
          </div>
      </div>  
  </div>   
  </x-navbar>