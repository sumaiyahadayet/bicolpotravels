@extends('layouts.app')

@section('css')
@endsection

@section('meta')





@endsection

@section('content')




<div id="home">
    <div id="myCarousel" class="carousel " data-ride="carousel" data-interval="8000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach (Banner() as $banner)
            @if($banner->order==1)
                <div class="item active">
                    <div class="carousel-caption">
                        <h2 class="animated fadeInUp">{{$banner->title}}</h2>
                        <p> {{$banner->caption}}</p>
                    </div>
                    <img class="banner-image" src="{{asset($banner->image)}}" alt="Los Angeles" style="width:1682px;height:500px;">

                </div>
                @else
                <div class="item">
                    <div class="carousel-caption">
                        <h2 class="animated fadeInUp">{{$banner->title}}</h2>
                        <p>{{$banner->caption}}</p>
                    </div>
                    <img class="banner-image" src="{{asset($banner->image)}}" alt="Chicago" style="width:1682px;height:500px;">

                </div>
                @endif
                @endforeach
                {{-- <div class="item">
                <div class="carousel-caption">
                    <h2 class="animated fadeInUp">Change your Existing Ticket</h2>
                    <p>Existing ticket you have of any airlines can be easily changed through us. </p>
                </div>
                <img class="banner-image" src="{{asset('assets/images/banner-3.jpg')}}" alt="New york" style="width:1682px;height:500px;">

        </div> --}}
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container ">
    <div class="col-xs-12 tab-panels">
        <ul class=" tabs">
            <li rel="panel1" class="col-sm-6 col-md-3 col-xs-6 active"><i class="fa fa-plane" aria-hidden="true"></i>Search Flights</li>
            <li rel="panel4" class="col-sm-6 col-md-3 col-xs-6"><i class="fa fa-ticket" aria-hidden="true"></i>Change Flight</li>
            <li rel="panel2" class="col-sm-6 col-md-3 col-xs-6"><i class="fa fa-hotel" aria-hidden="true"></i>Hotel Booking</li>
            <li rel="panel3" class="col-sm-6 col-md-3 col-xs-6"><img src="/assets/images/umbrella beach.png" style="height:22px; width=auto;"> Holidays</li>

        </ul>

        <div id="panel1" class="col-xs-12 panel active">
            <h5 class="text-center">Thanks for Choosing BICOLPO TRAVELS. Search here for CHEAPEST fare;</h5>
            <h6 class="text-center">You will be redirected to our Booking Engine</h6>

            <div class="row">
                <div class="col-md-12 search-engine">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise from-where">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p> From Where?</p>
                                </button>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p> To Where?</p>
                                </button>
                            </a></div>
                        <div class="col-md-1 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <p> Depart</p>
                                </button>
                            </a></div>
                        <div class="col-md-1 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <p> Return</p>
                                </button>
                            </a>
                        </div>
                        <div class="col-md-2 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p> Traveler</p>
                                </button>
                            </a></div>
                        <div class="col-md-2 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default flight">

                                    <p> Search Flight</p>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="panel4" class="col-xs-12 panel">
            content4<br /> content4
            <br /> content4
            <br /> content4
            <br /> content4
            <br />
        </div>
        <div id="panel2" class="col-xs-12 panel">
            <h5 class="text-center">Find Cheap Hotels and Save Now</h5>
            <h6 class="text-center">You will be redirected to our Booking Engine</h6>

            <div class="row">
                <div class="col-md-12 search-engine">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise from-where">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p> Destination</p>
                                </button>
                            </a>
                        </div>


                        <div class="col-md-2 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <p> Check-in</p>
                                </button>
                            </a></div>
                        <div class="col-md-2 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <p> Check-out</p>
                                </button>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default raise">
                                    <i class="fa fa-hotel" aria-hidden="true"></i>
                                    <p> Traveler</p>
                                </button>
                            </a></div>
                        <div class="col-md-2 col-xs-12">
                            <a href="http://makeanytrips.com/">
                                <button class="btn btn-default flight2">

                                    <p> Search Hotel</p>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="panel3" class="col-xs-12 panel">
            <div class="Container">
                <h3 class="Head"><strong>Domestic Packages</strong> <span class="Arrows"></span></h3>
                <!-- Carousel Container -->
                <div class="SlickCarousel">
                    <!-- Item -->
                    @foreach (Dompack() as $dompack)


                    <div class="ProductBlock">
                        <div class="Content">
                            <div class="img-fill">
                                <img src="{{asset($dompack->image)}}">
                            </div>
                            <h3>{{$dompack->title}}
                                <a href="{{asset($dompack->link)}}"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                        </div>
                    </div>
                    @endforeach
                    <!-- Item -->
                    <!-- Item -->
                    {{-- <div class="ProductBlock">
                        <div class="Content">
                            <div class="img-fill">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                            </div>
                            <h3>Block Title<a href="#"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                        </div>
                    </div>
                    <!-- Item -->
                    <!-- Item -->
                    <div class="ProductBlock">
                        <div class="Content">
                            <div class="img-fill">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                            </div>

                            <h3>Block Title
                                <a href="#"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                        </div>
                    </div>
                    <!-- Item -->
                    <!-- Item -->
                    <div class="ProductBlock">
                        <div class="Content">
                            <div class="img-fill">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                            </div>
                            <h3>Block Title
                                <a href="#"> <button class=" read-more-button text-center">Learn More</button></a>
                            </h3>
                        </div>
                    </div>
                    <!-- Item -->
                    <!-- Item -->
                    <div class="ProductBlock">
                        <div class="Content">
                            <div class="img-fill">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">

                            </div>
                            <h3>Block Title
                                <a href="#"> <button class=" read-more-button text-center">Learn More</button></a>
                            </h3>
                        </div>
                    </div> --}}
                    <!-- Item -->
                </div>
                <!-- Carousel Container -->
            </div>
            <div class="Container2">
                <h3 class="Head2"><strong>International Packages</strong> <span class="Arrows2"></span></h3>
                <!-- Carousel Container -->
                <div class="SlickCarousel2">
                    <!-- Item -->
                    @foreach (Intpack() as $intpack)
                    <div class="ProductBlock2">
                        <div class="Content2">
                            <div class="img-fill2">
                                <img src="{{asset($intpack->image)}}">
                            </div>

                            <h3>{{$intpack->title}}
                                <a href="{{asset($intpack->link)}}"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                        </div>
                    </div>
                    <!-- Item -->
                    <!-- Item -->
                    {{-- <div class="ProductBlock2">
                        <div class="Content2">
                            <div class="img-fill2">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                            </div>

                            <h3>Block Title
                                <a href="#"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                        </div>
                    </div>
                    <!-- Item -->
                    <!-- Item -->
                    <div class="ProductBlock2">
                        <div class="Content2">
                            <div class="img-fill2">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                            </div>

                            <h3>Block Title
                                <a href="#"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                        </div>
                    </div>
                    <!-- Item -->
                    <!-- Item -->
                    <div class="ProductBlock2">
                        <div class="Content2">
                            <div class="img-fill2">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                            </div>

                            <h3>Block Title
                                <a href="#"> <button class=" read-more-button text-center">Learn More</button></a>
                            </h3>
                        </div>
                    </div>
                    <!-- Item -->
                    <!-- Item -->
                    <div class="ProductBlock2">
                        <div class="Content2">
                            <div class="img-fill2">
                                <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                            </div>

                            <h3>Block Title
                                <a href="#"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                        </div>
                    </div> --}}
                    <!-- Item -->
               @endforeach
                </div>
                <!-- Carousel Container -->
            </div>
        </div>


    </div>

