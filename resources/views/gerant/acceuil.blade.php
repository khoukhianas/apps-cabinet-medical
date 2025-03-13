<x-navbar1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="container-grid">
    <div class="row">
        <div class="col-lg-3 " style="text-align: center;padding: 40px;">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <image href="{{asset('image/library.png')}}" width="100%" height="100%"></image>
              </svg>
              
          <h4 class="fw-normal"><strong>Gestion des livres</strong></h4>
          <h6>Ajouter un livre</h6>
          <h6>Modifier un livre</h6>
          <h6>Supprimer un livre</h6>
          <p><a class="btn btn-success mt-3" href="{{route('gestion_livre.index')}}">Voir plus »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" style="text-align: center ;padding: 40px;">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <image href="{{asset('image/research.png')}}" width="100%" height="100%"></image>
              </svg>
          <h4 class="fw-normal"><strong>Gestion des locations</strong></h4>
          <h6>Accorder une location</h6>
          <h6>Statut des locations</h6>
          
          <p><a class="btn btn-success mt-5" href="{{route('Location.index')}}">Voir plus »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" style="text-align: center ;padding: 40px;">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
              <image style="background-color: white" href="{{asset('image/team-leader.png')}}" width="100%" height="100%"></image>
            </svg>
        <h4 class="fw-normal"><strong>Gestion des adherants</strong></h4>
        <h6>Listes des adherant</h6>
        <h6>classement des adherant</h6>
        
        <p><a class="btn btn-success mt-5" href="{{route('gestion_adherant.index')}}">Voir plus »</a></p>
      </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" style="text-align: center ;padding: 40px; background-color: white;">
            <svg class="bd-placeholder-img rounded-circle"  width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <image href="{{asset('image/statistics.png')}}" width="100%"  height="100%"></image>
              </svg>
          <h4 class="fw-normal"><strong>Statistiques</strong></h4>
          <h6>livre loués par semaine </h6>
          <h6>livre loués par mois</h6>
          <h6></h6>
          <p><a class="btn btn-success mt-5" href="{{route('statistique')}}">Voir plus »</a></p>
        </div><!-- /.col-lg-4 -->
      </div>
    </div>
</x-navbar1>