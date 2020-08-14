@extends('layouts.app')

@section('content')
     <br>
     <br><br><br>
     <div class="row">
          <div class="col-md-12 login-form-div">
     <div class="login-form wrapper fadeInDown">
 <div id="formContent">
    <!-- Tabs Titles -->

<h2 class="active text-center"> Register </h2>

    <!-- Icon -->
    <br><br>
    <div class="fadeIn first">
      <i class="fa fa-user-circle-o" style="font-size:40px; color:#56baed;"></i>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('register') }}">
         @csrf
<br>
<label for="name" class="col-md-12 col-form-label text-center">{{ __('Name') }}</label>
<input id="name" type="text" class="fadeIn first  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
<br>
@error('name')
   <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
   </span><br>
@enderror
<label for="email" class="col-md-12 col-form-label text-center">{{ __('Email') }}</label>
<input id="email" type="email" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
<br>
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
   </span><br>
@enderror



<label for="password" class="col-md-12 col-form-label text-center">{{ __('Password') }}</label>
           <input id="password" type="password" class="fadeIn third  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
<br>
           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span><br>
           @enderror
           
           <label for="password" class="col-md-12 col-form-label text-center">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="fadeIn third" name="password_confirmation" required autocomplete="new-password">

<br>
<br>
    <!-- Remind Passowrd -->
    <button type="submit" class="fadeIn fourth btn btn-primary">
        {{ __('Register') }}
    </button>
    <br> <br>
</form>
 </div>
</div>
</div>
</div>
{{-- <div class="container">
     <br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
