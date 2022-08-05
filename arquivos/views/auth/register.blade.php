@extends('auth.template_auth.template')

@section('content')

    <section class="container">

        <div class="container_form">
            <header>
                <h1>CADASTRO - ACL</h1>   
            </header>

            <!-- Validation Errors -->
            @if($errors->any())
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
            @endif
            

            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <label for="fname">Nome</label>
                <input type="text" name="name" value="{{old('name')}}" required autofocus  placeholder="Insira o seu Novamente">

                <label for="fname">Email</label>
                <input type="text" name="email" value="{{old('email')}}" required autofocus  placeholder="Insira o seu Email">

                <label for="lname">Password</label>
                <input type="password" name="password" value="{{old('password')}}" placeholder="Insira a sua senha">

                <label for="lname">Confirmar Password</label>
                <input type="password" name="password_confirmation" required  value="{{old('password_confirmation')}}" placeholder="Insira a sua senha novamente">
                
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                </a>
            
                <button class="button">{{ __('Register') }}</button>
            </form>
        </div>
        
    </section>
@endsection