</div>
</div>

<div class="floatingButtonWrap">
    <div class="floatingButtonInner">
        <a href="#" class="floatingButton">
            <i class="fa fa-bars icon-default"></i>
        </a>
        <ul class="floatingMenu">
            <li><a href="#home">Home</a></li>

            <li><a href="#about-us">About</a>
            </li>
            <li><a href="#travel-support">Supports</a></li>

            <li><a href="#services">Services</a></li>
            <li><a href="#contact-us">Contact</a></li>
        </ul>
    </div>
</div>

<div class="row budget-row">
    <div class="col-xs-4 budget">
        <div class="budget-icon">
            <i class="fa fa-check-circle"></i>
        </div>

        <div>
            Lowest Budget Airline <span class="bold"></span>
            <br>
            <b>Fare Guarantee</b>

        </div>

    </div>
    <div class="col-xs-4 budget">
        <div class="budget-icon">
            <i class="fa fa-check-circle"></i>
        </div>

        <div>
            Easy Book In <span class="bold"></span>
            <br>
            <b>just 3 Steps</b>

        </div>

    </div>
    <div class="col-xs-4 budget">
        <div class="budget-icon">
            <i class="fa fa-check-circle"></i>
        </div>

        <div>
            24x365 Days
            <br>
            <b>Phone Assistance</b>

        </div>

    </div>
