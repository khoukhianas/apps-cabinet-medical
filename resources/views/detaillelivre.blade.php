<x-navbar>
    <style>
        .titre{
            width: 80%;
            margin:50% auto ;
            vertical-align: middle;
            text-align: center;
        }
       @media screen and (max-width: 1050px) {
        .titre{
            margin: 50px auto;
        }
       }
    </style>
    <input type="hidden"  name="livre_id" placeholder="{{$livre->id}}" value="{{$livre->id}}" readonly>
    <div class="container-fluid" >
       
            <div class="row">
                <div class="col-lg-4" style="background-color: rgb(240, 232, 232);">
                    <div class="titre" style="">
                        <h3>{{$livre->Titre}}</h3>
                        <h5>{{$livre->Auteur}} </h5>
                    </div>
                </div>
                <div class="col-lg-4" style="background-color: rgb(235, 235, 235);">
                    <img src="{{ asset('image/' . $livre->Image) }}" alt="imageggii" style="width: 100%; max-width: 100%;">
                </div>
                <div class="col-lg-4" style="background-color: rgb(229, 227, 236);">
                    <div style="width: 80%;margin:50px auto ;vertical-align: middle;text-align: center;">
                        <h5 style="font-size: 0.9rem;">Description</h5>
                        <p style="text-align: justify;">{{$livre->Description}}</p>
                    </div>
                </div>
            </div>
    </div>
</x-navbar>