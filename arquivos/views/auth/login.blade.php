@extends('auth.template_auth.template')

@section('content')

    <section class="container">

        <div class="container_form">
            <header>
                <h1>LOGIN - ACL</h1>   
            </header>
            <!-- Validation Errors -->

            @if($errors->any())
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
            @endif


            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="fname">Email</label>
                <input type="text" id="fname" name="email" value="{{old('email')}}" required autofocus  placeholder="Insira o seu Email">
                <label for="lname">Password</label>
                <input type="password" id="lname" name="password" value="{{old('password')}}" placeholder="Insira a sua senha">
                <span class="">{{ __('Remember me') }}</span>
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button class="button">{{ __('Login') }}</button>
            </form>
        </div>
        
    </section>

@endsection






















