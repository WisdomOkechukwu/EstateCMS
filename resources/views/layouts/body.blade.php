@extends('app')


@section('content')
    
        
     <!-- Banner Section -->
        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 my-auto mr-auto">
                        <h1 class="h1 h1-responsive">Find Your Next Perfect PLace To Live</h1>
                        <p>The greatest comfort you can have is a home which has an exquisite 
                            tatse and is worth coming back to this and much more we offer here at R.State
                            <br><b>You Are Welcome</b>
                        </p>
                        <!-- <button class="btn btn-theme-2">Learn More</button>
                        <button class="btn btn-play ml-3"><i class="fas fa-play"></i></button> -->
                    </div>
                    <div class=" col-lg-5 col-md-7 ml-auto my-md-auto my-5">
                        <div class="image">
                            <img src="asset/img/apartment.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Section -->
    
        <!-- Search Section -->
        <section id="search"> 
            <div class="container">
                <div class="col-lg-11 mx-auto search-area shadow">
                    <div class="row">
                        <div class="col-md-3">
                            <select name="" id="">
                                <option value="">Location</option>
                                <option value="">Location</option>
                                <option value="">Location</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Location" disabled>
                        </div>
                        <div class="col-md-3">
                            <select name="" id="">
                                <option value="">Property Type</option>
                                <option value="">Type 1</option>
                                <option value="">Type 2</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Property Type" disabled>
                        </div>
                        <div class="col-md-3">
                            <select name="" id="">
                                <option value="">Max Price</option>
                                <option value="">Min Price</option>
                                <option value="">Average</option>
                            </select>
                            <input type="text" class="form-control" placeholder="$6,500" disabled>
                        </div>
                        <div class="col-lg-2 col-md-3 ml-auto my-auto">
                            <button class="btn btn-theme">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Search Section -->
        
        <!-- About Section -->
        <section id="about" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <div class="aboutimg">
                            <img src="asset/img/home.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 pl-lg-5 px-4 mt-md-0 mt-5">
                        <h6 class="h6 color-primary m-0">About Us</h6>
                        <h1 class="h1 h1-responsive mb-4">We Provide The Best Property For You</h1>
                        <p>R.State Began in 2021 with an objective of bringing selers and buyers together using technoloy
                            as a platform to reach out and change the norm, R.State is built on hard working innovative 
                            employees which are faithful and willing to help you find a house suitable and fitted to your
                            finacial means.
                        </p>
    
                        <p>Get Ready to see properties tailored to you <b>Thank you for your co-operation</b></p>
                        <a href="#property"><button class="btn btn-theme-2">Learn More</button></a>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->
        
        <!-- Services Section -->
        <section id="service">
            <div class="container">
                <div class="col-md-12 mx-auto">
                    <div class="d-flex justify-content-between">
                        <div class="shadow service-show">
                            <i class="fas fa-user"></i>
                            <h4 class="h5">Make Your Dream True</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="shadow service-show">
                            <i class="fas fa-desktop"></i>
                            <h4 class="h5">Start Your Membership</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="shadow service-show">
                            <i class="fas fa-home"></i>
                            <h4 class="h5">Enjoy Your New Home</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Section -->
    
        <!-- Property Section -->
        <section id="property">
            <div class="container">
                <h6 class="h6 color-primary m-0">Recent</h6>
                <h1 class="h1 h1-responsive mb-4">Recently Added Properties</h1>
                <div class="text-right">
                    <a href="#">Find More Properties <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                </div>
    
                <!-- Property Slider -->
                <div id="slider1">
                    <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                            <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="property-list shadow">
                                        <div class="cardimage">
                                            <img src="asset/img/home-pic-1.jpg" alt="">
                                        </div>
                                        <div class="text-right">
                                            <h4 class="h5">$10,990</h4>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="item">
                                                <h4 class="h5 m-0">Palace</h4>
                                                <p class="m-0">City, Country</p>
                                            </div>
                                            <div class="item d-flex align-self-center">
                                                <i class="fas fa-bed mr-2 align-self-center"></i>
                                                <span class="mr-3">5</span>
                                                <i class="fas fa-bath mr-2 align-self-center"></i>
                                                <span>3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="swiper-slide">
                                    <div class="property-list shadow">
                                        <div class="cardimage">
                                            <img src="asset/img/home-pic-2.jpg" alt="">
                                        </div>
                                        <div class="text-right">
                                            <h4 class="h5">$10,990</h4>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="item">
                                                <h4 class="h5 m-0">Palace</h4>
                                                <p class="m-0">City, Country</p>
                                            </div>
                                            <div class="item d-flex align-self-center">
                                                <i class="fas fa-bed mr-2 align-self-center"></i>
                                                <span class="mr-3">5</span>
                                                <i class="fas fa-bath mr-2 align-self-center"></i>
                                                <span>3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="swiper-slide">
                                    <div class="property-list shadow">
                                        <div class="cardimage">
                                            <img src="asset/img/home-pic-3.jpg" alt="">
                                        </div>
                                        <div class="text-right">
                                            <h4 class="h5">$10,990</h4>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="item">
                                                <h4 class="h5 m-0">Palace</h4>
                                                <p class="m-0">City, Country</p>
                                            </div>
                                            <div class="item d-flex align-self-center">
                                                <i class="fas fa-bed mr-2 align-self-center"></i>
                                                <span class="mr-3">5</span>
                                                <i class="fas fa-bath mr-2 align-self-center"></i>
                                                <span>3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="swiper-slide">
                                    <div class="property-list shadow">
                                        <div class="cardimage">
                                            <img src="asset/img/home-pic-4.jpg" alt="">
                                        </div>
                                        <div class="text-right">
                                            <h4 class="h5">$10,990</h4>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="item">
                                                <h4 class="h5 m-0">Palace</h4>
                                                <p class="m-0">City, Country</p>
                                            </div>
                                            <div class="item d-flex align-self-center">
                                                <i class="fas fa-bed mr-2 align-self-center"></i>
                                                <span class="mr-3">5</span>
                                                <i class="fas fa-bath mr-2 align-self-center"></i>
                                                <span>3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            ...
                            </div>
                            
                        </div>
                    </div>
                <!-- /Property Slider -->
    
            </div>
        </section>
        <!-- /Property Section -->
    
        <!-- Work Section -->
        <section id="work">
            <div class="container">
                <h6 class="h6 color-primary m-0">Work</h6>
                <h1 class="h1 h1-responsive mb-4">How It Works</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt a dignissimos quidem.<br>
                    pariatur iste adipisci ipsum consequatur. Blanditiis, esse. Dignissimos</p>
                    <div class="d-flex justify-content-between my-5">
                        <div class="work-show">
                            <i class="fas fa-search"></i>
                            <h4 class="h5 mb-4">Find Home</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="work-show">
                            <i class="fas fa-credit-card"></i>
                            <h4 class="h5 mb-4">Make Payment</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="work-show">
                            <i class="fas fa-shield-alt"></i>
                            <h4 class="h5 mb-4">Make It Official</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
            </div>
        </section>
        <!-- /Work Section -->
    
        
    
        <!-- Testimonial Section Property -->
        <section id="testimonial">
            <div class="container"> 
                 <h6 class="h6 color-primary m-0">Testimonial</h6>
                <h1 class="h1 h1-responsive mb-4">What They Are Saying</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium explicabo nobis<br> 
                    itaque unde! Quas officia temporibus doloremque beatae? Sint impedit tempore iure quia commodi, 
                    consequuntur
                </p>
                <br><br>
                <div id="testimonial-slider">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="testimonial-list">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-4 text-center mx-auto">
                                            <div class="testimonial-image">
                                                <img src="asset/img/home-pic-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="offset-lg-1 col-lg-6 col-md-8 text-left">
                                            <i class="fas fa-quote-left fa-10x"></i>
                                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ullam distinctio, 
                                                laboriosam officia nemo possimus quod eum ex accusamus veritatis quaerat expedita, 
                                                dolorem optio quisquam assumenda provident, aperiam rerum inventore.
                                            </p>
                                            <br>    
                                            <h4 class="h4 m-0">Youtuber</h4>
                                            <p>Algorithms NG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="swiper-slide">
                                <div class="testimonial-list">
                                    <div class="row">
                                        <div class="col-md-4 col-4 text-center mx-auto">
                                            <div class="testimonial-image">
                                                <img src="asset/img/home-pic-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="offset-md-1 col-md-6 text-left">
                                            <i class="fas fa-quote-left fa-10x"></i>
                                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ullam distinctio, 
                                                laboriosam officia nemo possimus quod eum ex accusamus veritatis quaerat expedita, 
                                                dolorem optio quisquam assumenda provident, aperiam rerum inventore.
                                            </p>
                                            <br>    
                                            <h4 class="h4 m-0">Youtuber</h4>
                                            <p>Algorithms NG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonial Section Property -->
    
        <!-- Mail Section  -->
        <section id="mail">
            <div class="container">
                <h1 class="h1 h1-responsive mb-4">Have A Question in Mind?<br>Let us help you</h1>
                <div class="col-lg-8 col-md-11 mx-auto form shadow mt-3">
                    <div class="row">
                        <div class="col-md-9 my-auto">
                            <input type="email" class="form-control" placeholder="yourmail@domain.com">
                        </div>
                        <div class="col-md-3 text-right">
                            <button class="btn btn-theme-3">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Mail Section  -->
    
        
@endsection
