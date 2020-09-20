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
                    <div class="banner-image">
                        <img src="{{asset($banner->image)}}" alt="Los Angeles" style="width:1682px;height:500px;">
                    </div>
                </div>
                @else
                <div class="item">
                    <div class="carousel-caption">
                        <h2 class="animated fadeInUp">{{$banner->title}}</h2>
                        <p>{{$banner->caption}}</p>
                    </div>
                    <div class="banner-image">
                        <img src="{{asset($banner->image)}}" alt="Los Angeles" style="width:1682px;height:500px;">
                    </div>
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
            <li href="#panel1" data-toggle="tab" class="col-sm-6 col-md-3 col-xs-6 "><i class="fa fa-plane" aria-hidden="true"></i>Search Flights</li>
            <li href="#panel4" data-toggle="tab" class="col-sm-6 col-md-3 col-xs-6 active"><i class="fa fa-ticket" aria-hidden="true"></i>Change Flight</li>
            <li href="#panel2" data-toggle="tab" class="col-sm-6 col-md-3 col-xs-6"><i class="fa fa-hotel" aria-hidden="true"></i>Hotel Booking</li>
            <li href="#panel3" onclick="RefreshSlider()" data-toggle="tab" class="col-sm-6 col-md-3 col-xs-6"><img src="/assets/images/umbrella beach.png" style="height:22px; width=auto;"> Holidays</li>

        </ul>

        <div class="tab-content clearfix">

        </div>

        <div id="panel1" class="col-xs-12 panel tab-pane">
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
        <div id="panel4" class="col-xs-12 panel tab-pane active" style="padding:0px!important;">
            <div class="change-caption">
                {{-- @foreach(Change() as $change)
                <div class="slides animated fadeInRight first">
                    <h3>{{$change->title}}</h3>
                <p>{{$change->caption}}</p>
            </div>
            @endforeach --}}

            {{-- <div class="slides animated fadeInRight"><h3>Be yourself 1</h3><p>pppppp2</p></div>
  <div class="slides animated fadeInRight"><h3>Be yourself  2</h3><p>pppppp3</p></div> --}}
            <div id="myCarousel" class="carousel" data-ride="carousel" data-interval="8000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach(Change() as $change)
                    @if($change->order==1)
                        <div class="item active ">
                            <div class="animated fadeInRight">
                                <h3>{{$change->title}}</h3>
                                <p>{{$change->caption}}</p>
                            </div>


                        </div>
                        @else
                        <div class="item  ">
                            <div class="animated fadeInRight">
                                <h3>{{$change->title}}</h3>
                                <p>{{$change->caption}}</p>
                            </div>


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

        </div>
    </div>

    <div class="change-button">
        <a href="#" style="font-size:18px;"> Learn More</a>

        <a href="#" style="" class="btn animated-button1" data-toggle="modal" data-target=".bd-example-modal-lg">

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Change Now
        </a>
    </div>
    @foreach(Changei() as $changei)
    <div class="change-flight">
        <img class="change-flight" src="{{asset($changei->image)}}" alt="Chicago" style="width:1132px;height:400px;">
    </div>
    @endforeach
</div>
<div id="panel2" class="col-xs-12 panel tab-pane">
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
<div id="panel3" class="col-xs-12 panel  tab-pane">
    <div class="loading"></div>
    <div class="Container ">


        <h3 class="Head"><strong>Domestic Packages</strong><span class="Arrows"></h3>
        <!-- Carousel Container -->
        <div class="custom-slider2">
            @foreach (Dompack() as $dompack)


            <div class="ProductBlock">
                <div class="Content">

                    <div class="img-fill" onload="myFunction()">

                        <img src="{{asset($dompack->image)}}" alt="assets/images/loader.gif">
                    </div>
                    <h3>{{$dompack->title}}
                        <a href="{{asset($dompack->link)}}"> <button class=" read-more-button text-center">Learn More</button></a></h3>
                </div>
            </div>
            @endforeach

        </div>

        <!-- Carousel Container -->
    </div>
    <div class="Container2">
        <h3 class="Head2"><strong>International Packages</strong> <span class="Arrows2"></span></h3>
        <!-- Carousel Container -->
        <div class="custom-slider3 ">
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
        <h1 class="text-center"><a class="underline">Latest News</a></h1>

    </div>