</div>
<br>
<div class="row ">

    <div class="col-md-12">
        <h1 class="text-center"><a class="underline">Latest Offers and Events</a></h1>

    </div>
</div>
@foreach (Bg() as $bg)
<div class="main-event" style="background: linear-gradient(rgb(132 178 184 / 39%),rgb(224 237 255 / 45%)), url('{{asset($bg->imagea)}}')">
    @endforeach
    <div class="row event-row">
        <div class="col-md-6">
            <section id="slider" class="container-event">
                <ul class="slider-wrapper">
                    @foreach (Events() as $event)
                    @if($event->order==1)
                        <li class="current-slide">
                            <img src="{{asset($event->image)}}" title="" alt="">

                            <div class="caption">
                                <h2 class="slider-title">{{$event->title}}</h2>
                                <p>{{$event->description}}</p>
                            </div>
                        </li>
                        @else
                        <li>
                            <img src="{{asset($event->image)}}" title="" alt="">

                            <div class="caption">
                                <h2 class="slider-title">{{$event->title}}</h2>
                                <p>{{$event->description}}</p>
                            </div>
                        </li>
                        @endif
                        @endforeach
                        {{-- <li>
                        <img src="{{asset('assets/images/event3.jpg')}}" title="" alt="">

                        <div class="caption">
                            <h2 class="slider-title">Identidad Corporativa</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dicta laudantium voluptatem minima! Dolorum tempore dolores excepturi omnis provident. Commodi quis aperiam maiores, dolore a perferendis!</p>
                        </div>
                        </li>

                        <li>
                            <img src="{{asset('assets/images/event1.jpg')}}" title="" alt="">

                            <div class="caption">
                                <h2 class="slider-title">Desarrollo Web</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dignissimos laudantium.</p>
                            </div>
                        </li> --}}
                </ul>
                <!-- Sombras -->
                <div class="slider-shadow"></div>

                <!-- Controles de Navegacion -->
                <ul id="control-buttons" class="control-buttons"></ul>
            </section>
        </div>

        <div class="col-md-6">
            <section id="slider2" class="container-event">
                <ul class="slider-wrapper2">
                    @foreach (Offer() as $offer)
                    @if($offer->order==1)
                        <li class="current-slide">
                            <img src="{{asset($offer->image)}}" title="" alt="">

                            <div class="caption">
                                <h2 class="slider-title">{{$offer->title}}</h2>
                                <p>{{$offer->description}}</p>
                            </div>
                        </li>
                        @else

                        <li>
                            <img src="{{asset($offer->image)}}" title="" alt="">

                            <div class="caption">
                                <h2 class="slider-title">{{$offer->title}}</h2>
                                <p>{{$offer->description}}</p>
                            </div>
                        </li>
                        @endif
                        @endforeach

                        {{-- <li>
                        <img src="{{asset('assets/images/event3.jpg')}}" title="" alt="">

                        <div class="caption">
                            <h2 class="slider-title">Identidad Corporativa</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dicta laudantium voluptatem minima! Dolorum tempore dolores excepturi omnis provident. Commodi quis aperiam maiores, dolore a perferendis!</p>
                        </div>
                        </li>

                        <li>
                            <img src="{{asset('assets/images/event1.jpg')}}" title="" alt="">

                            <div class="caption">
                                <h2 class="slider-title">Desarrollo Web</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dignissimos laudantium.</p>
                            </div>
                        </li> --}}
                </ul>
                <!-- Sombras -->
                <div class="slider-shadow"></div>

                <!-- Controles de Navegacion -->
                <ul id="control-buttons" class="control-buttons"></ul>
            </section>
        </div>
    </div>
