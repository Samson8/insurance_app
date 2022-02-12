@extends('layout.app')

@section('content')

    <!-- slider -->
    <section class="wrapper100percent">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="{{ asset('assets/images/slider1.jpg') }}" alt="" />
                    <div class="flex-caption flex-caption1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <h1>
                                        Miavita GmbH
                                    </h1>
                                    <p>
                                        Eenandri posuere volutpat sed voluptatum convenire quo ad lorem ipsum dolor.
                                    </p>
                                    <div class="button1">
                                        <a href="#menu6">Get in touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('assets/images/slider2.jpg') }}" alt="" />
                    <div class="flex-caption flex-caption1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-lg-push-8 col-md-push-6">
                                    <h1>
                                        Protect your family with insurance
                                    </h1>
                                    <p>
                                        Eenandri posuere volutpat sed voluptatum convenire quo ad lorem ipsum dolor.
                                    </p>
                                    <div class="button1">
                                        <a href="#menu6">Get in touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('assets/images/slider3.jpg') }}" alt="" />
                    <div class="flex-caption flex-caption1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-lg-push-8 col-md-push-6">
                                    <h1>
                                        Solution for everyone
                                    </h1>
                                    <p>
                                        Eenandri posuere volutpat sed voluptatum convenire quo ad lorem ipsum dolor.
                                    </p>
                                    <div class="button1">
                                        <a href="#menu6">Get in touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--slider end-->

    <!-- one section -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper" id="menu2"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Insurance Products</h2>
                <h3>Insurance is a matter of trust. As a reliable insurance advisor, we are happy to be there for you.
                </h3>
            </div>
        </div>
        <div class="wrapper100percent">
            <div class="row">
                <div class="services">
                    <!-- one service -->
                    <div class="one-service color1">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon-home.png') }}" alt="">
                                <h3>House insurance</h3>
                                <ul>
                                    <li>
                                        <p>
                                            We create an insurance solution for you that fits like a tailor-made suit.
                                        </p>
                                        <a href="insurance_single.html">
                                            Read more <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color2">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon-car.png') }}" alt="">
                                <h3>Vehicle insurance</h3>
                                <ul>
                                    <li>
                                        <p>
                                            From small cars to luxury sports cars.
                                        </p>
                                        <a href="insurance_single.html">
                                            Read more <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color3">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon-travel.png') }}" alt="">
                                <h3>Travel insurance</h3>
                                <ul>
                                    <li>
                                        <p>
                                            There is suitable insurance coverage for all these and other risks.
                                        </p>
                                        <a href="insurance_single.html">
                                            Read more <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color4">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon-health.png') }}" alt="">
                                <h3>Health insurance</h3>
                                <ul>
                                    <li>
                                        <p>
                                            The standard model allows you to choose your doctor freely
                                        </p>
                                        <a href="insurance_single.html">
                                            Read more <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color6">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon-health.png') }}" alt="">
                                <h3>Life insurance</h3>
                                <ul>
                                    <li>
                                        <p>
                                            We will be happy to help you find the right solution.
                                        </p>
                                        <a href="insurance_single.html">
                                            Read more <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper" id="menu3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h3>About Us</h3>
                    <br>
                    <p>
                        Insurance is increasingly being taken out over the Internet. Despite all the advantages, people fall
                        by the wayside. Would you like to be advised by machines? We are not! That is why we founded
                        miavita. To take advantage of the internet and still not forget people. Regardless of whether you
                        are a customer or an employee.

                        We are committed. In our long years in the insurance industry, we have found time and again how
                        difficult it can be to make complex issues customer-friendly. Over time we've gotten very good at
                        it. From then on it was only a small step to miavita.

                        Every member of our team is a trained insurance expert. We also enjoy dealing with people. When can
                        we get to know you?
                    </p>
                    <br />
                    <p>
                        We actually wanted to introduce ourselves here. While we were fine-tuning the texts, we received
                        numerous compliments from our customers. So we take this opportunity to talk about you. They are
                        amazing! Thank you for the trust that you give us every day!</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent timerwrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- one counter -->
                        <div class="col-sm-4">
                            <div class="onecounter">
                                <div class="onecounter-left">
                                    <img src="{{ asset('assets/images/icon-counter1.png') }}" alt="">
                                </div>
                                <div class="onecounter-right">
                                    <p><span class="timer" data-to="2580" data-speed="100"
                                            data-refresh-interval="1">1</span></p>
                                    <h6> Houses protected</h6>
                                </div>
                            </div>
                        </div>
                        <!-- one counter end -->
                        <!-- one counter -->
                        <div class="col-sm-4">
                            <div class="onecounter">
                                <div class="onecounter-left">
                                    <img src="{{ asset('assets/images/icon-counter2.png') }}" alt="">
                                </div>
                                <div class="onecounter-right">
                                    <p><span class="timer" data-to="2580" data-speed="100"
                                            data-refresh-interval="1">1</span></p>
                                    <h6> Contracts signed</h6>
                                </div>
                            </div>
                        </div>
                        <!-- one counter end -->
                        <!-- one counter -->
                        <div class="col-sm-4">
                            <div class="onecounter">
                                <div class="onecounter-left">
                                    <img src="{{ asset('assets/images/icon-counter3.png') }}" alt="">
                                </div>
                                <div class="onecounter-right">
                                    <p><span class="timer" data-to="2580" data-speed="100"
                                            data-refresh-interval="1">1</span></p>
                                    <h6> Hours supported</h6>
                                </div>
                            </div>
                        </div>
                        <!-- one counter end -->
                    </div>
                    <!-- row end -->
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h3>Our Business Sucess</h3>
                    <br>
                    <p>
                        Suas iracundia his ea. No lorem ipsum errem ridens eam, nam an veniam equidem. Ex nec veniam
                        singulis. No errem ridens eam, nam an veniam equidem nam an veniam equidem. No errem ridens eam, nam
                        an veniam equidem lorem. Eu legendos definitiones vim, ea menandri voluptatum convenire quo ad lorem
                        ipsum dolor.
                    </p>
                    <div class="button1">
                        <a href="#menu6">Get in touch</a>
                    </div> <br>
                </div>
                <div class="col-md-6">
                    <div class="ct-chart ct-perfect-fourth"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section2">
        <div class="sectionwrapper"></div>
        <div class="section3a-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3> Testimonials
                        </h3>
                    </div>
                    <div class="col-lg-12">
                        <!-- carousel-->
                        <div class="gallery js-flickity" data-flickity-options='{
                "contain": true,
                "imagesLoaded": true,
                "autoPlay": true,
                "pageDots": true,
                "prevNextButtons": false,
                "wrapAround": false
                }'>
                            <!-- one testimonial -->
                            <div class="col-md-12 testimonials">
                                <div class="testimonialsinner">
                                    <div class="testimonial">
                                        <img src="{{ asset('assets/images/testimonial1.jpg') }}" alt="">
                                        <p> Jane Doe
                                        </p>
                                        <h5> Very professional life insurance agency. Suas iracundia his ea. No lorem ipsum
                                            errem ridens eam.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- one testimonial end -->
                            <!-- one testimonial -->
                            <div class="col-md-12 testimonials">
                                <div class="testimonialsinner">
                                    <div class="testimonial">
                                        <img src="{{ asset('assets/images/testimonial2.jpg') }}" alt="">
                                        <p> John Doe
                                        </p>
                                        <h5> Very professional life insurance agency. Suas iracundia his ea. No lorem ipsum
                                            errem ridens eam.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- one testimonial end -->
                            <!-- one testimonial -->
                            <div class="col-md-12 testimonials">
                                <div class="testimonialsinner">
                                    <div class="testimonial">
                                        <img src="{{ asset('assets/images/testimonial1.jpg') }}" alt="">
                                        <p> Jane Doe
                                        </p>
                                        <h5> Very professional life insurance agency. Suas iracundia his ea. No lorem ipsum
                                            errem ridens eam.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- one testimonial end -->
                            <!-- one testimonial -->
                            <div class="col-md-12 testimonials">
                                <div class="testimonialsinner">
                                    <div class="testimonial">
                                        <img src="{{ asset('assets/images/testimonial3.jpg') }}" alt="">
                                        <p> John Doe
                                        </p>
                                        <h5> Very professional life insurance agency. Suas iracundia his ea. No lorem ipsum
                                            errem ridens eam.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- one testimonial end -->
                        </div>
                        <!-- carousel end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- one section end -->


    <div class="wrapper100percent section1a">
        <!-- carousel-->
        <div class="row gallery js-flickity" data-flickity-options='{
                "contain": true,
                "imagesLoaded": true,
                "autoPlay": true,
                "pageDots": false,
                "prevNextButtons": false,
                "wrapAround": false
                }'>
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo1.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo2.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo3.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo4.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo5.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo1.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo2.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo3.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo4.png') }}" alt="">
            </div>
            <!-- one logo end -->
            <!-- one logo -->
            <div class="col-md-2 partnerone">
                <img src="{{ asset('assets/images/partner-logo5.png') }}" alt="">
            </div>
            <!-- carousel end -->
        </div>
    </div>

    <!-- one section -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper" id="menu4"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Insurance Agents</h2>
                <h3>Members of our team are trained insurance expert. We also enjoy dealing with people. Can we get to know
                    you?
                </h3>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12 text-center">
                <!-- teamcolumn  -->
                <div class="col-md-4">

                </div>
                <!-- teamcolumn end  -->
                <!-- teamcolumn  -->
                <div class="col-md-4 mr-4">
                    <div class="teamcolumn">
                        <div class="teamcolumn-inner">
                            <figure class="view1 view-first1">
                                <img src="{{ asset('assets/images/team2.jpg') }}" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="team_single.html">read more <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="team-name">
                                <h4>John Doe</h4>
                                <h6>Manager</h6>
                                <p>Insurance agent with over 10 years of experience in insurance business.
                                </p>
                                <a href="https://www.facebook.com/pages/Rayoflightthemes/408688349185439"><i
                                        class="teamicon fa fa-facebook"></i></a>
                                <a href="#"><i class="teamicon fa fa-twitter"></i></a>
                                <a href="#"><i class="teamicon fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teamcolumn end -->
                <!-- teamcolumn  -->
                <div class="col-md-4">

                </div>
                <!-- teamcolumn end -->
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper" id="menu5"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Blog News</h2>
                <h3>Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor
                    sit amet
                </h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="wrapper100percent">
                    <div class="gallery js-flickity" data-flickity-options='{
                "contain": true,
                "imagesLoaded": true,
                "autoPlay": true,
                "pageDots": true,
                "prevNextButtons": false,
                "wrapAround": false
                }'>
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="{{ asset('assets/images/bloghome1.jpg') }}" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>This is blog post news</h4>
                                <div class="date">
                                    <p> <i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p> <i class="fa fa-user"></i> <a href=""> Admin</a> </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit amet.Lorem ipsum lore ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="{{ asset('assets/images/bloghome2.jpg') }}" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>This is blog post news</h4>
                                <div class="date">
                                    <p> <i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p> <i class="fa fa-user"></i> <a href=""> Admin</a> </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit amet.Lorem ipsum lore ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="{{ asset('assets/images/bloghome3.jpg') }}" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>This is blog post news</h4>
                                <div class="date">
                                    <p> <i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p> <i class="fa fa-user"></i> <a href=""> Admin</a> </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit amet.Lorem ipsum lore ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="{{ asset('assets/images/bloghome1.jpg') }}" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>This is blog post news</h4>
                                <div class="date">
                                    <p> <i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p> <i class="fa fa-user"></i> <a href=""> Admin</a> </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit amet.Lorem ipsum lore ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="{{ asset('assets/images/bloghome2.jpg') }}" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>This is blog post news</h4>
                                <div class="date">
                                    <p> <i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p> <i class="fa fa-user"></i> <a href=""> Admin</a> </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit amet.Lorem ipsum lore ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="{{ asset('assets/images/bloghome3.jpg') }}" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>This is blog post news</h4>
                                <div class="date">
                                    <p> <i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p> <i class="fa fa-user"></i> <a href=""> Admin</a> </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit amet.Lorem ipsum lore ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                        <!-- one post end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->
    <!-- one section -->
    <section class="wrapper100percent section3" id="menu6">
        <div class="left">
            <div class="left-inner">
                <h3>FAQ</h3>
                <br>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Question number One
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Question number Two
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Question number Three
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Question number Four
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">
                                Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Question number Five
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">
                                Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-inner">
                <div class="row mb-1">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close text-danger" data-dismiss="alert">x</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>
                <h3>Get in touch</h3>
                <!-- comment-form -->
                <form class="wrapper100percent" method="post" action="{{ route('request') }}">
                    @csrf
                    <div id="main">
                        <div>
                            <p><input type="text" placeholder="your name" name="name" id="name" />
                            </p>
                        </div>
                        <div>
                            <p> <input type="text" placeholder="your e-mail address" name="email" id="email" />
                            </p>
                        </div>
                        <div>
                            <p> <input type="text" placeholder="phone number" name="phone" id="subject" />
                            </p>
                        </div>
                        <p><textarea placeholder="Solution : Health, Motor, Dental Insurance etc" name="solution"
                                id="comments" rows="12" cols="5"></textarea>
                        </p>
                        <div class="buttoncontact">
                            <p>
                                <input type="submit" value="send request" />
                            </p>
                        </div>
                        <ul class="col-sm-12" id="response"></ul>
                    </div>
                </form>
                <!-- comment-form-end end -->
            </div>
        </div>
    </section>
    <!-- one section end -->


    <!-- one section -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="map-overlay" onClick="style.pointerEvents='none'"> </div>
                    <div class="map">
                        <iframe
                            src="https://maps.google.com/maps?sll=42.3232039,-71.1423464&amp;sspn=0.0974788,0.1757965&amp;q=new+yourk+near+Brookline,+MA&amp;ie=UTF8&amp;hq=new+york&amp;hnear=Brookline,+Norfolk+County,+Massachusetts&amp;t=m&amp;ll=42.343748,-71.142702&amp;spn=0.081827,0.222714&amp;output=embed">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <h4>Contact information</h4>
                        <p>Need help? Have any questions? Contact us.
                        </p>
                        <ul class="ul-list">
                            <li>
                                <i class="fa fa-phone"></i>
                                +41 79 272 92 27

                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> info@mia-vita.ch
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i> miavita GmbH, Weidstrasse 1 4656 Starrkirch-Wil
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <!-- one section end -->
@endsection
