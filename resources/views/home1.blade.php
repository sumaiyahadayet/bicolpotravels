@extends('layouts.app')

@section('content')

<div class="container" style="margin-left: 300px; margin-top:200px; margin-bottom:200px; display:block;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-1 text-center">
                   @guest
                       <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                       @if (Route::has('register'))
                           <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                       @endif
                   @else
                       <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                       <a href="{{ route('logout') }}"
                          class="no-underline hover:underline text-gray-300 text-sm p-3"
                          onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                           {{ csrf_field() }}
                       </form>
                   @endguest
               </div>
@endsection

<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173945284-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173945284-1');
</script>
https://analytics.google.com/analytics/web/#/realtime/rt-overview/a173945284w241416827p225186525/ --}}
