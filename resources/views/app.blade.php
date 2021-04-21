<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
   <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <!-- Header Section -->
<header class="header">
    <div class="container">
        <!--Navbar Section-->
        <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><span class="color-primary">R.</span> State</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button> 
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Agents</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Auction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-theme">Sign Up</button>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/Navbar Section-->
    </div>
</header>
<!-- /Header Sectiion -->
    
    
    @yield('content')
    
</body>
</html>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- SwiperJS Javascript -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var mySwiper = new Swiper('#slider1 .swiper-container', {
    // Optional parameters
    loop: true,
    slidesPerView:1,
    spaceBetween:30,
    centredSlides:true,
    breakpoints:{
        640:{
            slidesPerView:1,
            spaceBetween:10,
        },
        768:{
            slidesPerView:2,
            spaceBetween:20,
        },
        1024:{
            slidesPerView:4,
            spaceBetween:30,
        },

    }
    });

    var mySwiper = new Swiper('#testimonial-slider .swiper-container', {
    // Optional parameters
    loop: true
    });
</script>