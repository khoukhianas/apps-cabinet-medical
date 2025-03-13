<x-navbar1>
    {{-- @if($errors->any())
   <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>

   </div>
   @endif --}}
   <div i class="card">
    <div class="card-header">

        <h3 class="card-title">
                Modifier un Livre 
        </h3>
    </div>


    <form method="POST" action="{{route('Livre.update',$livre)}}" enctype="multipart/form-data">
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
            <input type="file" class="form-control" name="image" value="{{$livre->Image}}" >
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
</x-navbar1>