</div>
<br>
<div class="container">
    <div class="row news">
        <div class="news-list">
            @php
            $serial=0;
            @endphp
            @foreach (News() as $news)
            @php
            $serial++;
            // Assuming the above tags are at www.example.com
            // $tags = get_meta_tags('');



            @endphp


            <div class="newz">
                <div class="col-lg-4 ">
                    <div class="ProductBlock">
                        <section class="Content">
                            <a href="/news/{{$news->id}}" target="_blank">
                                <h3>
                                    <div class="img-fill" onload="myFunction()">

                                        <img src="{{asset($news->image)}}" alt="assets/images/loader.gif">
                                    </div>

                                    <strong> {{ Illuminate\Support\Str::limit($news->title, 90) }}</strong>
                                </h3>
                            </a>
                        </section>
                    </div>

                </div>
            </div>
            @endforeach


            {{-- @foreach (News() as $news)
@if($news->active==2)
    <span id="text0">

        <div class="col-lg-4 ">
            <div class="ProductBlock">
                <div class="Content">
                    <a href="{{asset($news->link)}}">
            <h3>
                <div class="img-fill" onload="myFunction()">

                    <img src="{{asset($news->image)}}" alt="assets/images/loader.gif">
                </div>

                <strong>{{$title}}</strong>
            </h3>
            </a>
        </div>
    </div>

</div>
</span>
@endif
@endforeach --}}

</div>

</div>
@if ($serial>3)

<br>
<button class="read-more-button2" onclick="LoadMore()" style="margin:0px auto; display:table;">View More</button>

@endif
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
                There are a number of choices, decisions and details involved in each and every trip you make. If you miss one detail it can cause your dream trip to turn into a disaster. As travel professionals, we have the expertise to take
                care of
                every aspect of your travel need.</p>

            <p class="about-text"> Here are some more reasons for you to choose BICOLPO TRAVELS:</p>

            <p class="about-text" align="justify">
                As your first resource in travel We offer the lowest fares anywhere. We search for the lowest fares through our Reservations system and guarantee the lowest fare for your journey.</p>
            <span id="text">
                <p class="about-text" align="justify">Stop searching the Internet and making a call for cheap fares. Call us and let us take care of all your needs with the reservations, fares, ticketing, seat assignments, itinerary changes and
                    other
                    things that which would take a lot of your important time. As you are aware airlines change their fares continuously everyday and there is no way to guarantee a fare unless you book it. Also there are lists of rules for each
                    and
                    every fare out there. Understanding these rules is very complex. we have experts who can take care of all that for you and take away your worries and stress.</p>

                <h3 class="text-left"> WHO WE ARE? </h3>
                <p class="about-text" align="justify">
                    BICOLPO TRAVELS was incorporated in 2009 in Bangladesh. The Company is one of the fast growing & profitable travel company in Bangladesh and our different think with online space driven by technology, better buying due to
                    total
                    volume & forward cash flows. The Company is a leading distributor of transportation ticketing, accommodation reservation, packaged tours, corporate travel management, travel ancillaries, retail and financial services. BICOLPO
                    TRAVEL offers a comprehensive suite of travel & retail products and growing set of financial services products, provided by many suppliers on the different platform. <br>

                <p class="about-text" align="justify">Our Corporate Travel Management Business unit helps corporate clients effectively manage their travel needs and significantly reduce travel expenses.
                    Our Philosophy
                    Traveling is a very simple thing; there is no need to worry about it

                    We make selling very easy.
                    We started with the premise of selling travel, not necessarily under our brand, but to everyone through our partners, world class travel products and services in every neighborhood and deliver great customer service. We serve
                    a
                    lot of customers that walk into our outlets every day that you can practically find in your neighborhood. We are the Inside Of the Travel World.
                    Dedicated customer support.
                    NO customer calls when all is well. We believe customer service starts with listening to the customer, owning what is wrong and then going out of your way to fix it. That's it, it does not mean, large call centers flooded with
                    hundreds of souls or jazzy 1-800 numbers. Just a simple email or SMS will do. We will call you back. We fundamentally believe most problems can be eliminated by design and the rest by listening.

                    We believe that the only way to succeed is to be the best and aim for being the best. We cultivate a culture where our people are groomed to be leaders in their work areas and create future leaders..

                    In a service business, we know that without dedicated, talented and thoughtful people, we cannot be the firm we aspire to be. Our principal assets are our people, capital and reputation. We are committed to maintaining a
                    culture
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
                    <button id="toggle{{$support->order}}" onclick="ReadMore({{$support->order}})" class="btn btn-primary text-center">Read More</button>






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
                    <button id="toggle{{$support->order}}" onclick="ReadMore({{$support->order}})" class="btn btn-primary text-center">Read More</button>






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
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size:50px;">&times;</span>
                </button>
                <img src="{{asset('assets/images/plane.gif')}}" style="height:200px; width:auto;">
                <h5 class="modal-title text-center" id="exampleModalLabel">! THANK YOU FOR CHOOSING US !<br>
                    Change your Ticket with easy 04 steps
                </h5><br>

                <p class="text-center">Currently for any kind of changes send us your Ticket, Passport and Visa copy with expected Date at below emails. . </p>
                <div class="modal-mail">
                    <a href="mailto:sales@bicolpotravels.com" class="text-center">sales@bicolpotravels.com</a><br>
                        <span class="text-center">or </span><br>
                        <a href="mailto:bcbd14<blade gmail.com" class="text-center">bcbd14@gmail.com</a> />
                </div>
            </div>
            <div class="modal-body">
                <div id="main-container">
                    <dl>
                        <dt class="done-item"></dt>
                        <dd class="done-item-text">
                            <h2>Step 1</h2>
                            <p>Attach your ticket, passport and visa on email, mention expected Date on email subject field, then send it to above email address.
                            </p>
                        </dd>
                        <dt class="done-item"></dt>
                        <dd class="done-item-text">
                            <h2>Step 2</h2>
                            <p>Within 01 to 24 hours you will get replay of your email with available possible date and exact Fare how much you have to pay.</p>
                        </dd>
                        <dt class="done-item"></dt>
                        <dd class="done-item-text">
                            <h2>Step 3</h2>
                            <p>If you Agree with Date and Fares Just replay on the same email as like ”I am Agree Please Confirm ……Date”,
                            </p>
                        </dd>
                        <dt class="done-item"></dt>
                        <dd class="done-item-text">
                            <h2>Step 4</h2>
                            <p>If Balance available on your ledger you will get reissuance within few min/hours. If not available balance we will send a link for payment, after successful payment you will get your service on the same
                                email.
                                <br>
                                <br>Any further Assistance don’t hesitate to call us
                                @ +8801718128917, Whatsapp: +8801718128917, also can contact with chat option on our website</p>
                        </dd>
                </div>

                </dd>
                </dl>
            </div>

            <div class="modal-footer">
                <div class="modal-icon float-left">
                    <a href="https://www.facebook.com/bicolpotravels" class="fa fa-facebook"></a>
                    <a href="https://join.skype.com/invite/P6q9ig1G7KaR" class="fa fa-skype"></a>
                    <a href="mailto:sales@bicolpotravels.com" class="fa fa-envelope"></a>

                </div>
                <button data-dismiss="modal" aria-label="Close" class=" btn btn-default">Close</button>

            </div>
        </div>
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
<div id="fb-root"></div>


