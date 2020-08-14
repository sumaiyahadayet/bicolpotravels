<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173955707-1"></script>
     <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());

       gtag('config', 'UA-173955707-1');
     </script> --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173945284-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-173945284-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

    <!-- CSRF Token -->

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    @yield('meta')

    <title>Bicolpo Travels | A Different Feel</title>
    <link rel="icon" href="{{asset('assets/images/title-logo.png')}}" type="image/icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">


    @yield('css')
</head>

<body>

    <div id="particles-js">
    </div>
    <div id="app">
        {{-- <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                    <img src="{{asset('assets/images/bicolpo logo transparent.png')}}" alt="Avatar" class="logo">
    </div>
    <div class="nav-bar-container">
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul class="nav navbar-nav">
                <li id="menu-item" class="active-list"><a href="#home">Home</a></li>

                <li id="menu-item"><a href="#about-us">About Us</a>
                </li>
                <li id="menu-item"><a href="#travel-support">Travel Supports</a></li>
                <li id="menu-item"><a href="#employees">Employees</a></li>
                <li id="menu-item"><a href="#testimonial">Testimonials</a></li>
                <li id="menu-item"><a href="#services">Services</a></li>
                <li id="menu-item"><a href="#contact-us">Contact Us</a></li>



            </ul>
        </div>


    </div>
    </div>
    </nav> --}}


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="
    margin-bottom: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{asset('assets/images/bicolpo-logo-transparent.png')}}" alt="Avatar" style="height:55px;width:auto">
                </a>
                <div class="login-small login-small-2">

                                         <a href="#"><button type="button" class="btn btn-primary">Register</button></a>
                                          <a href="#"><button type="button" class="btn btn-default">Login</button></a>
                    {{-- @guest
                    <a href="{{ route('login') }}"></a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"></a>
                    @endif
                    @else

                    <button type="button" class="btn ">
                        <a href="{{ route('logout') }}" class="no-underline hover:underline text-gray-300 text-sm p-3 float-right" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" style="
    float: right;
    padding: 0px; "></a>

                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>

                    <span class="auth-name " style="
                         float: right;
                         "></span>
                </div>
                @endguest --}}
            </div>
        </div>
        <div id="navbar1" class="navbar-collapse collapse">
            <div class="col-xs-2"></div>
            <ul class="nav navbar-nav">
                <li id="menu-item" class="active-list"><a href="#home">Home</a></li>

                <li id="menu-item"><a href="#about-us">About</a>
                </li>
                <li id="menu-item"><a href="#travel-support">Supports</a></li>

                <li id="menu-item"><a href="#services">Services</a></li>
                <li id="menu-item"><a href="#contact-us">Contact</a></li>

            </ul>
            <div id="menu">
            @guest

            <a href="{{ route('login') }}"><button type="button" class="btn bt-default"></button></a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}"></a>

            @endif
            @else



               <a href="{{ route('logout') }}" class="no-underline hover:underline text-gray-300 text-sm p-3" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" ><button type="button" class="btn btn-default"style="cursor:pointer!important;">
          </button></a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                   {{ csrf_field() }}
               </form>

       @endguest</div>
            <ul class="nav navbar-nav navbar-right">
                 <span class="login2">
                 <a href="#"><button type="button" class="btn btn-primary">Register</button></a>
                 <a href="#"><button type="button" class="btn btn-default">Login</button></a>
            </span>

            </ul>
        </div>


        <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>

    {{-- <main class="py-4"> --}}
    @yield('content')
    {{-- </main> --}}

    </div>


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript">
        $(document).on('click', 'ul li', function() {
            $(this).addClass('active-list').siblings().removeClass('active-list')
        })
    </script>

    <script>
        //  $(document).ready(function() {
        //      $('.about-container').waypoint(function(direction) {
        //          $('.about-container').addClass('animated zoomIn')
        //
        //     },{
        //          offset: '600px'
        //     }
        // )
        //  });
        $(document).ready(function() {
            $('.about-text').waypoint(function(direction) {
                $('.about-text').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('service-main-image').waypoint(function(direction) {
                $('service-main-image').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('.about-image').waypoint(function(direction) {
                $('.about-image').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('.team').waypoint(function(direction) {
                $('.team').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('.box').waypoint(function(direction) {
                $('.box').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('.card-base').waypoint(function(direction) {
                $('.card-base').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });

        $(document).ready(function() {
            $('.item .active').waypoint(function(direction) {
                $('.item .active').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('#slider').waypoint(function(direction) {
                $('#slider').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('#slider2').waypoint(function(direction) {
                $('#slider2').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
        $(document).ready(function() {
            $('.service-card').waypoint(function(direction) {
                $('.service-card').addClass('animated zoomIn')

            }, {
                offset: '70%'
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle2").click(function() {
                var elem = $("#toggle2").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle2").text("Read Less");
                    $("#text2").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle2").text("Read More");
                    $("#text2").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle3").click(function() {
                var elem = $("#toggle3").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle3").text("Read Less");
                    $("#text3").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle3").text("Read More");
                    $("#text3").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle1").click(function() {
                var elem = $("#toggle1").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle1").text("Read Less");
                    $("#text1").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle1").text("Read More");
                    $("#text1").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle4").click(function() {
                var elem = $("#toggle4").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle4").text("Read Less");
                    $("#text4").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle4").text("Read More");
                    $("#text4").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle5").click(function() {
                var elem = $("#toggle5").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle5").text("Read Less");
                    $("#text5").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle5").text("Read More");
                    $("#text5").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle6").click(function() {
                var elem = $("#toggle6").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle6").text("Read Less");
                    $("#text6").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle6").text("Read More");
                    $("#text6").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle8").click(function() {
                var elem = $("#toggle8").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle8").text("Read Less");
                    $("#text8").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle8").text("Read More");
                    $("#text8").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle7").click(function() {
                var elem = $("#toggle7").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle7").text("Read Less");
                    $("#text7").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle7").text("Read More");
                    $("#text7").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggle9").click(function() {
                var elem = $("#toggle9").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle9").text("Read Less");
                    $("#text9").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle9").text("Read More");
                    $("#text9").slideUp();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#toggle").click(function() {
                var elem = $("#toggle").text();
                if (elem == "Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle").text("Read Less");
                    $("#text").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle").text("Read More");
                    $("#text").slideUp();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.floatingButton').on('click',
                function(e) {
                    e.preventDefault();
                    $(this).toggleClass('open');
                    if ($(this).children('.fa').hasClass('fa-plus')) {
                        $(this).children('.fa').removeClass('fa-plus');
                        $(this).children('.fa').addClass('fa-close');
                    } else if ($(this).children('.fa').hasClass('fa-close')) {
                        $(this).children('.fa').removeClass('fa-close');
                        $(this).children('.fa').addClass('fa-plus');
                    }
                    $('.floatingMenu').stop().slideToggle();
                }
            );
            $(this).on('click', function(e) {
                var container = $(".floatingButton");

                // if the target of the click isn't the container nor a descendant of the container
                if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0) {
                    if (container.hasClass('open')) {
                        container.removeClass('open');
                    }
                    if (container.children('.fa').hasClass('fa-close')) {
                        container.children('.fa').removeClass('fa-close');
                        container.children('.fa').addClass('fa-plus');
                    }
                    $('.floatingMenu').hide();
                }
            });
        });
        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 100) {
                $('.floatingButtonWrap').fadeIn();
            } else {
                $('.floatingButtonWrap').fadeOut();
            }
        });
    </script>
    <script>
        $(".tab-panels .tabs li").on("click", function() {
            //this is done for scalability in case we want to add another div.tabs-panels
            var $panel = $(this).closest(".tab-panels");
            $panel.find(".tabs li.active").removeClass("active");
            $(this).addClass("active");
            //Figure out which panel to show
            var panelToShow = $(this).attr("rel");
            //hide current panel
            $panel.find(".panel.active").toggle(0, showNextPanel);

            function showNextPanel() {
                $(this).removeClass("active");
                //show new panel
                $("#" + panelToShow).toggle(0, function() {
                    $(this).addClass("active");
                });
            }
            $(document).ready(function() {
                $(".SlickCarousel").not('.slick-initialized').slick({
                    rtl: false, // If RTL Make it true & .slick-slide{float:right;}
                    autoplay: true,
                    autoplaySpeed: 5000, //  Slide Delay
                    speed: 500, // Transition Speed
                    slidesToShow: 3, // Number Of Carousel
                    slidesToScroll: 3, // Slide To Move
                    pauseOnHover: false,
                    appendArrows: $(".Container .Head .Arrows"), // Class For Arrows Buttons
                    prevArrow: '<span class="Slick-Prev"></span>',
                    nextArrow: '<span class="Slick-Next"></span>',
                    easing: "linear",
                    responsive: [{
                        breakpoint: 801,
                        settings: {
                            autoplay: true,
                            autoplaySpeed: 5000, //  Slide Delay
                            speed: 500,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 641,
                        settings: {
                            autoplay: true,
                            autoplaySpeed: 5000, //  Slide Delay
                            speed: 500,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 481,
                        settings: {
                            autoplay: true,
                            autoplaySpeed: 5000, //  Slide Delay
                            speed: 500,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }, ],
                })
            });
            $(document).ready(function() {
                $(".SlickCarousel2").not('.slick-initialized').slick({
                    rtl: false, // If RTL Make it true & .slick-slide{float:right;}
                    autoplay: true,
                    autoplaySpeed: 6000, //  Slide Delay
                    speed: 500, // Transition Speed
                    slidesToShow: 3, // Number Of Carousel
                    slidesToScroll: 3, // Slide To Move
                    pauseOnHover: false,
                    appendArrows: $(".Container2 .Head2 .Arrows2"), // Class For Arrows Buttons
                    prevArrow: '<span class="Slick-Prev2"></span>',
                    nextArrow: '<span class="Slick-Next2"></span>',
                    easing: "linear",
                    responsive: [{
                        breakpoint: 801,
                        settings: {
                            autoplay: true,
                            autoplaySpeed: 6000, //  Slide Delay
                            speed: 500,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 641,
                        settings: {
                            autoplay: true,
                            autoplaySpeed: 6000, //  Slide Delay
                            speed: 500,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 481,
                        settings: {
                            autoplay: true,
                            autoplaySpeed: 6000, //  Slide Delay
                            speed: 500,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }, ],
                })
            });
        });
    </script>
    <script>
    $('.custom-slider').not('.slick-initialized').slick({
  slidesToShow: 5,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 2000,
 responsive: [
    {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
    {
        breakpoint: 900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
         breakpoint: 600,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 1,
           infinite: true,
           dots: false
         }
       },
    {
        breakpoint: 350,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
   },
   // {
   //       breakpoint: 400,
   //       settings: {
   //         slidesToShow: 1,
   //         slidesToScroll: 1,
   //         infinite: true,
   //         dots: false
   //       }
   //     }

    ]
});
</script>
    <script>
        $(function() {
            /** -----------------------------------------
             * Modulo del Slider
             -------------------------------------------*/
            var SliderModule = (function() {
                var pb = {};
                pb.el = $('#slider');
                pb.items = {
                    panels: pb.el.find('.slider-wrapper > li'),
                }

                // Interval del Slider
                var SliderInterval,
                    currentSlider = 0,
                    nextSlider = 1,
                    lengthSlider = pb.items.panels.length;

                // Constructor del Slider
                pb.init = function(settings) {
                    this.settings = settings || {
                        duration: 9000
                    };
                    var items = this.items,
                        lengthPanels = items.panels.length,
                        output = '';

                    // Insertamos nuestros botones
                    for (var i = 0; i < lengthPanels; i++) {
                        if (i == 0) {
                            output += '<li class="active"></li>';
                        } else {
                            output += '<li></li>';
                        }
                    }

                    $('#control-buttons').html(output);

                    // Activamos nuestro Slider
                    activateSlider();
                    // Eventos para los controles
                    $('#control-buttons').on('click', 'li', function(e) {
                        var $this = $(this);
                        if (!(currentSlider === $this.index())) {
                            changePanel($this.index());
                        }
                    });

                }

                // Funcion para activar el Slider
                var activateSlider = function() {
                    SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
                }

                // Funcion para la Animacion
                pb.startSlider = function() {
                    var items = pb.items,
                        controls = $('#control-buttons li');
                    // Comprobamos si es el ultimo panel para reiniciar el conteo
                    if (nextSlider >= lengthSlider) {
                        nextSlider = 0;
                        currentSlider = lengthSlider - 1;
                    }

                    controls.removeClass('active').eq(nextSlider).addClass('active');
                    items.panels.eq(currentSlider).fadeOut('slow');
                    items.panels.eq(nextSlider).fadeIn('slow');

                    // Actualizamos los datos del slider
                    currentSlider = nextSlider;
                    nextSlider += 1;
                }

                // Funcion para Cambiar de Panel con Los Controles
                var changePanel = function(id) {
                    clearInterval(SliderInterval);
                    var items = pb.items,
                        controls = $('#control-buttons li');
                    // Comprobamos si el ID esta disponible entre los paneles
                    if (id >= lengthSlider) {
                        id = 0;
                    } else if (id < 0) {
                        id = lengthSlider - 1;
                    }

                    controls.removeClass('active').eq(id).addClass('active');
                    items.panels.eq(currentSlider).fadeOut('slow');
                    items.panels.eq(id).fadeIn('slow');

                    // Volvemos a actualizar los datos del slider
                    currentSlider = id;
                    nextSlider = id + 1;
                    // Reactivamos nuestro slider
                    activateSlider();
                }

                return pb;
            }());

            SliderModule.init({
                duration: 9000
            });

        });
    </script>
    <script>
        $(function() {
            /** -----------------------------------------
             * Modulo del Slider
             -------------------------------------------*/
            var SliderModule = (function() {
                var pb = {};
                pb.el = $('#slider2');
                pb.items = {
                    panels: pb.el.find('.slider-wrapper2 > li'),
                }

                // Interval del Slider
                var SliderInterval,
                    currentSlider = 0,
                    nextSlider = 1,
                    lengthSlider = pb.items.panels.length;

                // Constructor del Slider
                pb.init = function(settings) {
                    this.settings = settings || {
                        duration: 10000
                    };
                    var items = this.items,
                        lengthPanels = items.panels.length,
                        output = '';

                    // Insertamos nuestros botones
                    for (var i = 0; i < lengthPanels; i++) {
                        if (i == 0) {
                            output += '<li class="active"></li>';
                        } else {
                            output += '<li></li>';
                        }
                    }

                    $('#control-buttons').html(output);

                    // Activamos nuestro Slider
                    activateSlider();
                    // Eventos para los controles
                    $('#control-buttons').on('click', 'li', function(e) {
                        var $this = $(this);
                        if (!(currentSlider === $this.index())) {
                            changePanel($this.index());
                        }
                    });

                }

                // Funcion para activar el Slider
                var activateSlider = function() {
                    SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
                }

                // Funcion para la Animacion
                pb.startSlider = function() {
                    var items = pb.items,
                        controls = $('#control-buttons2 li');
                    // Comprobamos si es el ultimo panel para reiniciar el conteo
                    if (nextSlider >= lengthSlider) {
                        nextSlider = 0;
                        currentSlider = lengthSlider - 1;
                    }

                    controls.removeClass('active').eq(nextSlider).addClass('active');
                    items.panels.eq(currentSlider).fadeOut('slow');
                    items.panels.eq(nextSlider).fadeIn('slow');

                    // Actualizamos los datos del slider
                    currentSlider = nextSlider;
                    nextSlider += 1;
                }

                // Funcion para Cambiar de Panel con Los Controles
                var changePanel = function(id) {
                    clearInterval(SliderInterval);
                    var items = pb.items,
                        controls = $('#control-buttons li');
                    // Comprobamos si el ID esta disponible entre los paneles
                    if (id >= lengthSlider) {
                        id = 0;
                    } else if (id < 0) {
                        id = lengthSlider - 1;
                    }

                    controls.removeClass('active').eq(id).addClass('active');
                    items.panels.eq(currentSlider).fadeOut('slow');
                    items.panels.eq(id).fadeIn('slow');

                    // Volvemos a actualizar los datos del slider
                    currentSlider = id;
                    nextSlider = id + 1;
                    // Reactivamos nuestro slider
                    activateSlider();
                }

                return pb;
            }());

            SliderModule.init({
                duration: 7000
            });

        });
    </script>

    {{-- <script>
               $(document).ready(function(){

                  $("#testimonial-slider").owlCarousel({
                       items:2,
                       itemsDesktop:[1000,2],
                       itemsDesktopSmall:[990,2],
                       itemsTablet:[768,1],
                       pagination:true,
                       navigation:false,
                       navigationText:["",""],
                       slideSpeed:1000,
                       autoPlay:true
                  });



               });
           </script> --}}

    @yield('js')
</body>

</html>
