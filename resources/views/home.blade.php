    @extends('layout')
    @section('content')
            <main>
                
                <div class="container">
                    <!-- Blogs  -->

                    <x-blog :data='$data' />
                    
                    <hr class="border border-success border-2">

                    <!-- Events  -->
                    <x-event :events='$events' />

                </div>
            </main>  
    @endsection
 