<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution=setup_tool page_id="231458127041599">
</div>

<!-- https://codepen.io/vilcu/pen/ZQwdGQ -->

@endsection

@section('js')



<script>
    var count = 0;

    function RefreshSlider() {

        if (count < 1) {


            $('.custom-slider2').slick({
                slidesToShow: 3,
                appendArrows: $(".Container .Head .Arrows"),

                // Class For Arrows Buttons
                prevArrow: '<span class="Slick-Prev"></span>',
                nextArrow: '<span class="Slick-Next"></span>',

                easing: "linear",
                slidesToScroll: 3,
                infinite: true,
                autoplay: true,

                autoplaySpeed: 4000,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 350,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },


                ]
            });
            $('.custom-slider3').slick({
                slidesToShow: 3,
                appendArrows: $(".Container2 .Head2 .Arrows2"),
                // Class For Arrows Buttons
                prevArrow: '<span class="Slick-Prev2"></span>',
                nextArrow: '<span class="Slick-Next2"></span>',
                easing: "linear",
                slidesToScroll: 3,
                infinite: true,
                autoplay: true,

                autoplaySpeed: 4000,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 350,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },


                ]
            });

            count = count + 1;

        }
    }
</script>
<script>
    function LoadMore() {
        var elem = $(".read-more-button2").text();
        if (elem == "View More") {
            //Stuff to do when btn is in the read more state
            $(".read-more-button2").text("View Less");

        } else {
            //Stuff to do when btn is in the read less state
            $(".read-more-button2").text("View More");

        }

        $('.news-list').toggleClass('view-more');

        var class_name = $('.news-list').attr('class');

        if (class_name == '.news-list') {

            $('.read-more-button2').html("View  More");

        } else {

            $('read-more-button2').html("View  Less");

        }

    }
</script>
@endsection
