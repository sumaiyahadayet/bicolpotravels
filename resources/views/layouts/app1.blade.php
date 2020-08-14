<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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
                <div class="login-small">

                    <a href="#"><button type="button" class="btn btn-primary">Register</button></a>
                     <a href="#"><button type="button" class="btn btn-default">Login</button></a>
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
                <ul class="nav navbar-nav navbar-right">

        <a href="#"><button type="button" class="btn btn-primary">Register</button></a>
        <a href="#"><button type="button" class="btn btn-default">Login</button></a>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

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

           },{
                offset: '70%'
           }
       )
        });
        $(document).ready(function() {
            $('service-main-image').waypoint(function(direction) {
                $('service-main-image').addClass('animated zoomIn')

           },{
                offset: '70%'
           }
       )
        });
        $(document).ready(function() {
            $('.about-image').waypoint(function(direction) {
                $('.about-image').addClass('animated zoomIn')

           },{
                offset: '70%'
           }
       )
        });
        $(document).ready(function() {
            $('.team').waypoint(function(direction) {
                $('.team').addClass('animated zoomIn')

           },{
                offset: '70%'
           }
       )
        });
        $(document).ready(function() {
            $('.box').waypoint(function(direction) {
                $('.box').addClass('animated zoomIn')

           },{
                offset: '70%'
           }
       )
        });
        $(document).ready(function() {
            $('.card-base').waypoint(function(direction) {
                $('.card-base').addClass('animated zoomIn')

           },{
                offset: '70%'
           }
       )
        });

        $(document).ready(function() {
            $('.item .active').waypoint(function(direction) {
               $('.item .active').addClass('animated zoomIn')

          },{
               offset: '70%'
          }
       )
        });
        $(document).ready(function() {
            $('#slider').waypoint(function(direction) {
               $('#slider').addClass('animated zoomIn')

          },{
               offset: '70%'
          }
       )
        });
        $(document).ready(function() {
            $('#slider2').waypoint(function(direction) {
               $('#slider2').addClass('animated zoomIn')

          },{
               offset: '70%'
          }
       )
        });
        $(document).ready(function() {
            $('.service-card').waypoint(function(direction) {
                $('.service-card').addClass('animated zoomIn')

           },{
                offset: '70%'
           }
       )
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
$(document).ready(function(){
        $('.floatingButton').on('click',
            function(e){
                e.preventDefault();
                $(this).toggleClass('open');
                if($(this).children('.fa').hasClass('fa-plus'))
                {
                    $(this).children('.fa').removeClass('fa-plus');
                    $(this).children('.fa').addClass('fa-close');
                }
                else if ($(this).children('.fa').hasClass('fa-close'))
                {
                    $(this).children('.fa').removeClass('fa-close');
                    $(this).children('.fa').addClass('fa-plus');
                }
                $('.floatingMenu').stop().slideToggle();
            }
        );
        $(this).on('click', function(e) {
            var container = $(".floatingButton");

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0)
            {
                if(container.hasClass('open'))
                {
                    container.removeClass('open');
                }
                if (container.children('.fa').hasClass('fa-close'))
                {
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
	 		this.settings = settings || {duration: 8000};
	 		var items = this.items,
	 			lengthPanels = items.panels.length,
	 			output = '';

	 		// Insertamos nuestros botones
	 		for(var i = 0; i < lengthPanels; i++) {
	 			if(i == 0) {
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
	 			if(!(currentSlider === $this.index())) {
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
	 		if(nextSlider >= lengthSlider) {
	 			nextSlider = 0;
	 			currentSlider = lengthSlider-1;
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
	 		if(id >= lengthSlider) {
	 			id = 0;
	 		} else if(id < 0) {
	 			id = lengthSlider-1;
	 		}

	 		controls.removeClass('active').eq(id).addClass('active');
	 		items.panels.eq(currentSlider).fadeOut('slow');
	 		items.panels.eq(id).fadeIn('slow');

	 		// Volvemos a actualizar los datos del slider
	 		currentSlider = id;
	 		nextSlider = id+1;
	 		// Reactivamos nuestro slider
	 		activateSlider();
	 	}

		return pb;
	 }());

	 SliderModule.init({duration: 4000});

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
	 		this.settings = settings || {duration: 8000};
	 		var items = this.items,
	 			lengthPanels = items.panels.length,
	 			output = '';

	 		// Insertamos nuestros botones
	 		for(var i = 0; i < lengthPanels; i++) {
	 			if(i == 0) {
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
	 			if(!(currentSlider === $this.index())) {
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
	 		if(nextSlider >= lengthSlider) {
	 			nextSlider = 0;
	 			currentSlider = lengthSlider-1;
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
	 		if(id >= lengthSlider) {
	 			id = 0;
	 		} else if(id < 0) {
	 			id = lengthSlider-1;
	 		}

	 		controls.removeClass('active').eq(id).addClass('active');
	 		items.panels.eq(currentSlider).fadeOut('slow');
	 		items.panels.eq(id).fadeIn('slow');

	 		// Volvemos a actualizar los datos del slider
	 		currentSlider = id;
	 		nextSlider = id+1;
	 		// Reactivamos nuestro slider
	 		activateSlider();
	 	}

		return pb;
	 }());

	 SliderModule.init({duration: 5000});

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
