@extends('layout')
@section('content')

<main>
    <div class="container">
        <form action="/register" method="POST">
            @csrf
            <div class="row">
                <h1 class="text-center">REGISTER</h1>
                <i  class="text-center">and become part of the community</i>
                

                <div class="form-floating col-md-4  my-3">
                    <input 
                    type="text" 
                    name="firstname"
                    placeholder="John"
                    class="form-control"
                    {{-- required --}}
                    >
                    <label for="firstname" class="form-label px-5 mx-2">Firstname</label>
                    @error('firstname')
                    {{$message}}
                    @enderror
                </div>

                <div class="form-floating col-md-4  my-3">
                    <input 
                    type="text" 
                    name="lastname"
                    placeholder="John"
                    class="form-control"
                    {{-- required --}}
                    >
                    <label for="lastname" class="form-label px-5 mx-2">Lastname</label>
                    @error('lastname')
                    {{$message}}
                    @enderror
                </div>


                <div class="form-floating col-md-4 my-3">
                    <input 
                    type="text" 
                    name="username"
                    placeholder="Doe"
                    class="form-control"
                    {{-- required --}}
                    >
                    <label for="username" class="form-label px-5 mx-2">Username</label>
                    @error('username')
                    {{$message}}
                    @enderror
                </div>

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

                <div class="form-floating col-md-12 my-3">
                    <input 
                    type="text" 
                    name="password_confirmation"
                    placeholder="password_confirmation"
                    class="form-control" 
                    {{-- required --}}
                    >
                    <label for="password_confirmation" class="form-label px-5 mx-2">Confirm Password</label>
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </div>
                <p>
                    Have an account? <a href="/login"><i>login</i></a>
                </p>
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
   
</main>
@endsection