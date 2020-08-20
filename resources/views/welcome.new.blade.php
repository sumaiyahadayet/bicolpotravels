@extends('layouts.app')

@section('css')
@endsection

@section('meta')





@endsection

@section('content')

     <div id="panel3" class="col-xs-12 panel">
            <div class="loading"></div>
         <div class="Container animated zoomIn" >


             <h3 class="Head"><strong>Domestic Packages</strong> <span class="Arrows"></span></h3>
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

     </div>


@endsection

@section('js')

     <script>


     $('.custom-slider2').slick({
       slidesToShow: 3,
        infinite: true,
       autoplay: true,
       autoplaySpeed: 4000,
       responsive: [{
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
     </script>

@endsection
