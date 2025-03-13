<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellpath</title>
	
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "{{asset('css/normalize.css')}}">
    <!-- custom css -->
    <link rel = "stylesheet" href = "{{asset('css/new.css')}}">
</head>

<body>
    

    <!-- header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class = "container flex">
                <a href = "#" class = "navbar-brand">
				
                    <img src = "image/logo.png" alt = "site logo">
                </a>
                <button type = "button" class = "navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "image/close-icon.png">
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "#" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#about" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#service" class = "nav-link">Service</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "{{route('help')}}" class = "nav-link">More</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#contact" class = "nav-link">Contact</a>
                        </li>
                        <li class = "nav-item">
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>&nbsp;&nbsp;
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        </li>
                        
                        
                    </ul>
                    <div class = "search-bar">
                        <form>
                            <div class = "search-bar-box flex">
                                <span class = "search-icon flex">
                                    <img src = "image/search-icon-dark.png">
                                </span>
                                <input type = "search" class = "search-control" placeholder="Search here">
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </nav>
<br>
        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1>your most trusted<br> <span>health partner</span></h1>
                    <p class = "lead">the best match services for you</p>
                    <p class = "text text-md">Ready to schedule an appointment</p>
                    <div class = "btn-group">
                       
                        <a href = "{{route('rendez-vous')}}" class = "btn btn-light-blue">Take Appointement</a>
                    </div>
                </div>

                <div class = "header-inner-right">
                    <img src = "image/header.png">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->
        <main>
        <!-- about section -->
         <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "section-head" id="about">
                            <h2>About Us</h2>
                            <div class = "border-line"></div>
                        </div>
                        <p class = "text text-lg">Wellpath is a private medical practice dedicated to providing exceptional care to each and every patient. Led by Oussama, a board-certified physician with 20 years of experience, our team of skilled healthcare professionals is committed to prioritizing communication, collaboration, and compassion. With a holistic, patient-centered approach, we work closely with each patient to develop individualized treatment plans that address their unique needs and help them achieve their health goals. Thank you for considering [Practice Name] as your partner in health. We look forward to meeting you and providing you with outstanding care.</p>
                        <a href = "{{route('help')}}" class = "btn btn-white">Learn More</a>
                    </div>
                    {{-- <div class = "about-right flex">
                        <div class = "img">
                            <img src = "image/about-img.png">
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- banner one -->
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "fas fa-quote-left"></i> When you are young and healthy, it never occurs to you that in a single second your whole life could change. <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm">- Anonim Nano</small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- services section -->
        <section id = "services" class = "services py">
            <div class = "container" id="service">
                <div class = "section-head text-center">
                    <h2 class = "lead">The Best Doctor gives the least medicines</h2>
                    <p class = "text text-lg">A perfect way to show your hospital services</p>
                    <div class = "line-art flex">
                        <div></div>
                        <img src = "image/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "image/service-icon-1.png">
                        </div>
                        <h3>Cardio Monitoring</h3>
                        <p class = "text text-sm">At Wellpath, we believe in the importance of cardiovascular health. Our advanced Cardio Monitoring services use cutting-edge technology to track key heart health indicators and help our patients detect and manage heart health issues early. Contact us today to schedule an appointment and take the first step towards optimal heart health.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "image/service-icon-2.png">
                        </div>
                        <h3>Medical Treatment</h3>
                        <p class = "text text-sm">At Wellpath, we provide personalized medical treatments tailored to each patient's individual health needs and goals. Our evidence-based practices ensure the most effective treatment for acute and chronic health issues. Contact us today to schedule an appointment and let us help you achieve your best possible health outcomes.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "image/service-icon-3.png">
                        </div>
                        <h3>Emergency Help</h3>
                        <p class = "text text-sm">At Wellpath, we're here for you in times of medical emergencies. Our experienced medical team provides 24/7 emergency help to ensure prompt and compassionate care when you need it most. Contact us immediately if you're experiencing a medical emergency.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "image/service-icon-4.png">
                        </div>
                        <h3>First Aid</h3>
                        <p class = "text text-sm">At Wellpath, our experienced medical team provides prompt and comprehensive First Aid services to help manage a range of injuries and illnesses. Our state-of-the-art facilities and advanced technology ensure that we're equipped to handle any First Aid situation. Contact us today to receive the care you need to feel better as quickly as possible.</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- banner two section -->
        <section id = "banner-two" class = "banner-two text-center">
            <div class = "container grid">
                <div class = "banner-two-left">
                    {{-- <img src = ""> --}}
                </div>
                <div class = "banner-two-right">
                    <p class = "lead text-white">When you are young and healthy, it never occurs to you that in a single second your whole life could change.</p>
                    <div class = "btn-group">
                      
                        <a href = "#contact" class = "btn btn-light-blue">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        

        <!-- package services section -->
        <section id = "package-service" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h2>Package Service</h2>
                    <p class = "text text-lg">Best service package for you</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-phone fa-2x"></i>
                        </div>
                        <h3>Regular Case</h3>
                        <p class = "text text-sm">Stay healthy and active with our personalized Regular Case package, including routine check-ups and basic medical services. Contact us today to learn more.</p>
                        <a href = "#contact" class = "btn btn-blue">Contact Us</a>
                    </div>

                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h3>Serious Case</h3>
                        <p class = "text text-sm">Get comprehensive medical attention and support for complex health issues with our experienced Serious Case package. Contact us today to learn more.</p>
                        <a href = "#contact" class = "btn btn-blue">Contact Us</a>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-comments fa-2x"></i>
                        </div>
                        <h3>Emergency Case</h3>
                        <p class = "text text-sm">24/7 access to our advanced medical facilities and experienced medical team for prompt and effective care in case of emergencies. Contact us immediately for our Emergency Case package services.</p>
                        <a href = "#contact" class = "btn btn-blue">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of package services section -->

       

        <!-- contact section -->
        <section id = "contact" class = "contact py">
            <div class = "container grid">
              
                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head" id="contact">
                        <h3 class = "lead">Contact Us</h3>
                        <p class = "text text-md">help us to know what's needed,We help you with what you need</p>
                    </div>
                    <form method="POST" action="#">
                        <div class = "form-element">
                            <input type = "text" class = "form-control" placeholder="Your name">
                        </div>
                        <div class = "form-element">
                            <input type = "email" class = "form-control" placeholder="Your email">
                        </div>
                        <div class = "form-element">
                            <textarea rows = "5" placeholder="Your Message" class = "form-control"></textarea>
                        </div>
                        <button type = "submit" class = "btn btn-white btn-submit">
                            <i class = "fas fa-arrow-right"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
        </main>
    </div>
    </div>

    <!-- footer  -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = "image/logo.png">
                    </div>
                    <p class = "text text-md">At Wellpath, our mission is to provide high-quality, personalized healthcare services to our patients. Our experienced medical team is dedicated to helping you achieve your health goals and providing compassionate care every step of the way. Contact us today to learn more about our services and how we can support your health and wellbeing.</p>
                   
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>medication</li>
                        
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#" class = "text-white">Our Services</a></li>
                        <li><a href = "#" class = "text-white">Our Plan</a></li>
                        <li><a href = "#" class = "text-white">Privacy Policy</a></li>
                        <li><a href = "#" class = "text-white">Appointment Schedule</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">make an appointment</h3>
                    <p class = "text text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, omnis.</p>
                    <ul class = "appointment-info">
                        <li>lundi jusqu'a vendredi</li>
                        <li> 9:00 AM - 12:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>et le samedi</li>
                        <li>  9:00 PM - 12:00 PM</li>
                       
                           
                        
                    </ul>
                </div>
            </div>

           
    </footer>
    <!-- end of footer  -->


    <!-- custom js -->
    <script src = "js/script.js"></script>
   <script>


    </script> 
      
</body>