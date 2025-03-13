<x-navbar>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <div class="content">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img class="images" src="{{asset('image/2.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                     <span>B</span> ienvenue sur notre plateforme de livres ! 
                     
                  </h5>
                    <p>Découvrez notre collection de livres passionnants,qui comporte plusieur categories </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="images" src="{{asset('image/1.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                     <span>I</span>nscrivez-vous 
                    </h5>
                    <p>dès maintenant pour accéder à notre bibliothèque  et commencer votre voyage littéraire passionnant !</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="images" src="{{asset('image/4.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>
                     <span>O</span>uvrez un livre, ouvrez votre esprit</h5>
                    <p>Entrez dans notre bibliothèque et découvrez un monde de savoir, de culture et d'émerveillement.</p>
                </div>
 
            </div>
            
        </div>
 
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
 
        <div class="overlay-detail text-center" style="">
         <a href="#about"><i class="fa fa-angle-double-down"></i></a>
       </div>
    </div>
 
    <section id="service" class="section-padding">
     <div class="container">
       <div class="row">
         <div class="col-md-4 col-sm-4">
           <h2 class="ser-title"> services</h2>
           <hr class="botm-line">
           <p class="servicepara">Prêt de livres :</p>  Nous offrons un vaste choix de livres dans différents genres,
            allant des romans aux ouvrages de référence. 
            Vous pouvez emprunter ces livres pour une durée déterminée et les ramener
             à la bibliothèque une fois que vous les avez lus.
             <p class="servicepara">Service de recherche et de référence :</p>  Notre équipe de bibliothécaires est là pour vous aider dans vos recherches.
              Que vous ayez besoin d'aide pour trouver des informations spécifiques,
               de recommandations de lecture ou de soutien pour vos projets de recherche, 
               n'hésitez pas à faire appel à nos experts.
               <p class="servicepara">Espaces d'étude et de travail :</p>  Nous offrons des espaces tranquilles et confortables pour étudier,
                travailler ou lire. Que vous ayez besoin d'un endroit calme pour vous concentrer ou d'une salle
                 de réunion pour des travaux de groupe, nos installations sont adaptées à vos besoins.  
           
         </div>
       </div>
       <div class="imgbiblio">
       <img src="{{asset('image/t-2.jpg')}}" alt="" style="height:400px;width:auto;">
       </div>
     </div>
   </section>
   <!--/ service-->
   
   <!--cta-->
   <section id="about" class="section-padding">
     <div class="container">
       <div class="col-md-4 col-sm-4">
         <h2 class="ser-title">A propos</h2>
         <hr class="botm-line">
         <p class="servicepara">Notre bibliothèque  </p> un espace dédié à la lecture, à l'apprentissage et à la découverte. Nous nous engageons à fournir un accès facile à une vaste gamme de ressources et de services pour enrichir la vie de notre communauté. Voici ce que vous pouvez attendre de notre bibliothèque :
 
         <p class="servicepara">Notre mission : </p> mission est de promouvoir la lecture, l'éducation et la culture en offrant un environnement accueillant et en mettant à disposition des ressources variées. Nous cherchons à stimuler la curiosité intellectuelle, à encourager l'apprentissage tout au long de la vie et à favoriser le partage des connaissances.
 
         <p class="servicepara">Notre collection : </p> bibliothèque abrite une collection diversifiée de livres, de magazines, de médias numériques et d'autres supports de lecture. Nous nous efforçons de répondre aux intérêts et aux besoins de notre communauté en mettant à jour régulièrement notre collection et en offrant des ressources pour tous les âges, des tout-petits aux adultes.
 
         <p class="servicepara">Notre équipe : </p> sommes fiers de notre équipe de bibliothécaires dévoués et passionnés. Ils sont là pour vous aider à trouver les livres dont vous avez besoin, à répondre à vos questions de recherche et à vous guider dans l'utilisation des services de la bibliothèque. N'hésitez pas à leur demander de l'aide ou des recommandations de lecture.
       </div>
     </div>
         <div class="imgbiblio2">
         <img src="{{asset('image/livres.png')}}" alt="" style="height:460px;width:auto;bakground-color:transoarent;" >
         </div>
       
   </section>
   
   <!--footer-->
   <footer id="footer">
     <div class="top-footer">
       <div class="container">
         <div class="row">
                
         </div>
       </div>
     </div>
   </footer>
    
 </div>
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
 </x-navbar>
 <style>
  
  .images {
        height: 400px; /* Change this value as per your requirement */
        width: 800px; /* Change this value as per your requirement */
        display: flex;
    }
    
    /* img {
        display: flex;
        justify-content: left;
        align-items: center;
    } */
    span{
     font-size: 3rem;
    }
    .content{
 
    }
    .mag{
       width:30%;
       height: 40px;
       margin-left: 10px;
    }
    .description{
          width: 30%;
          height: 100%;
          background-color: rebeccapurple;
    }
    /* .content{
       display: flex;
       align-items:center; 
    } */
    #carouselExampleIndicators{
       width: 60%;
       height: 20%;
       background-color:#f0f8ff ;
       align-items: center;
       justify-content: center;
       margin:  0 auto ;
       border: 6px solid#f0f8ff;
       /* border-radius: 10px; */
       margin-top: 4px;
    }
    body{
       background-color:aliceblue;
    }
    h4{
       text-align: justify;
       font-size:1.3rem;
       margin: 20px auto;
       font: bold 25px 'Lucida Calligraphy', cursive;
       color: rgba(12, 12, 12;0.75);
    }
    .carousel-item .images{
     width:100%;
     height:40%;
    }
 </style>