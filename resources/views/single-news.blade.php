<!DOCTYPE html>
<html>

<head>
    <title>{{$news->title}}</title>
    <link rel="icon" href="{{asset('assets/images/title-logo.png')}}" type="image/icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    body {
        background-color: #f0f0f0;
    }
</style>

<body>


        <div class="container single-news">

            <div class="row object-center">

                <div class="col-md-7">

                    <h3>{{$news->title}}</h3>
                    <br>
                    <p>Published : {{date("j F Y, g:i A ",strtotime($news->created_at))}}</p>
                    <a href="/"><i class="fa fa-home float-right" aria-hidden="true"></i></a><br>

                    <img src="{{asset($news->image)}}" >

                    <br><br>

                    <p>{{$news->description}}</p>
                    <br>
                    <p>{{$news->description2}}</p>
                    <br>
                </div>
                <br>
                @foreach (News() as $data)
                @if($data->id!=$news->id)
                    <div class="col-lg-2 col-xs-5 small-news ">
                        <a href="/news/{{$data->id}}">
                            <img src="{{asset($data->image)}}"style="height:120px; width:auto;">
                            <br>
                            <h6> {{ Illuminate\Support\Str::limit($data->title, 35) }}</h6>
                        </a>
                    </div>
                    @endif
                    @endforeach
            </div>
        </div>

    <a href="#" class="go-top">Go Top</a>
    <script>
        $(document).ready(function() {
            // Show or hide the sticky footer button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.go-top').fadeIn(200);
                } else {
                    $('.go-top').fadeOut(200);
                }
            });

            // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: 0
                }, 300);
            })
        });
    </script>
</body>

</html>