</div>
<div class="row ">

    <div class="col-md-12">
        <h1 class="text-center"><a class="underline work">We are Working with</a></h1>

    </div>
</div>
<br><br>
<div class="workwith">
<div class="custom-slider">
     @foreach (CLient() as $client)


  <div class="custom-box">
       <a href="{{asset($client->link)}}">
      <img src="{{asset($client->image)}}">
</a>
  </div>
  @endforeach
  {{-- <div class="custom-box"> <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg"></div>
  <div class="custom-box">
        <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
  </div>
  <div class="custom-box"> <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg"></div>
  <div class="custom-box"> <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg"></div>
  <div class="custom-box"> <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg"></div>
  <div class="custom-box"> <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg"></div>
  <div class="custom-box"> <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg"></div>
  <div class="custom-box"> <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg"></div> --}}
</div>
</div>
<div id="about-us">
    {{-- <br>
    <br>
    <p>aaa</p> --}}
</div>

<div class="container about-container">

    <div class="row title-gap">
        <div class="col-md-12 ">
            <h1 class="text-center title top animated fadeIn" data-letters="About Us"><a class="underline"> About Us</a></h1>
        </div>
    </div>
</div>


<div class="container ">
    <div class="row ">

        <div class="col-md-6">
            <h3 class="text-center"> WELCOME TO BICOLPO TRAVELS</h3>
            <p class="about-text" align="center" class="font-family-alt letter-spacing-1 margin-3 no-margin-bottom no-margin-rl text-gray-light-2 xs-text-small text">Why do you need the services of a Travel Agency?</p>
            <p class="about-text" align="justify" class="font-family-alt letter-spacing-1 margin-3 no-margin-bottom no-margin-rl text-gray-light-2 xs-text-large text-extra-large text-titlecase">
                There are a number of choices, decisions and details involved in each and every trip you make. If you miss one detail it can cause your dream trip to turn into a disaster. As travel professionals, we have the expertise to take care of
                every aspect of your travel need.</p>

            <p class="about-text"> Here are some more reasons for you to choose BICOLPO TRAVELS:</p>

            <p class="about-text" align="justify">
                As your first resource in travel We offer the lowest fares anywhere. We search for the lowest fares through our Reservations system and guarantee the lowest fare for your journey.</p>
            <span id="text">
                <p class="about-text" align="justify">Stop searching the Internet and making a call for cheap fares. Call us and let us take care of all your needs with the reservations, fares, ticketing, seat assignments, itinerary changes and other
                    things that which would take a lot of your important time. As you are aware airlines change their fares continuously everyday and there is no way to guarantee a fare unless you book it. Also there are lists of rules for each and
                    every fare out there. Understanding these rules is very complex. we have experts who can take care of all that for you and take away your worries and stress.</p>

                <h3 class="text-left"> WHO WE ARE? </h3>
                <p class="about-text" align="justify">
                    BICOLPO TRAVELS was incorporated in 2009 in Bangladesh. The Company is one of the fast growing & profitable travel company in Bangladesh and our different think with online space driven by technology, better buying due to total
                    volume & forward cash flows. The Company is a leading distributor of transportation ticketing, accommodation reservation, packaged tours, corporate travel management, travel ancillaries, retail and financial services. BICOLPO
                    TRAVEL offers a comprehensive suite of travel & retail products and growing set of financial services products, provided by many suppliers on the different platform. <br>

                <p class="about-text" align="justify">Our Corporate Travel Management Business unit helps corporate clients effectively manage their travel needs and significantly reduce travel expenses.
                    Our Philosophy
                    Traveling is a very simple thing; there is no need to worry about it

                    We make selling very easy.
                    We started with the premise of selling travel, not necessarily under our brand, but to everyone through our partners, world class travel products and services in every neighborhood and deliver great customer service. We serve a
                    lot of customers that walk into our outlets every day that you can practically find in your neighborhood. We are the Inside Of the Travel World.
                    Dedicated customer support.
                    NO customer calls when all is well. We believe customer service starts with listening to the customer, owning what is wrong and then going out of your way to fix it. That's it, it does not mean, large call centers flooded with
                    hundreds of souls or jazzy 1-800 numbers. Just a simple email or SMS will do. We will call you back. We fundamentally believe most problems can be eliminated by design and the rest by listening.

                    We believe that the only way to succeed is to be the best and aim for being the best. We cultivate a culture where our people are groomed to be leaders in their work areas and create future leaders..

                    In a service business, we know that without dedicated, talented and thoughtful people, we cannot be the firm we aspire to be. Our principal assets are our people, capital and reputation. We are committed to maintaining a culture
                    of diversity, integrity and strong business principles.</p>
            </span>


            <button id="toggle" class=" read-more-button text-center">Read More</button>

        </div>
        @foreach (About() as $about)


        <div class="col-md-6">
            <img class="about-image" src="{{asset($about->image)}}" alt="Card image">
        </div>
        @endforeach
    </div>
</div>


<br><br><br>
<div id="travel-support">
    {{-- <br>
    <br>
    <p>aaa</p> --}}
</div>
<div class="row ">

    <div class="col-md-12 title-gap">
        <h1 class="text-center title top " data-letters="More Travel Supports"><a class="underline">More Travel Supports</a></h1>

    </div>
</div>
<br><br>
@foreach (Bg() as $bg)
<div class="parallax" style="background: linear-gradient(rgba(236, 240, 241,0.5),rgba(236, 240, 241,0.7)), url('{{asset($bg->imageb)}}')">
    @endforeach
    <div class="container services">

        <div class="row service-card-main-row ">
            <div id="travel-support">
                {{-- <br>
                <br>
                <p>aaa</p> --}}
            </div>
            {{-- <div class="col-md-6">
                <div class="card service-card">

                    <div class="card-body">
                        <h3 class="card-title text-center">Change Flights</h3>
                        <p class="card-text text-centertext-centertext-centertext-justify">If you have a flight ticket but for some reason you are unable to board your specific flight, we may reschedule your ticket. No matter where you
                            are flight from/to and which airlines.<br>
                        <p class="card-text text-centertext-centertext-centertext-right">** We can change flights to almost all places on almost all airlines.</p>
                        <button class="btn btn-primary text-center"><a href="">Change Flight</a></button>
                        </p>


                    </div>
                    <img class="card-img-bottom " src="{{asset('assets/images/service-travel1.png')}}" alt="Card image" style="width:100%">
        </div>
    </div> --}}
    @foreach (Support() as $support)
    @if($support->type==1)
        <div class="col-md-6">
            <div class="card service-card">

                <div class="card-body">
                    <h3 class="card-title text-center">{{$support->title}}</h3>

                    <p class="card-text text-center">{{$support->description}} <span id="text{{$support->order}}">{{$support->descriptionb}} <br></p>
                    </span>
                    <button id="toggle{{$support->order}}" class="btn btn-primary text-center">Read More</button>






                </div>
                <img class="card-img-bottom" src="{{asset($support->image)}}" alt="Card image">
            </div>
        </div>
        @else
        <div class="col-md-3">
            <div class="card service-card">

                <div class="card-body">
                    <h3 class="card-title text-center">{{$support->title}}</h3>

                    <p class="card-text text-center">{{$support->description}} <span id="text{{$support->order}}">{{$support->descriptionb}} <br></p>
                    </span>
                    <button id="toggle{{$support->order}}" class="btn btn-primary text-center">Read More</button>






                </div>
                <img class="card-img-bottom" src="{{asset($support->image)}}" alt="Card image">
            </div>
        </div>
        @endif

        @endforeach

</div>

</div>
</div>
<br><br><br><br>
<div id="employees">
    {{-- <br>
    <br>
    <p>aaa</p> --}}
</div>


<div class="row title-gap">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center title top" data-letters="Meet with Our Team"><a class="underline">Meet with Our Team</a></h1>

    </div>
</div>
<div class="container ">
    <div class="row title-gap">
        @foreach (team() as $team)
        <div class="col-md-4 col-sm-4">
            <div class="team">
                <div class="team-image">

                    <img src="{{asset($team->image)}}" class="img-circle img-responsive">


                </div><!-- /.team-image -->
                <div class="team-content">
                    <div class="team-name text-center"><a>
                            <h5>{{$team->name}}</h5>
                        </a></div>
                    <div class="team-role text-center">{{$team->job}}</div>

                </div><!-- /.team-content -->
            </div><!-- /.team -->
        </div>
        @endforeach

</div>
</div>
<br>

<div id="services">
    {{-- <br>
    <br>
    <p>aaa</p>
    <br> --}}
</div>
<div class="row service-main">
    <div class="row title-gap ">
        <div class="col-md-12">
            <h1 class="text-center title top" data-letters="Our Services"> <a class="underline">Our Services</a></h1>

        </div>

    </div><br>

    <div class="container service-main-container">
        <div class="row service-image-row">
            {{-- <div class="col-md-4"> --}}


            {{-- </div> --}}
            {{-- <div class="col-md-4"> --}}


            {{-- </div> --}}
            {{-- <div class="col-md-4"> --}}

            {{-- </div> --}}
        </div>

        <div class="row">
            @foreach (Service() as $service)
            <div class="col-md-4">
                <img class="service-main-image" src="{{asset($service->image)}}" alt="Los Angeles">
                <div class="box">
                    <div class="service-content">

                        <h2 class="text-center">{{$service->order}}</h2>
                        <h3 class="text-center">{{$service->title}}</h3><br>
                        <p>
                            {{$service->description}}
                        </p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <img class="service-main-image" src="{{asset('assets/images/creative-comunications.png')}}" alt="Los Angeles">
            <div class="box">
                <div class="service-content">
                    <h2 class="text-center">2</h2>
                    <h3 class="text-center">ICT Training</h3><br>
                    <p>
                        Now a days ICT Knowledge is the most important Think in Modern era. We Take Care about it. We Provide 6 & 3 Months Computer Training in Rural Area at very low cost.
                    </p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img class="service-main-image" src="{{asset('assets/images/electronic.jpg')}}" alt="New york">
            <div class="box">
                <div class="service-content">
                    <h2 class="text-center">3</h2>
                    <h3 class="text-center">Electronics</h3><br>
                    <p>
                        LET TV, CC CAMERA, Rice cooker, Electric Iron, Blender, Led Bulb, Electric Cattle, Computer Accessories like Toner, Keyboard, Mouse, Power Supply Etc.
                    </p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div> --}}
        @endforeach
    </div>
