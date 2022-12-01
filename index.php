<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipal Health Office</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////
                             STARTING THE NAVBAR SECTION.
    ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow pt-1 pb-1">
      <div class="container-xxl">
          <a class="navbar-brand logo" href="#">
              <img src="images/logo1.png" height="75" width="75" alt="logo image ">
          </a>
          <span class="name pull-left text-white fw-bold">Municipal Health Office
              <hr class="Heading-line pt-0 pb-0" style="margin-top:0.30rem; margin-bottom:0.20rem;">
           Lian Batangas
          </span>
        
        <!-- toggle button for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-end fw-bold " id="main-nav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Program & Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
          <form action="login.php" method="post">
          <button type="submit" class="rounded-pill btn-rounded-login ">Login 
              <span>
                  <i class="fas fa-user"></i>
              </span>
          </button>
          </form>
        </div>
      </div>
    </nav>
  
    <!--////////////////////////////////////////////////STARTING INTRO SECTION///////////////////////////////////////-->
      
          <section id="intro mt-5">
          <div class="container w-50">
              <div class="row align-items-center mt-5">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active"  data-bs-interval="10000">
                      <img src="images/intro/Intro_1.jpg" class="d-block w-100" alt="intro_image">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/intro/Intro_2.jpg" class="d-block w-100" alt="intro_image">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/intro/Intro_3.jpg" class="d-block w-100" alt="intro_image">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div> 
          </div>
          </section>
  
           <!--//////////////////////////////////STARTING NEWS AND UPDATE////////////////////////////////////////-->
  
          <section id="News" class="News-Update">
              <div class="container mt-5">
                  <div class="row text-center">
                      <h4 class="fw-bold text-capitalize text-info">NEWS AND UPDATES</h4>
                      <hr>
                      <p class="lh-lg">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptates similique voluptatem.
                      </p>
                  </div>
                  <div class="container-lg">
                      <div class="row">
                          <div class="col-sm-4">
                            <div class="card">
                              <img src="images/News/pic1.jpg" height="250" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Vaccination Bus</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <img src="images/News/pic2.jpg" height="250" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Vaccination Bus</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="card">
                                  <img src="images/News/pic3.jpg" height="250" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Pre-marriage counseling & orientation</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                              </div>
                            </div>
                        </div> 
                  </div>
              </div>
      
  
               <!--///////////////////////////STARTING NEWS AND UPDATE/////////////////////////////-->
              <div class="container-xxl">
                  <div class="row mt-3">
                  <div class="row text-center">
                      <h4 class="fw-bold text-capitalize text-info">ANNOUNCEMENTS</h4>
                      <hr>
                      <p class="lh-lg">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptates similique voluptatem.
                      </p>
                  </div>
                  
                  <div class="col-sm-8">
                  <div class="mt-3 mb-3">
                        <div class="card text-dark bg-light mb-3">
                          <div class="card-header">PAALALA ‼️</div>
                          <div class="card-body">
                            <h5 class="card-title">Hepa B at Measles</h5>
                            <p class="card-text">Ang mga bakuna po ng Lian Health Center tulad ng Hepa B, Measles at iba pa ay naka disenyo lang para iturok sa mga bata.
                               Mahigpit po itong binabantayan upang di magkaroon ng reaksyon ang bakuna sa di angkop na edad. 
                              </p>
                          </div>
                        </div>
  
                        <div class="card text-dark bg-light mb-3">
                          <div class="card-header">BLOOD DONATIONS</div>
                          <div class="card-body">
                            <h5 class="card-title">Blood Letting Activity</h5>
                            <p class="card-text">
                              Sa ating selebrasyon ng World Blood Donation Day, 
                              ang lahat po ay iniimbitahan na makiisa sa paghahandog buhay sa pamamagitan ng paghahandog ng dugo.
                            </p>
                          </div>
                        </div>    
                        <div class="card text-dark bg-light mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
  
                        <div class="card text-dark bg-light mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>   
                  </div>
          </div>
              <div class="col-sm-4">
                  <div class="container">
                      <div class="row text-center">
                          <h4 class="fw-bold text-capitalize text-info">CONTACTS NUMBERS</h4>
                          <hr>
                          <p class="lh-lg">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptates similique voluptatem.
                          </p>
                          
                              <img src="images/hotlines/hotline1.png" style="margin-bottom: 1rem;" width="300" alt="hotlines">
                              <img src="images/hotlines/hotline2.png" width="300" alt="hotlines">
                          
                              
                              
                         
  
                      </div>
                      </div>
                  </div>
              </div>
              </div>
          </section>
      


        <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////
                             STARTING THE SECTION 9 - THE FOOTER
        ////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
        <footer class="footer">
            <div class="container">
              <div class="row">
                <!-- CONTENT FOR THE MOBILE NUMBER  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                  <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                      <path d="M15 7a2 2 0 0 1 2 2" />
                      <path d="M15 3a6 6 0 0 1 6 6" />
                    </svg>
                  </div>
                  <div class="contact-box__info">
                    <a href="#" class="contact-box__info--title">+63 9531392699</a>
                    <p class="contact-box__info--subtitle">  Mon-Fri 8am-5pm</p>
                  </div>
                </div>  
                <!-- CONTENT FOR EMAIL  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                  <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <polyline points="3 9 12 15 21 9 12 3 3 9" />
                      <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                      <line x1="3" y1="19" x2="9" y2="13" />
                      <line x1="15" y1="13" x2="21" y2="19" />
                    </svg>
                  </div>
                  <div class="contact-box__info">
                    <a href="#" class="contact-box__info--title">lianrhu@yahoo.com</a>
                    <p class="contact-box__info--subtitle">Online support</p>
                  </div>
                </div>
                <!-- CONTENT FOR LOCATION  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                  <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <line x1="18" y1="6" x2="18" y2="6.01" />
                      <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                      <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                      <line x1="9" y1="4" x2="9" y2="17" />
                      <line x1="15" y1="15" x2="15" y2="20" />
                    </svg>
                  </div>
                  <div class="contact-box__info">
                    <a href="#" class="contact-box__info--title">Lian, Batangas</a>
                    <p class="contact-box__info--subtitle">4216, Philippines</p>
                  </div>
                </div>
              </div>
            </div>

            <!--START THE SOCIAL MEDIA CONTENT-->
            <div class="footer-sm" style="background-color: #212121;">
                <div class="container">
                    <div class="row py-4 text-center text-white">
                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            connect with us on social media
                        </div>
                            <div class="col-lg-7 col-md-6">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                    </div>
                </div>
            </div>

            <!--START THE CONTENT FOR THE CAMPANY INFO-->
            <div class="container mt-5">
                <div class="row text-white justify-content-center mt-3 pb-3">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <h5 class="text-capitalize fw-bold">Campany name</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <p class="lh-lg">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio obcaecati enim recusandae maiores, sit earum numquam tempore!
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                        <h5 class="text-capitalize fw-bold">Products</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <ul class="list-inline campany-list">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                        <h5 class="text-capitalize fw-bold">Useful links</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <ul class="list-inline campany-list">
                            <li><a href="#">Your Account</a></li>
                            <li><a href="#">Become an Affiliate</a></li>
                            <li><a href="#">create account</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                        <h5 class="text-capitalize fw-bold">contact</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <ul class="list-inline campany-list">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                </div>
            </div>

          <!--START THE COPYRIGHT INFO-->  
          <div class="footer-bottom pt-5 pb-5">
            <div class="container">
                <div class="row text-center text-white">
                    <div class="col-12">
                        <div class="footer-bottom__copyright">
                            &COPY; Copyright 2021 <a href="#">Multi-purpose Campany</a> | Created by <a href="#">Muriungi</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </footer>

        <!-- BACK TO TOP BUTTON  -->
       <a href="#" class="shadow btn-primary rounded-circle back-to-top">
          <i class="fas fa-chevron-up"></i>
       </a>

 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  
</body>
</html>