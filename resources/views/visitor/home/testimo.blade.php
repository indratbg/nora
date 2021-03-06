<style>
    .slide {
        width: 100%;
        height: 400px !important;
    }

    .carousel-inner {
        width: 100%;
        height: 400px !important;
    }

    /* Carousel */

    #quote-carousel {
        padding: 0 10px 30px 10px;
        margin-top: 30px;
        /* Control buttons  */
        /* Previous button  */
        /* Next button  */
        /* Changes the position of the indicators */
        /* Changes the color of the indicators */
    }
    #quote-carousel .carousel-control {
        background: none;
        color: #CACACA;
        font-size: 2.3em;
        text-shadow: none;
        margin-top: 30px;
    }
    #quote-carousel .carousel-control.left {
        left: -60px;
    }
    #quote-carousel .carousel-control.right {
        right: -60px;
    }
    #quote-carousel .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }
    #quote-carousel .carousel-indicators li {
        width: 50px;
        height: 50px;
        margin: 5px;
        cursor: pointer;
        border: 4px solid #CCC;
        border-radius: 50px;
        opacity: 0.4;
        overflow: hidden;
        transition: all 0.4s;
    }
    #quote-carousel .carousel-indicators .active {
        background: #333333;
        width: 128px;
        height: 128px;
        border-radius: 100px;
        border-color: #f33;
        opacity: 1;
        overflow: hidden;
    }
    .carousel-inner {
        min-height: 300px;
    }
    .item blockquote {
        border-left: none;
        margin: 0;
    }
    .item blockquote p:before {
        content: "\f10d";
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
    }

</style>
 <legend>Testimonial</legend>
<div class="row">
    <div class="col-md-12" data-wow-delay="0.1s">
        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                    <img class="img-responsive " src="{{ asset('img/testimonial/128.png') }}" alt="">
                </li>
                <li data-target="#quote-carousel" data-slide-to="1">
                    <img class="img-responsive" src="{{ asset('img/testimonial/129.png') }}" alt="">
                </li>
                <li data-target="#quote-carousel" data-slide-to="2">
                    <img class="img-responsive" src="{{ asset('img/testimonial/130.png') }}" alt="">
                </li>
                <li data-target="#quote-carousel" data-slide-to="3">
                    <img class="img-responsive" src="{{ asset('img/testimonial/130.png') }}" alt="">
                </li>
            </ol>

            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner text-center">

                <!-- Quote 1 -->
                <div class="item active">
                    <blockquote>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                <small>Someone famous</small>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <!-- Quote 2 -->
                <div class="item">
                    <blockquote>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <small>Someone famous</small>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <!-- Quote 3 -->
                <div class="item">
                    <blockquote>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                <small>Someone famous</small>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <!-- Quote 4 -->
                <div class="item">
                    <blockquote>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                <small>Someone famous</small>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>

            <!-- Carousel Buttons Next/Prev -->
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>