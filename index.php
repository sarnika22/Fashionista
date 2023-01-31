<?php

 session_start();
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fashionista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel = "icon" href ="logo.jpeg" type = "image/x-icon">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light container py-3 fixed-top bg">
        <a class="navbar-brand" href="#"><b><i>Fashionista</i></b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars text-light" aria-hidden="true"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto text-right" style="float: right; text-align: right;">
              <li class="nav-item ms-5">
                <a class="nav-link" href="#about">Home</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link" href="#project">Website</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link" href="#team">Our people</a>
              </li>
              
              <li class="nav-item dropdown ms-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login/Sign-up</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="login.php">Sign-up</a></li>
                  </ul>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
      </nav>
</header>

<section id="home">
    <video controls="" autoplay="" muted="" loop="">
        <source src="bg1-index-video.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="row pt-5">
            <div class="home-text col-md-8 col-sm-12 mt-5">
                <h1><b>Choose your own style with FASHIONISTA</b></h1>
                <p><i>A complete Blog for women keen of self pampering "<3" </i></p>
                <u1 class="section-btn">
                  <a href="#">
                    <span data-hover="Explore">Explore</span>
                  </a>
                </u1>
            </div>
        </div>
    </div>

    <div class="overlay"></div>

</section>

<section id="about">
  <div class="container">
    <div class="row py-5">
      <div class="about-text text-center py-5 col-md-10 col-sm-12 mx-auto">
        <h3 class="pb-3">Introducing Fashionista</h3>
        <h1>Fashionista, is a blog turned out as a web application with the updates of self care journals of 3 girls supporting each and every other women out there. This blog contains tips and ideas that was used and benefited now shared to everyone. Come on!! Take a tour over. <br> <i>"Self-care is not self-indulgence, it is self-preservation"</i>
        </h1>
      </div>
    </div>
  </div>
</section>

<section id="project" class="pb-5">
  <div class="container">
    <div class="row">

      <div class="col-md-6 col-sm-6">
        <div class="project-item">
          <a href="skincare.php">
            <img src="skincare.jpg" class="img-fluid">
            <div class="project-overlay">
              <div class="project-info">
                <h1>Skincare</h1>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="project-item">
          <a href="makeup.php">
            <img src="makeup.jpg" class="img-fluid">
            <div class="project-overlay">
              <div class="project-info">
                <h1>Makeup</h1>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 offset-md-3 col-sm-6">
        <div class="project-item">
          <a href="unl.php">
            <img src="trending.jpg" class="img-fluid">
            <div class="project-overlay">
              <div class="project-info">
                <h1>Used & Loved</h1>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="team" class="h-100">
  <div class="container py-5">
    <h1 class="text-center">Our people</h1>

    <div class="swiper mySwiper py-5">
      <div class="swiper-wrapper">

        <div class="swiper-slide col-lg-3 col-md-6 col-12">
          <img src="woman1.png" class="img-fluid">
          <div class="Text pt-2">
            <h3>Naraayani N<br><span>Web developer</span></h3>
          </div>
        </div>

        <div class="swiper-slide col-lg-3 col-md-6 col-12">
          <img src="woman2.png" class="img-fluid">
          <div class="Text pt-2">
            <h3>Sarnika K<br><span>Web developer</span></h3>
          </div>
        </div>

        <div class="swiper-slide col-lg-3 col-md-6 col-12">
          <img src="woman3.png" class="img-fluid">
          <div class="Text pt-2">
            <h3>Sendhu Vardhani P<br><span>Web developer</span></h3>
          </div>
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

  </div>
</section>

<section id="contact" class="h-100 py-5">

  <h1 class="text-center py-5">Contact Us</h1>
  <div class="col-lg-7 col-md-10 col-11 mx-auto pb-5">
    <form id="f1" method="POST" action="process.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="uname" id="uname" class="form-control" placeholder="Name">
        </div>

        <div class="form-group col-md-6">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>
      </div>

      <div class="form-group">
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
      </div>

      <div class="form-group">
        <textarea class="form-control" placeholder="Message" rows="5" name="msg" id="msg"></textarea>
      </div>

      <u1 class="section-btn text-center">
      <a>
        <button type="submit" name="btn" id="btn" class="inp">
          <span data-hover="Send message">Send message</span>
        </button>
      </a>
    </u1> 

    </form> 
    
</section>

<footer class="py-5">
  <div class="container py-5">
    <div class="row">

      <div class="col-md-5 col-sm-6">
        <h2>Address</h2>
        <p>NPT-MCET campus,<br>Pollachi to Udumalapet Road, Chinnampalayam, <br>Pollachi.<br>Coimbatore District.</p>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="footer-info">
          <h2>Keep in touch</h2>
          <p><a href="#">010-010=0101</a></p>
          <p><a href="#">fashionista@mcet.in</a></p>
          <p><a href="#">Our Location</a></p>
        </div>
      </div>

      <div class="col-md-3 col-sm-12">
        <h2>About Us</h2>
        <p>Websites like this will help in growth of the shopping applications and websites through the links provided for the suggestions.</p>
        <ul class="social-icon list-unstyled d-flex">
          <li><a href="#"><i class="fa fa-twitter text-dark px-1" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook text-dark px-1" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram text-dark px-1" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin text-dark px-1" aria-hidden="true"></i></a></li>
        </ul>
      </div>

      <div class="col-md-12 col-12">
        <div class="copyright-text">
          <p>Copyright © 2021 Institution Name | Design<a href="#">Fashionista</a></p>
        </div>
      </div>

    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  $(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50)
  })