</div>
</div>

<div id="contact-us">
    {{-- <br>
    <br>
    <p>aaa</p>
    <br> --}}
</div>
@foreach (Bg() as $bg)
<div class="row contact" style="background: linear-gradient(rgba(255, 255, 255,.9),rgba(255, 255, 255,1.0)),url('{{asset($bg->imagec)}}');">
    @endforeach
    <div class="row title-gap">
        <div class="col-md-12">
            <h1 class="text-center title top" data-letters="Contact Us"><a class="underline"> Contact Us</a></h1>
        </div>
    </div>
    <div class="container contact-container">
        <div class="row">
            <div class="col-md-3">
                <div class="card-base">
                    <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><i class="glyphicon glyphicon-earphone"></i></span></a>
                        <div class="card-data widgetCardData">
                            <h4 class="box-title" style="color: #092562;">Contact Number</h4>
                            @foreach (Phone() as $phone)
                            <a>
                                <p class="card-block text-center"> {{$phone->number}}</p>
                            </a>
                            @endforeach


                            <a href="#" title="Style Builder" class="anchor btn btn-default" style="background: skyblue; border: #bb7824;"> <i class="fa fa-paper-plane" aria-hidden="true"></i>  Explore More </a>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-base">
                    <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><i class="glyphicon glyphicon-envelope" style="width:50px; height:auto;"></i></span></a>
                        <div class="card-data widgetCardData">
                            <h4 class="box-title" style="color: #092562;">Email</h4>
                            @foreach (Email() as $email)
                            <p class="card-block text-center"><a href="{{asset($email->number)}}">{{$email->number}}</a></p>
                            @endforeach

                            <a href="#" title="Style Builder" class="anchor btn btn-default" style="background: skyblue; border: #bb7824;"> <i class="fa fa-paper-plane" aria-hidden="true"></i>  Explore More </a>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-base">
                    <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><i class="fa fa-facebook"></i></a>
                        <div class="card-data widgetCardData">
                            <h4 class="box-title" style="color: #092562;">Facebook</h4>
                            @foreach (Fb() as $fb)
                            <p class="card-block text-center"><a href="{{asset($fb->number)}}">{{$fb->number}}</a></p>
                            @endforeach

                            <a href="#" title="Style Builder" class="anchor btn btn-default" style="background: skyblue; border: #bb7824;"> <i class="fa fa-paper-plane" aria-hidden="true"></i>  Explore More </a>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-base">
                    <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><i class="fa fa-skype"></i></a>
                        <div class="card-data widgetCardData">
                            <h4 class="box-title" style="color: #092562;">Skype</h4>
                            @foreach (Skype() as $skype)
                            <p class="card-block text-center"><a href="{{asset($skype->number)}}">{{$skype->number}}</a></p>
                            @endforeach
                            <a href="#" title="Style Builder" class="anchor btn btn-default" style="background: skyblue; border: #bb7824;"> <i class="fa fa-paper-plane" aria-hidden="true"></i>  Explore More </a>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="payment">
    <h2 class="text-center"> Payment Channels</h2>

    <img class="payment-image-big" src="{{asset('assets/images/payment-channel.png')}}" alt="Los Angeles" style="width:800px;height:auto;">


    <div class="row faq-row text-center">



        <a href="">About Us</a> | <a href=""> Privacy Policy </a> | <a href=""> Terms and Conditions </a> | <a href=""> Disclaimer Policy</a> | <a href=""> Payment and Refund Policy</a> |<a href=""> FAQ</a>
    </div>
</div>
<div class="custom-slider">



  <div class="custom-box">
      <iframe src="https://www.aviationnewsbd.com/%e0%a6%ac%e0%a6%9b%e0%a6%b0%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a5%e0%a6%ae%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%a7%e0%a7%87-%e0%a6%a8%e0%a6%b0%e0%a6%93%e0%a7%9f%e0%a7%87%e0%a6%9c%e0%a6%bf/" ></iframe>
</a>
  </div>
 </div>
<div class="footer">

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p>© {{date('Y')}} Bicolpo Computer. All rights reserved</p>
        </div>
        <!--left-->

        <div class="col-md-6 col-sm-6 col-xs-12 text-right ">
        </div>
        <!--right-->
    </div>
</div>


<!-- https://codepen.io/vilcu/pen/ZQwdGQ -->

@endsection
