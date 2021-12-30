<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
      <!-- CSS -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/media-queries.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style_1.css')}}">
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="/images/1.jpg">
      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

<body>

<!-- Wrapper -->
<div class="wrapper">
 
    <!-- Sidebar -->
    <nav class="sidebar">
 
        <!-- close sidebar menu -->
        <div class="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>
 
        <div class="logo">
           <h3 style="color: #fff; font-weight: 300;">Tech Raven</h3>
        </div>
 
        <ul class="list-unstyled menu-elements">
            <li class="active">
                <a class="scroll-link" href="#top-content"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-1"><i class="fas fa-blog"></i>Articles</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-2"><i class="fas fa-globe"></i>Trending Post</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-5"><i class="fas fa-pencil-alt"></i> Portfolio</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-6"><i class="fas fa-envelope"></i> Contact us</a>
            </li>
            
           
 
        <div class="to-top">
            <a class="btn btn-primary btn-customized-3" href="#" role="button">
                <i class="fas fa-arrow-up"></i> Top
            </a>
        </div>
 
 
 
    </nav>
    <!-- End sidebar -->
 
    <!-- Dark overlay -->
    <div class="overlay"></div>
 
    <!-- Content -->
    <div class="content">
 
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i> <span>Menu</span>
        </a>
 
        <!-- ... -->
 
        <!-- here is the page's content (not shown here) -->
 
        <!-- ... -->
 
    </div>
    <!-- End content -->
 
</div>
<!-- End wrapper -->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  
    <div class="carousel-inner">
        <div class="carousel-item active">
        
        <img src="{{ asset('images/3.jpeg')}}" class="d-block w-100" alt="...">
        
      </div>
     
      
      <div class="carousel-item">
        <img src="{{ asset('images/1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/3.jpeg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <section class="container ">
    <div class="container">
        <h2 class="article-head">Recent Posts</h2>
  
    </div>
  </section>
  
  <section class="container">
      <div class="row">
          <div class="col-lg-6 col-md-4">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('images/1.jpg')}}" class="img-fluid rounded-start w-100" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sapiente perspiciatis vero.</p>
          <button class="btn-button">Read More</button>
          <div class="rating">
            <button class="rating__star">☆</button>
            <button class="rating__star">★</button>
            <button class="rating__star">★</button>
            <button class="rating__star">★</button>
            <button class="rating__star">★</button>
        </div>
        </div>
        
      </div>
    
    </div>

  </div>
  
</div>

<div class="col-lg-6 col-md-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset('images/1.jpg')}}" class="img-fluid " alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem cumque blanditiis!</p>
            <button class="btn-button">Read More</button>
            <div class="rating">
              <button class="rating__star">★</button>
              <button class="rating__star">★</button>
              <button class="rating__star">★</button>
              <button class="rating__star">★</button>
              <button class="rating__star">★</button>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="container1">
<!-- Text -->
<div class="container__content">
  ...
</div>

<!-- Separator line -->
<div class="container__separator"></div>
</div>
<div class="row pt-4">
<div class="col-lg-6 col-md-4">
<div class="card mb-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="{{ asset('images/1.jpg')}}" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sapiente perspiciatis vero.</p>
<button class="btn-button">Read More</button>
<div class="rating">
  <button class="rating__star">☆</button>
  <button class="rating__star">☆</button>
  <button class="rating__star">☆</button>
  <button class="rating__star">☆</button>
  <button class="rating__star">★</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-4">
<div class="card mb-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="{{ asset('images/1.jpg')}}" class="img-fluid rounded-start " alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem cumque blanditiis!</p>
  <button class="btn-button">Read More</button>
  <div class="rating">
    <button class="rating__star">☆</button>
    <button class="rating__star">☆</button>
    <button class="rating__star">☆</button>
    <button class="rating__star">★</button>
    <button class="rating__star">★</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<h1 class="text-center " style="font-family: 'Courier New', Courier, monospace; border-bottom: 1px solid rgb(13, 31, 133);">Tech Raven</h1>
<footer class="p-4 text-center bg-light text-dark position-relative">
  <div class="container">
     
      <p class="lead fw-bold mb-4" style="font-family: 'Courier New', Courier, monospace;"> &copy Tech Raven</p>
    
     
  </div>
</footer>
    

         <!-- Javascript -->
         <script src="assets/js/jquery-3.3.1.min.js"></script>
         <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <script src="{{ asset('assets/js/jquery.backstretch.min.js')}}"></script>
         <script src="{{ asset('assets/js/wow.min.js')}}"></script>
         <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
         <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
         <script src="{{ asset('assets/js/scripts.js')}}"></script>
         <script src="{{ asset('assets/js/index.js')}}"></script>
</body>
</html>