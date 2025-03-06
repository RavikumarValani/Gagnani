<x-front-layout>
    <!-- slider area -->
    <div class="hero-area">
        <div class="hero-slider-active swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <div class="intro-section height-80vh slider-content-center bg-img single-animation-wrap slider-bg-color-1 overly-style-1 opacity-point-4"
                        style="background-image:url({{ asset('images/banner/'. $banner->image) }})">
                        <div class="container hover_plx">
                            <div class="hero-content-1 slider-animated-1 text-center layer" data-depth="-0.7">
                                <h1 class="title animated">{{$banner->title}} </h1>
                                <p class="animated">{{$banner->description}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="home-slider-prev main-slider-nav"><i class="fa fa-angle-left"></i></div>
            <div class="home-slider-next main-slider-nav"><i class="fa fa-angle-right"></i></div>
        </div>
    </div>

    <!-- about us -->
    <section class="tc-experience-style1 section-padding-x">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2">
                    <div class="exp-num mb-100 wow zoomIn animated" data-wow-delay="0.3s">
                        <h5 class="fsz-18 text-uppercase"> years of <br> experience </h5>
                        <h2 class="num"> 28 </h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img wow animated">
                        <img src="images/exp.png" alt="" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info wow fadeInUp animated" data-wow-delay="0.3s">
                        <h1 class="title">WHO WE ARE?</h1>
                        <p>Gagnani's are globally-minded real estate, designing & architectural company composed of an
                            award-winning team from various backgrounds and cultures.
                        </p>
                        <p>We offer multiple services in different walks of business, and that allows us to forge
                            lasting and trusted relationships with the world's various businesses such as trading,
                            import & export besides building, construction and designing.</p>
                        <a href="#" class="btn btn-primary rounded-pill hover-bg-black bg-orange1 text-white">
                            <span> More About Us <i class="small ms-1 ti-arrow-top-right"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="images/c_line.png" alt="" class="c-line wow animated">
    </section>


    <!-- Video area -->
    <div class="section video-banner section-padding ">
        <div class="banner-content container">
            <video preload="none" loop="loop" poster="images/bg/bg-3.jpg">
                <source src="video/video.mp4" type="video/mp4">
            </video>
            <div class="status play-pause-style">
                <i class="fa fa-play"></i>
            </div>
        </div>
    </div>

    <!-- Project area -->
    <!-- <div class="section section-padding">
        <div class="container">
            <div class="section-title text-center mb-lg-8 mb-md-6 mb-4">
                <h2 class="title">Our <span> Venture</span></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
            </div>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 grid">
                <div class="col mb-6 grid-item cat2 cat4">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/baner_neotech.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">NEOTECH Multicity Engineering Consultancy</a></span>
                                <h3 class="title"><a href="#" class="btn btn-primary rounded-pill hover-bg-black bg-orange1 text-white">Read More</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat1">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/baner_nehacon.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">Restaurant Interior Design</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat4">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/baner_swifthomeloan.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Architecture</a></span>
                                <h3 class="title"><a href="project-details.html">Bedroom Remodeling </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat3 cat1">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/baner_credence.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Building</a></span>
                                <h3 class="title"><a href="project-details.html">Window Glass Replacement</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat1 cat3">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-5.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">House Painting</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat2 cat4">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-7.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">Bathroom Redesign</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat4">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-6.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">Office Room Interior Design</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat2 cat4">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-8.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">Hardwood Flooring Installation</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-6 grid-item cat1">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-9.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">Restaurant Interior Design</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-btn mt-6 mt-md-8 mt-lg-10 text-center">
                <a href="project.html" class="btn btn-dark btn-hover-primary">MORE PROJECT</a>
            </div>
        </div>
    </div>
 -->

    <div class="section section-padding bg-img bg-light-orange" style="background-image:url(images/bg2.png)">
        <div class="container">
            <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
                <h2 class="title">Our<span> Ventures</span></h2>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text.</p>
            </div>
            <div class="row ">
                <div class="col-md-6 mb-6">
                    <div class="working-process">
                        <div class="project-wrap">
                            <div class="project-inner">
                                <a class="thumbnail" href="project-details.html">
                                    <img src="images/baner_neotech.jpg" alt="Blog Image" class="rounded-15">
                                </a>
                                <div class="project-content">
                                    <span class="category"><a href="#">NEOTECH Multicity Engineering
                                            Consultancy</a></span>
                                    <p class="text-white">NEOTECH Multicity Engineering Consultancy Services Private
                                        Limited offers engineering design services for the built environment. Structural
                                        concepts developed by Multicity include a variety of Steel, Concrete and
                                        composite construction systems. Provides all types of land services within 200
                                        KMS.</p>
                                    <h3 class="title"><a href="#"
                                            class="btn btn-primary rounded-pill hover-bg-black bg-orange1 text-white">Read
                                            More</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-6">
                    <div class="working-process">
                        <div class="project-wrap">
                            <div class="project-inner">
                                <a class="thumbnail" href="project-details.html">
                                    <img src="images/baner_nehacon.jpg" alt="Blog Image" class="rounded-15">
                                </a>
                                <div class="project-content">
                                    <span class="category"><a href="#">NEOTECH Multicity Engineering
                                            Consultancy</a></span>
                                    <p class="text-white">NEOTECH Multicity Engineering Consultancy Services Private
                                        Limited offers engineering design services for the built environment. Structural
                                        concepts developed by Multicity include a variety of Steel, Concrete and
                                        composite construction systems. Provides all types of land services within 200
                                        KMS.</p>
                                    <h3 class="title"><a href="#"
                                            class="btn btn-primary rounded-pill hover-bg-black bg-orange1 text-white">Read
                                            More</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-6">
                    <div class="working-process">
                        <div class="project-wrap">
                            <div class="project-inner">
                                <a class="thumbnail" href="project-details.html">
                                    <img src="images/baner_swifthomeloan.jpg" alt="Blog Image" class="rounded-15">
                                </a>
                                <div class="project-content">
                                    <span class="category"><a href="#">NEOTECH Multicity Engineering
                                            Consultancy</a></span>
                                    <p class="text-white">NEOTECH Multicity Engineering Consultancy Services Private
                                        Limited offers engineering design services for the built environment. Structural
                                        concepts developed by Multicity include a variety of Steel, Concrete and
                                        composite construction systems. Provides all types of land services within 200
                                        KMS.</p>
                                    <h3 class="title"><a href="#"
                                            class="btn btn-primary rounded-pill hover-bg-black bg-orange1 text-white">Read
                                            More</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-6">
                    <div class="working-process">
                        <div class="project-wrap">
                            <div class="project-inner">
                                <a class="thumbnail" href="project-details.html">
                                    <img src="images/baner_credence.jpg" alt="Blog Image" class="rounded-15">
                                </a>
                                <div class="project-content">
                                    <span class="category"><a href="#">NEOTECH Multicity Engineering
                                            Consultancy</a></span>
                                    <p class="text-white">NEOTECH Multicity Engineering Consultancy Services Private
                                        Limited offers engineering design services for the built environment. Structural
                                        concepts developed by Multicity include a variety of Steel, Concrete and
                                        composite construction systems. Provides all types of land services within 200
                                        KMS.</p>
                                    <h3 class="title"><a href="#"
                                            class="btn btn-primary rounded-pill hover-bg-black bg-orange1 text-white">Read
                                            More</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our services -->
    <div class="section section-padding ">
        <div class="container">
            <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
                <h2 class="title">Our <span>Services</span></h2>
            </div>
            <div class="row mb-n6">
                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon design_compass"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">Planning</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon furniture_light"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">Designing</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon design_design"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">3D Elevation</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon design_compass"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">Interior Design</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon furniture_light"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">Structure Design</h3>
                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon design_design"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">Import</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon furniture_mixer"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">Export</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12 mb-5">
                    <div class="service-content-wrap-2 shadow">
                        <div class="service-icon-2">
                            <i class="dlicon furniture_mixer"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title">Trade</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- our services -->
    <div class="section section-padding bg-light">
        <div class="container">
            <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
                <h2 class="title">WE PROVIDE <span>DESIGNS FOR</span></h2>
            </div>
            <div class="row mb-n6">
                <div class="col-xl-6 col-md-6 col-12 mb-5">
                    <h5 class="mb-0 p-3 border rounded bg-white">
                        <svg class="me-2" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15L12 18" stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495"
                                stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                        </svg>Low & high-rise bulding
                    </h5>
                </div>
                <div class="col-xl-6 col-md-6 col-12 mb-5">
                    <h5 class="mb-0 p-3 border rounded bg-white">
                        <svg class="me-2" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15L12 18" stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495"
                                stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                        </svg>Residential & Commercial Building
                    </h5>
                </div>
                <div class="col-xl-6 col-md-6 col-12 mb-5">
                    <h5 class="mb-0 p-3 border rounded bg-white">
                        <svg class="me-2" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15L12 18" stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495"
                                stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                        </svg>High-end Bungalow
                    </h5>
                </div>
                <div class="col-xl-6 col-md-6 col-12 mb-5">
                    <h5 class="mb-0 p-3 border rounded bg-white">
                        <svg class="me-2" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15L12 18" stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495"
                                stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                        </svg>Weekend Villa
                    </h5>
                </div>
                <div class="col-xl-6 col-md-6 col-12 mb-5">
                    <h5 class="mb-0 p-3 border rounded bg-white">
                        <svg class="me-2" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15L12 18" stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495"
                                stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                        </svg>Farmhouse
                    </h5>
                </div>
                <div class="col-xl-6 col-md-6 col-12 mb-5">
                    <h5 class="mb-0 p-3 border rounded bg-white">
                        <svg class="me-2" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15L12 18" stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495"
                                stroke="#ea622b" stroke-width="1.5" stroke-linecap="round" />
                        </svg> Residential & Industrial Plotting
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Project area -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
                <h2 class="title">Our <span> Projects</span></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text.</p>
            </div>
        </div>
        <div class="project-slider-active swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="img-zoom" href="images/project/project-10.jpg"><i
                                    class="dlicon arrows-1_zoom-88"></i></a>
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-10.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Building</a></span>
                                <h3 class="title"><a href="project-details.html">Living Room Remodeling</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="img-zoom" href="images/project/project-12.jpg"><i
                                    class="dlicon arrows-1_zoom-88"></i></a>
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-12.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Architecture</a></span>
                                <h3 class="title"><a href="project-details.html">Restaurant Interior Design</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="img-zoom" href="images/project/project-11.jpg"><i
                                    class="dlicon arrows-1_zoom-88"></i></a>
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-11.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">Window Glass Replacement</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="img-zoom" href="images/project/project-13.jpg"><i
                                    class="dlicon arrows-1_zoom-88"></i></a>
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-13.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Building</a></span>
                                <h3 class="title"><a href="project-details.html">Wall Mural Painting </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="img-zoom" href="images/project/project-11.jpg"><i
                                    class="dlicon arrows-1_zoom-88"></i></a>
                            <a class="thumbnail" href="project-details.html">
                                <img src="images/project/project-11.jpg" alt="Blog Image">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">Interior</a></span>
                                <h3 class="title"><a href="project-details.html">Living Room Interior Design</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-slider-prev project-slider-nav"><i class="fa fa-angle-left"></i> PREV</div>
            <div class="project-slider-next project-slider-nav">NEXT <i class="fa fa-angle-right"></i></div>
        </div>
    </div>

    <!-- marques line  -->
    <div class="tc-testimonials-style1">
        <div class="container">
            <div class="row">

            </div>
        </div>
        <div class="marq-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#"> CONSTRUCT DREAMS </a>
                </div>
                <div class="swiper-slide">
                    <a href="#"> CREATING SPACES </a>
                </div>
                <div class="swiper-slide">
                    <a href="#"> SHAPING FUTURES </a>
                </div>
            </div>
        </div>
    </div>



    <div class="tc-chat-style1">
        <div class="container">
            <div class="content">
                <p class="xl-text"> Gagnani Promise- We won't <br> let you down. </p>
                <div class="project-btn mt-6 mt-md-8 mt-lg-10">
                    <a href="#" class="btn btn-dark btn-hover-primary"><i class="fa fa-phone"></i> +91 922750
                        5350</a>
                </div>
            </div>
        </div>
        <img src="images/c_line4.png" alt="" class="c-line wow animated">
    </div>
</x-front-layout>
