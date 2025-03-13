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
        <h1 class="fs-5" id="exampleModalLabel">Nouvel livre</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('Livre.store')}}" enctype="multipart/form-data">
            @csrf
            <div id="divc" class="form-group">
                <label for="exampleFormControlTextarea1">Title</label>
                <input type="text" class="form-control"  name="title" placeholder="title">
            </div>
            <div id="divc" class="form-group">
                <label for="exampleFormControlTextarea1">Auteur</label>
                <input type="text" class="form-control"  name="auteur" placeholder="auteur">
            </div>
            
            
            <div id="divc" class="form-group">
                <label for="exampleFormControlTextarea1">quantite</label>
                <input type="number" class="form-control"  name="Quantite" placeholder="quantite">
            </div>


            <div id="divc" class="form-group">
                <label for="exampleFormControlInput1">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div id="divc" class="form-group">
                <label for="exampleFormControlInput1">Category</label>
                <input type="text" class="form-control"  name="Categorie" placeholder="Categorie">
                    
            </div>


            <div id="divc" class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description"  rows="6"></textarea>
              
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
                    <div class="col-sm-4"><h2>Liste des <b>Livres</b></h2></div>
                    <div class="col-sm-4 " >
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter un livre</button>
                    </div>
                    <div class="col-sm-4"> 
                        
                            <form id="form-recherche" action="{{route('gestion_livre.create')}}" method="get">
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
                      
                        <th>nombre de location </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($Livres as $livre)  
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="fs-5" id="exampleModalLabel">Modifier livre</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
    <form method="POST" action="{{route('Livre.update',$livre->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div id="divc" class="form-group">
            <label for="exampleFormControlTextarea1">Title</label>
            <input type="text" class="form-control"  name="title" value="{{$livre->Titre}}">
        </div>
        <div id="divc" class="form-group">
            <label for="exampleFormControlTextarea1">Auteur</label>
            <input type="text" class="form-control"  name="auteur" value="{{$livre->Auteur}}">
        </div>
        
        
        <div id="divc" class="form-group">
            <label for="exampleFormControlTextarea1">quantite</label>
            <input type="number" class="form-control"  name="Quantite" value="{{$livre->Quantite}}">
        </div>


        <div id="divc" class="form-group">
            <label for="exampleFormControlInput1">Image</label>
            <input type="file" class="form-control" name="image" value="{{$livre->image}}" >
        </div>
        <div id="divc" class="form-group">
            <label for="exampleFormControlInput1">Category</label>
            <input type="text" class="form-control"  name="categorie" value="{{$livre->Categorie}}">
        </div>


        <div id="divc" class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description"  rows="6" >{{$livre->Description}}</textarea>
            <button class="btn btn-outline-success " type="submit">Modifier</button>
        </div>
     
    </form>
                            </div>
                           
                          </div>
                        </div>
                      </div>  
                    <tr>
                         <td>{{$livre->id}}</td>
                         <td>{{$livre->Titre}}</td>
                         <td>{{$livre->Auteur}}</td>
                         <td>{{$livre->Quantite}}</td>
                         <td>{{$livre->Categorie}}</td>                   
                         <td>{{$livre->nombrelouer}}</td>
                        <td>
                            <button  class="edit" data-id="{{ $livre->id }}" title="modifier" data-bs-target="#exampleModal1" data-bs-toggle="modal"  data-toggle="tooltip"><i class="material-icons">&#xE254;</i></button>
                            <form method="POST" action="{{route('Livre.destroy', $livre->id)}}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit"  class="delete-button" data-bs-dismiss="modal" aria-label="Close" style="background-color: red; color: white; border: none; padding: 10px; border-radius: 5px;" title="effacer" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                </form>
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