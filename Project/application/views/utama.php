<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/icon.png">
    <title>ADNARE</title>
  </head>

  <!-- Awal Style -->
  <style>
    /* Teks */
    #about img{
        height: 400px;
    }
    @media (min-width: 576px) { 
        #about{
          margin-top: 50px;
      }
        #about img{
        padding-top: 30px;
    }
    }


    /* Place */
    .card{
        box-shadow: 5px 5px 10px #3498DB;
        height: 400px;
    }
    @media (min-width: 576px) { 
        .card{
            margin-top: 30px;
        }
    }
    @media (max-width: 767px) { 
        .card{
            height: 500px;
        }
    }

    /* Youtube */
    #yt iframe{
        height: 300px;
        width: 500px;
    }
    @media (min-width: 992px) { 
        #yt iframe{
            min-height: 430px;
            min-width: 800px;
        }
    }
    

    /* Footer */
    #footer{
        max-width: 100%;
        background-color: #3498DB;
    }
    .sosmed{
        list-style: none;
    }
    .sosmed li{
        margin: 0 10px;
    }
    .sosmed a{
        color: white;
    }
    .sosmed a:hover i{
        color: #6610f2;
    }
  </style>
  <!-- Akhir Style -->

  <body>
 <!-- Awal Navbar -->
    <!-- ##################### Bagian Navbar #################### -->
        <header class="header" id="header">
            <nav class="nav container">
                <a class="navbar-brand fs-3 nav_logo" href="#"> <img src="img/icon.png" alt="" width="30" height="24">Adnare </a>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav_item">
                            <a href="#home" class="nav_link active-link" style="text-decoration: none; font-size:20px;">Home</a>
                        </li>
                        <li class="nav_item">
                            <a href="#about" class="nav_link" style="text-decoration: none; font-size:20px;">About</a>
                        </li>
                        <li class="nav_item">
                            <a href="#place" class="nav_link" style="text-decoration: none; font-size:20px;">Blog</a>
                        </li>
                        <li class="nav_item">
                            <a href="#yt" class="nav_link" style="text-decoration: none; font-size:20px;">Video</a>
                        </li>
                    </ul>

                    <i class="ri-close-line nav_close" id="nav-close"></i>
                </div>

                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </nav>
        </header>
    <!-- Akir Navbar -->

        <main class="main">
            <!-- ################### Bagian Awal/Home ################# -->
            <section class="home" id="home">
                <img src="img/b.jpg" alt="" class="home_img">

                <div class="home_container container grid">
                    <div class="home_data">
                        <h1 class="home_data-title">Explore The <br> Best <b>Beautiful <br> Places</b></h1>
                        <a href="#about" class="btn text-uppercase text-light rounded" style="background-color: #3498DB; width: 120px;">Explore</a>

                    </div>

                    <div class="home_info" style="background-color: #3498DB;">
                        <div>
                            <span class="home_info-title" style="text-decoration: none;">5 best places to visit</span>
                            <a href="#discover" class="button button--flex button--link home_info-button" style="text-decoration: none;">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home_info-overlay">
                            <img src="img/bg.jpeg" alt="" class="home_info-img">
                        </div>
                    </div>
                </div>
            </section>
        </main>

    <!-- Awal Teks -->
    <section id="about" class="main d-flex align-items-center ms-5 pt-0 pb-0 pe-2 ps-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="main-text">
              <h2 class="text-uppercase fs-3 fw-bold">This's an Awesome Nature</h2>
              <p class="fs-5 mt-3 mb-4 me-5">The word nature may refer generally to various types of living plants and animals, and in some cases to processes related to inanimate matter - regarding the existence of certain types of objects and how they change accordingly, such as the weather <br>and geology on Earth, and matter.</p>
            </div>
          </div>
          <div class="col-lg-5">
            <img src="img/nt.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Teks -->

    <!-- ################### Bagian Parallax ################### -->
        <section id="parallex" class="parallax section" style="background: url(img/l.jpeg) center center;  height: 100%; padding: 10px 0; position: relative; background-size: cover; background-attachment: fixed; ">
            <div class="parallax_container container grid">
                <div class="about_data" style="margin-top: 100px;">
                    <h2 class="section_title parallax_title fs-1">Labuan Bajo</h2>
                    <div class="item-content-description fs-5">
                    Labuan Bajo is a city located in the Komodo sub-district, West Manggarai Regency, East Nusa Tenggara province, Indonesia. Labuan Bajo City is also the capital of the sub-district of Komodo and the capital of West Manggarai Regency. The development of Labuan Bajo City is being discussed.
                    </div>
                    <div class="more-info fs-5" style="margin-top: 30px;">
                        <p><span>Province: </span>East Nusa Tenggara</p>
                        <p><span>District: </span>West Manggarai</p>
                        <p><span>Country: </span>Indonesia</p>
                    </div>
                </div>

                <div class="parallax_img">
                    <div class="parallax_img-overlay" id='mapid'>
                        
                    </div>
                </div>
            </div>
        </section>

    <!-- Awal Card -->
    <section  id="place">
      <div class="container my-3 py-5 text-center">
        <div class="row">
          <div class="col">
            <h1 class="text-uppercase fs-3 fw-bold mt-4"> Top 4 The Natural Wonders of the World</h1>
            <p class="mt-3 fs-5 mb-3">This is our version of the natural wonders of the world which we think represent the best of what nature has to offer.</p>
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="card">
                  <img src="img/c-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fs-4 fw-bold" style="color: #3498DB;">Sahara</h5>
                    <p class="card-text">The Sahara is the world’s largest hot desert covering most of Northern Africa, making it almost as large as the United States. </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="card">
                  <img src="img/c-2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fs-4 fw-bold" style="color: #3498DB;">Antarctica
                    </h5>
                    <p class="card-text">Antarctica, on average, is the coldest, driest, and windiest continent on the planet, and has the highest average elevation of all the continents.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="card">
                  <img src="img/c-3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fs-4 fw-bold" style="color: #3498DB;">Grand Canyon</h5>
                    <p class="card-text">The Grand Canyon is located in northern Arizona and offers visitor spectacular vistas that are unmatched throughout in the world.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="card">
                  <img src="img/bg-3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fs-4 fw-bold" style="color: #3498DB;">Grand Canyon</h5>
                    <p class="card-text">The Grand Canyon is located in northern Arizona and offers visitor spectacular vistas that are unmatched throughout in the world.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Card -->

    <!-- Awal Video -->
    <section  id="yt">
      <div class="container my-3 py-5 text-center">
        <div class="row">
          <div class="col">
            <h1 class="text-uppercase fs-3 fw-bold mt-4"> The Natural Wonders of the World Video</h1>
            <p class="mt-3 fs-5 mb-3">This is a wonderful world for those who have eyes to see the beauty and its great variety. </p>
            <iframe src="https://www.youtube.com/embed/BHACKCNDMW8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Video -->

    <!-- Awal Footer -->
    <footer class="text-light pt-2" id="footer">
      <div class="footer-content d-flex text-center align-items-center flex-column">
        <h1 class="fs-3 fw-bold">Adventure Nature</h1>
        <p class="fs-6 lh-lg mt-1 mb-2 w-50">Traveling with Adventure by Nature is not just about the activity, it's about experiencing amazing activities, in stunning natural environments.</p>
        <ul class="sosmed d-flex mb-6 fs-4">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <div class="footer-bottom text-center">
        <p class="pb-2 pt-2 mb-0 fs-6">copyright &copy;2022 <span class="text-uppercase">Adnare</p>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>