</script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>


</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900');

  *
  {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body
  {
    background-color: #ffffff;
    font-family: 'Source sans Pro', sans-serif;
  }

  h1,h2,h3,h4,h5,h6
  {
    font-weight: 300;
  }

  h1
  {
    font-size: 40px;
    font-weight: 200;
    line-height: 50px;
  }

  h2
  {
    font-size: 30px;
    margin-top: 0;
    line-height: 40px;
  }

  h3
  {
    font-size: 20px;
    font-weight: bold;
    line-height: 32px;
  }

  h4
  {
    color: #505050;
    font-size: 18px;
    line-height: 28px;
  }

  p
  {
    color: #757575;
    font-size: 16px;
    font-weight: 300;
    line-height: 29px;
    letter-spacing: 0.5px;
  }

  .bg
  {
    background: transparent;
    transition: 0.2s ease;
  }

  .bg.scrolled
  {
    background: #FE3737;
  }

  #about, #project, #team, #contact, footer
  {
    background: #ffffff;
  }

  .navbar .navbar-brand
  {
      font-weight: normal; 
      font-size: 25px;
      color: rgb(168, 106, 106);
  }

  .navbar .navbar-nav .nav-link
  {
    font-weight: normal;
    font-size: 14px;
    letter-spacing: 0.5px;
    padding: 0;
    text-transform: uppercase;
    transition: all-ease-in 0.4s;
    color: rgb(194, 149, 149);
  }

  .navbar .navbar-nav .nav-link:hover
  {
    background: transparent;
    color: #A30505;
  }  

  .navbar .navbar-nav .nav-link::after
  {
    content: "";
    display: block;
    width: 0;
    height: 2px;
    background: transparent;
    transition: width 0.3s ease, background-color 0.3s ease;
  }

  #home
  {
    display: flex;
    align-items: center;
    height: 100vh;
    position: relative;
  }

  #home video
  {
    position: fixed;
    top: 50%;
    left: 50%;
    min-height: 100%;
    min-width: 100%;
    height: auto;
    width: auto;
    transform: translateX(-50%) translateY(-50%);
    background-size: cover;
    box-sizing: border-box;
    overflow: hidden;
    z-index: -100;
    transition: 1s opacity;  
  }

    #home .overlay
    {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.75);
    }

    #home h1
    {
      color: #fff;
      font-size: 5vw;
      line-height: 1.2em;
    }

    #home p
    {
      color: rgba(250, 250, 250, 0.7);
    }

    #home .home-text
    {
      z-index: 99;
    }

    .section-btn
    {
      margin: 32px 0 0 0;
      padding: 0;
    }

    .section-btn a
    {
      color: #fff;
      font-weight: normal;
      line-height: 45px;
      perspective: 1000px;
    }

    .section-btn a span
    {
      position: relative;
      display: inline-block;
      font-size: 18px;
      font-weight: normal;
      letter-spacing: 0.5px;
      padding: 2px 27px;
      background: #FE3737;
      border-radius: 1px;
      transition: transform 0.3s;
      transform-origin: 50% 0;
      transform-style: preserve-3d;
    }

    .section-btn a span::before
    {
      position: absolute;
      top: 100%;
      left: 0;
      height: 100%;
      width: 100%;
      color: #fff;
      background: #000;
      border-radius: 1px;
      padding: 2px 27px;
      transition: background 0.3s;
      transform: rotateX(-90deg);
      content: attr(data-hover);
      transform-origin: 50% 0;
    }

    .section-btn a:hover span, 
    .section-btn a:focus span
    {
      transform: rotateX(90deg) translateY(-22px);
    }

  #about
  {
    position: relative;
  }

  #about h3
  {
    font-size: 14px;
    letter-spacing: 12px;
    text-transform: uppercase;
  }
  
  #project .project-item
  {
    position: relative;
    overflow: hidden;
    margin-bottom: 25px;
    padding: 0;
    vertical-align: middle;
    text-align: center;
  }

  #project .project-item .project-overlay
  {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: all ease-in-out 0.4s;
  }

  #project .project-item:hover .project-overlay
  {
    opacity: 1;
  }

  #project .project-item .project-overlay .project-info
  {
    padding: 12em 0;
  }

  .project-info h1
  {
    color: #fff;
    margin: 0;
  }

  .project-info h3
  {
    color: #d9d9d9;
    margin: 0;
    font-size: 14px;
    letter-spacing: 0.2px;
  }

  .project-item img
  {
    transition: all ease-in-out 0.4s;
  }

  .project-item:hover img
  {
    transform: scale(1.1);
  }

  .swiper 
  {
    width: 75%;
    height: 100%;
  }

  .swiper-slide 
  {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .swiper-slide .Text h3
  {
    font-weight: 200;
  }

  .swiper-slide .Text h3 span
  {
    font-weight: 500;
  }

  .swiper-slide img 
  {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  #contact
  {
    background: url(contact.jpg) 50% 0 repeat-y fixed;
    background-size: cover;
    background-position: center center;
    position: relative;
  }

  #contact .form-control
  {
    border: none;
    box-shadow: none;
    font-size: 18px;
    font-weight: normal;
    margin-bottom: 22px;
  }

  #contact .form-control:focus
  {
    border-color: #d9d9d9;
  }
  
  #contact input
  {
    height: 55px;
    line-height: 45px;
  }

</style>

</html>