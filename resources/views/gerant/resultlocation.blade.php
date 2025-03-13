<x-navbar1>
    
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
    
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="fs-5" id="exampleModalLabel">Nouvelle location</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{route('Location.store')}}" enctype="multipart/form-data">
                @csrf
                <div id="divc" class="form-group">
                    <label for="exampleFormControlInput1">Titre de livre</label>
                    <select  name="idlivre">
                        @foreach($livres as $Livree)
                        <option value="{{$Livree->id}}">{{$Livree->id}}  {{$Livree->Titre}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="divc" class="form-group">
                    <label for="exampleFormControlInput1">Nom d'Adherant</label>
                    <select  name="user_id">
                        @foreach($useers as $use)
                        
                        <option value="{{$use->id}}">{{$use->name}}</option>
                        
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </div>
             
            </form>
          </div>
         
        </div>
      </div>
    </div>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4"><h2>Liste des <b>Locations</b></h2></div>
                        <div class="col-sm-4 " >
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter un location</button>
                        </div>
                        <div class="col-sm-4"> 
                            
                                <form id="form-recherche" action="{{route('Location.create')}}" method="get">
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
                            <th>Titre de livre </th>
                            <th>Nom d'adherant</th>
                            <th>debut location </th>
                            <th>fin location</th>
                            <th>statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($locations as $location )
                          
                       <tr>
                            <td>{{$location->id}}</td>
                            <td>{{$location->livre->Titre}}</td>
                            <td>{{$location->user->name}}</td>
                            <td>{{$location->created_at}}</td>
                            <td>{{$location->date_fin}}</td>
                           
                            <td>{{$location->status}}</td>
                            <td>
                                @if($location->status != 'retourne')    
                                <form method="POST" action="{{route('Location.update',$location)}}" >
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">mettre retourne</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach  
                       
                    </tbody>
                </table>
               
            </div>
        </div>  
    </div> 
    <script>
        const exampleModal = document.getElementById('exampleModal')
        if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an Ajax request here
            // and then do the updating in a callback.
    
            // Update the modal's content.
            const modalTitle = exampleModal.querySelector('.modal-title')
            const modalBodyInput = exampleModal.querySelector('.modal-body input')
    
            modalTitle.textContent = `New message to ${recipient}`
            modalBodyInput.value = recipient
        })
        }
    </script>
    </x-navbar1>