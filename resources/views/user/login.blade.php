@extends('layout')
@section('content')

<main>
    <div class="container">
        <form action="/login" method="POST">
            @csrf
            <div class="row">
                <h1 class="text-center">LOGIN</h1>
                <i  class="text-center">and become part of the community</i>
                <x-login-error/>
                

                <div class="form-floating col-md-12 my-3">
                    
                    <input 
                    type="email" 
                    name="email"
                    placeholder="email@gmail.com"
                    class="form-control"
                    {{-- required --}}
                     >
                    <label for="email" class="form-label px-5 mx-2">Email</label>
                    @error('email')
                        {{$message}}
                    @enderror
                </div>

                <div class="form-floating col-md-12 my-3">
                    <input 
                    type="text" 
                    name="password"
                    placeholder="password"
                    class="form-control"
                    {{-- required  --}}
                    >
                    <label for="password" class="form-label px-5 mx-2">Password</label>
                    @error('password')
                        {{$message}}
                    @enderror
                </div>

               
                <p>
                    New to the community? <a href="/register"><i>Sign Up</i></a>
                </p>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
   
</main>
@endsection