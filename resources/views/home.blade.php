@extends('layouts.app')

@section('content')

  
    <div class="banner banner2">
        <ul class="banner-slide">
            <li>
                <div class="banner-content">
                    <div class="wrap">
                        <div class="inner text-white">
                            <div class="container">
                                <div class="box">
                                    <div class="price secondary-color">
                                        Ksh. 35M | Riverbank Apartments
                                        <a href="#" class="view-more">View Details</a>
                                    </div>
                                    <!--price-->

                                    <h5 class="mb-5"><a href="#">Riverbank, Two Rivers</a></h5>
                                    <p>
                                      Riverbank apartments is a Two rivers residential flagship with beauty combined with all benefits of modern living. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--banner content-->

                <figure class="overlay overlay2">
                    <img src="assets/images/riverbank-banner.jpg" alt="">
                </figure>
            </li>=
            <!--singel banner-->

            <li>
                <div class="banner-content">
                    <div class="wrap">
                        <div class="inner text-white">
                            <div class="container">
                                <div class="box">
                                    <div class="price secondary-color">
                                        Ksh. 10.95M | Rundaview Apartments
                                        <a href="#" class="view-more">View Details</a>
                                    </div>
                                    <!--price-->

                                    <h5 class="mb-5"><a href="#"> Limuru Rd, Ruaka </a></h5>
                                    <p>
                                      Spacious three and two bedroom apartments located in a green, leafy and serene area with beautiful views of the greenery countryside, strategically located in the heart of Ruaka.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--banner content-->

                <figure class="overlay overlay2">
                    <img src="assets/images/rundaview-banner.jpg" alt="">
                </figure>
            </li>
            <!--singel banner-->

            <li>
                <div class="banner-content">
                    <div class="wrap">
                        <div class="inner text-white">
                            <div class="container">
                                <div class="box">
                                    <div class="price secondary-color">
                                        Ksh. 37M | Medina Palms
                                        <a href="#" class="view-more">View Details</a>
                                    </div>
                                    <!--price-->
                                    <h5 class="mb-5"><a href="#">Turtle Bay Road, Watamu</a></h5>
                                    <p>
                                      It features two large en-suite bedrooms with open plan kitchen with dining area coupled with spacious living areas that open up onto tropical gardens and pools.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--banner content-->

                <figure class="overlay overlay2">
                    <img src="assets/images/medina-banner.jpg" alt="">
                </figure>
            </li>
            <!--singel banner-->
        </ul>
    </div>
    <!--banner-->

    <main>
        <section class="intro pri-pad-b">
            <div class="container">
                <div class="filter-bar pri-pad-b">
                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                            <form action="#" class="form-inline">
                                <div class="form-group select">
                                    <label>Location</label>
                                    <select>
                                        <option>Nairobi</option>
                                        <option>Mombasa</option>
                                        <option>Kisumu</option>
                                    </select>
                                </div>
                                <!--location-->

                                <div class="form-group select">
                                    <label>property type</label>
                                    <select>
                                        <option value="apartment">Apartment</option>
                                        <option value="villas">Villa</option>
                                        <option value="condos">Condo</option>
                                    </select>
                                </div>
                                <!--type-->

                                <div class="form-group select">
                                    <label>Min Price</label>
                                    <select>
                                        <option>any Price</option>
                                        <option value="2M">2,000,000</option>
                                        <option value="3M">3,000,000</option>
                                    </select>
                                </div>
                                <!-- min price-->

                                <div class="form-group select">
                                    <label>Max Price</label>
                                    <select>
                                        <option>any Price</option>
                                        <option value="3M">3,000,000</option>
                                        <option value="100M">100M</option>
                                        <option value="200M">200M</option>
                                    </select>
                                </div>
                                <!--max price-->

                                <div class="form-group">
                                    <button type="submit">
                                        Start Search <i class="fa fa-long-arrow-right"></i>
                                    </button>
                                </div>
                                <!--max price-->
                            </form>
                        </div>
                    </div>
                </div>
                <!--filter bar-->

                <div class="row intro-content">
                    <div class="col-md-7 col-sm-7">
                        <div class="content-wrap">
                            <h2>Fluent in Property Management</h2>
                            <p>
                              We offer various services leveraging on our experience, expertise and track record in the local Real Estate Market. We serve both institutional and Individual Investors seeking management and execution capacity to fulfill their Real Estate investment objectives.
                            </p>
                            <p>
                               We manage property for Corporate and Individual Investors in excess of Ksh. 1 billion. 
                            </p>
                        </div>
                        <!--content-->
                        <a href="#" class="btn btn-border btn-lg faa-parent animated-hover">
                            About Us
                        </a>
                        <a href="#" class="btn btn-border btn-lg faa-parent animated-hover">
                           View Our Properties <i class="fa fa-long-arrow-right faa-passing"></i>
                        </a>
                    </div>
                </div>
                <!--intro content-->
            </div>
        </section>
        <!--intro-->

        <section class="featured-block featured-block-2 pri-pad">
            <!-- section container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="main-title text-center">
                            <h2>Recently listed properties</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="featured-wrap wrap mb-30">
                            <a href="#" class="tag left text-uppercase primary-bg">for sale</a>
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="assets/images/latest-featured1.jpg" alt="">
                                </a>
                            </figure>
                            <!--fig-->

                            <div class="content-wrap mb-0">
                                <div class="title-wrap mb-10">
                                    <h4 class="mb-0"><a href="#">Medina Palms</a></h4>
                                    <span>Turtle Bay Road, Watamu</span>
                                </div>

                                <div class="price-tag price">
                                    Ksh. 37M
                                </div>

                                <p>
                                    3 Bedroom - It features two large en-suite bedrooms with open plan kitchen..
                                </p>
                            </div>
                            <!--content-->

                            <a href="#" class="btn btn-link faa-parent animated-hover">
                                View Details <i class="fa fa-long-arrow-right faa-passing"></i>
                            </a>
                        </div>
                    </div>
                    <!--single featured-->

                    <div class="col-md-4 col-sm-4">
                        <div class="featured-wrap wrap mb-30">
                            <a href="#" class="tag left text-uppercase bg-blue">for sale</a>
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="assets/images/latest-featured2.jpg" alt="">
                                </a>
                            </figure>
                            <!--fig-->

                            <div class="content-wrap mb-0">
                                <div class="title-wrap mb-10">
                                    <h4 class="mb-0"><a href="#">Riverbank Apartment</a></h4>
                                    <span>Riverbank, Two Rivers</span>
                                </div>

                                <div class="price-tag price">
                                    Ksh. 35M
                                </div>

                                <p>
                                    3 Bedroom - The Riverbank apartments is a Two rivers residential flagship with.. 
                                    <!-- 12 fixed-texts -->
                                </p>
                            </div>
                            <!--content-->

                            <a href="#" class="btn btn-link faa-parent animated-hover">
                                View Details <i class="fa fa-long-arrow-right faa-passing"></i>
                            </a>
                        </div>
                    </div>
                    <!--single featured-->

                    <div class="col-md-4 col-sm-4">
                        <div class="featured-wrap wrap mb-30">
                            <a href="#" class="tag left text-uppercase bg-blue">for sale</a>
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="assets/images/latest-featured2.jpg" alt="">
                                </a>
                            </figure>
                            <!--fig-->
                    
                            <div class="content-wrap mb-0">
                                <div class="title-wrap mb-10">
                                    <h4 class="mb-0">
                                        <a href="#">Riverbank Apartment</a>
                                    </h4>
                                    <span>Riverbank, Two Rivers</span>
                                </div>
                    
                                <div class="price-tag price">
                                    Ksh. 35M
                                </div>
                    
                                <p>
                                    3 Bedroom - The Riverbank apartments is a Two rivers residential flagship with..
                                    <!-- 12 fixed-texts -->
                                </p>
                            </div>
                            <!--content-->
                    
                            <a href="#" class="btn btn-link faa-parent animated-hover">
                                View Details
                                <i class="fa fa-long-arrow-right faa-passing"></i>
                            </a>
                        </div>
                    </div>
                    <!--single featured-->

                    <div class="col-md-4 col-sm-4">
                        <div class="featured-wrap wrap mb-30">
                            <a href="#" class="tag left text-uppercase bg-blue">for sale</a>
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="assets/images/latest-featured2.jpg" alt="">
                                </a>
                            </figure>
                            <!--fig-->
                    
                            <div class="content-wrap mb-0">
                                <div class="title-wrap mb-10">
                                    <h4 class="mb-0">
                                        <a href="#">Riverbank Apartment</a>
                                    </h4>
                                    <span>Riverbank, Two Rivers</span>
                                </div>
                    
                                <div class="price-tag price">
                                    Ksh. 35M
                                </div>
                    
                                <p>
                                    3 Bedroom - The Riverbank apartments is a Two rivers residential flagship with..
                                    <!-- 12 fixed-texts -->
                                </p>
                            </div>
                            <!--content-->
                    
                            <a href="#" class="btn btn-link faa-parent animated-hover">
                                View Details
                                <i class="fa fa-long-arrow-right faa-passing"></i>
                            </a>
                        </div>
                    </div>
                    <!--single featured-->

                    <div class="col-md-4 col-sm-4">
                        <div class="featured-wrap wrap mb-30">
                            <a href="#" class="tag left text-uppercase bg-blue">for sale</a>
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="assets/images/latest-featured2.jpg" alt="">
                                </a>
                            </figure>
                            <!--fig-->
                    
                            <div class="content-wrap mb-0">
                                <div class="title-wrap mb-10">
                                    <h4 class="mb-0">
                                        <a href="#">Riverbank Apartment</a>
                                    </h4>
                                    <span>Riverbank, Two Rivers</span>
                                </div>
                    
                                <div class="price-tag price">
                                    Ksh. 35M
                                </div>
                    
                                <p>
                                    3 Bedroom - The Riverbank apartments is a Two rivers residential flagship with..
                                    <!-- 12 fixed-texts -->
                                </p>
                            </div>
                            <!--content-->
                    
                            <a href="#" class="btn btn-link faa-parent animated-hover">
                                View Details
                                <i class="fa fa-long-arrow-right faa-passing"></i>
                            </a>
                        </div>
                    </div>
                    <!--single featured-->

                    <div class="col-md-4 col-sm-4">
                        <div class="featured-wrap wrap mb-30">
                            <a href="#" class="tag left text-uppercase bg-blue">for sale</a>
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="assets/images/latest-featured2.jpg" alt="">
                                </a>
                            </figure>
                            <!--fig-->
                    
                            <div class="content-wrap mb-0">
                                <div class="title-wrap mb-10">
                                    <h4 class="mb-0">
                                        <a href="#">Riverbank Apartment</a>
                                    </h4>
                                    <span>Riverbank, Two Rivers</span>
                                </div>
                    
                                <div class="price-tag price">
                                    Ksh. 35M
                                </div>
                    
                                <p>
                                    3 Bedroom - The Riverbank apartments is a Two rivers residential flagship with..
                                    <!-- 12 fixed-texts -->
                                </p>
                            </div>
                            <!--content-->
                    
                            <a href="#" class="btn btn-link faa-parent animated-hover">
                                View Details
                                <i class="fa fa-long-arrow-right faa-passing"></i>
                            </a>
                        </div>
                    </div>
                    <!--single featured-->
                </div>
                <!--featred property wrap-->

                <div class="btn-wrap text-center">
                    <a href="#" class="btn btn-sucess btn-lg shadow faa-parent animated-hover">
                        More Properties <i class="fa fa-long-arrow-right faa-passing"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--featured property-->

        <section class="near-by-property wrap2 bg-white pri-pad">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="main-title text-center">
                            <h2>Explore nearby neighborhood</h2>
                            <p>
                                We have a range of properties in several locations the major locations are Nairobi, Kisumu, Mombasa, Kakamega
                                Nakuru, Naivasha etc.
                            </p>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="row">
                    <div class="col-md-8 col-sm-8 mb-30">
                        <div class="near-by-wrap wrap2">
                            <a href="#" class="link-overlay"></a>
                            <div class="content-wrap mb-0 text-white">
                                <div class="inner">
                                    <div class="title-wrap">
                                        <h4 class="mb-0 text-white">Nairobi</h4> 0 properties listed
                                    </div>
                                </div>
                            </div>

                            <figure class="image-effect overlay">
                                <img src="assets/images/near-by-5.jpg" alt="">
                            </figure>
                            <!--fig-->
                        </div>
                    </div>
                    <!--single property-->

                    <div class="col-md-4 col-sm-4 mb-30 big pull-right">
                        <div class="near-by-wrap wrap2">
                            <a href="#" class="link-overlay"></a>
                            <div class="content-wrap mb-0 text-white">
                                <div class="inner">
                                    <div class="title-wrap">
                                        <h4 class="mb-0 text-white">Mombasa</h4> 0 properties listed
                                    </div>
                                </div>
                            </div>

                            <figure class="image-effect overlay">
                                <img src="assets/images/near-by-6.jpg" alt="">
                            </figure>
                            <!--fig-->
                        </div>
                    </div>
                    <!--single property-->

                    <div class="col-md-4 col-sm-4 mb-30">
                        <div class="near-by-wrap wrap2">
                            <a href="#" class="link-overlay"></a>
                            <div class="content-wrap mb-0 text-white">
                                <div class="inner">
                                    <div class="title-wrap">
                                        <h4 class="mb-0 text-white">Kisumu</h4> 0 properties listed
                                    </div>
                                </div>
                            </div>

                            <figure class="image-effect overlay">
                                <img src="assets/images/near-by-7.jpg" alt="">
                            </figure>
                            <!--fig-->
                        </div>
                    </div>
                    <!--single property-->

                    <div class="col-md-4 col-sm-4 mb-30">
                        <div class="near-by-wrap wrap2">
                            <a href="#" class="link-overlay"></a>
                            <div class="content-wrap mb-0 text-white">
                                <div class="inner">
                                    <div class="title-wrap">
                                        <h4 class="mb-0 text-white">Kakamega</h4> 0 properties listed
                                    </div>
                                </div>
                            </div>

                            <figure class="image-effect overlay">
                                <img src="assets/images/near-by-8.jpg" alt="">
                            </figure>
                            <!--fig-->
                        </div>
                    </div>
                    <!--single property-->
                </div>
            </div>
        </section>
        <!--near by -->

        <section class="subscription">
            <div class="parallax-wrap">
                <div class="image overlay" data-type="background" data-speed="0">
                    <div class="stuff pri-pad">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 text-center">
                                    <div class="main-title full text-center">
                                        <h2>Join our mailing list</h2>
                                        <p>
                                            Would you like to receive mailings from Private Wealth about new products, special offers and events? Please leave us with your email
                                            to be included on our list.
                                        </p>
                                    </div>
                                    <!--title-->

                                    <form action="#" class="form-inline">
                                        <div class="form-group email">
                                            <input type="text" placeholder="enter your email address">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit">
                                                Subscribe <i class="fa fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--secbscription-->
    </main>

    <!-- back to top-->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>

@endsection
