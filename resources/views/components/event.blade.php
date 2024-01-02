@props(['events'])
<div class="row">
    <h1 class="text-center"><strong>Upcoming events 🎙</strong></h1>
    <div class="row col-12">
        @unless (count($events) == 0)
            @foreach ($events as $event)
                <div  class="card col-sm-6 my-2">
                    <div class="card-header d-flex ">
                        <h3 class="col-6" >{{$event->title}}</h3>
                        <div class="text-end col-6">
                            <form action="/showEvent/{{$event->id}}" method="POST">
                                @csrf
                                @method('GET')
                                <button class="btn btn-outline-success">More Info</button>
                            </form>
                        </div>
                    </div>
                    
                    <p class="card-body">
                        <strong>Location:</strong> {{$event->location}} <br>
                        <strong>Date:</strong> {{$event->date}} <br>
                        <strong>Time: from</strong> {{$event->from}} <strong>to:</strong> {{$event->to}}<br>
                        <strong>Entry:</strong> 
                        @if ($event->fee === 0)
                          FREE
                        @else
                            {{$event->fee}} bob per head
                        @endif
                       
                        <hr>
                        <div class="card-text px-4" style="max-height: 120px; overflow-y:scroll">
                            <strong>Info:</strong> {{$event->details}}   
                        </div>
                    </p>
                </div>
            @endforeach 
        @else
             <h6 class="text-center"><strong><i>.....keep watch 🎥</i> </strong></h6>
        @endunless
        
        {{-- <div  class="card col-sm-6 my-2">

        </div>
        <div  class="card col-sm-6 my-2">
            <div class="card-header d-flex ">
                <h3 class="col-6" >1 .Park n chill</h3>
                <div class="text-end col-6">
                    <button class="btn btn-outline-success">More Info</button>
                </div>
            </div>
            
            <p class="card-body">
                <strong>Location:</strong> Show Grounds <br>
                <strong>Time:</strong> From 2pm <br>
                <strong>Entry:</strong> 500 bob per head
                <hr>
                <div class="card-text px-4">
                    <strong>Info:</strong> Free Nyama choma available na chaser😂 <br>  
                    Drinks at normal price. Tell a friend to tell a friend  <br> See you there!!!!!!!   
                </div>
            </p>
        </div>

        <div  class="card col-sm-6 my-2">
            <div class="card-header d-flex ">
                <h3 class="col-6" >1 .Park n chill</h3>
                <div class="text-end col-6">
                    <button class="btn btn-outline-success">More Info</button>
                </div>
            </div>
            <p class="card-body">
                <strong>Location:</strong> Show Grounds <br>
                <strong>Time:</strong> From 2pm <br>
                <strong>Entry:</strong> 500 bob per head
                <hr>
                <div class="card-text px-4">
                    <strong>Info:</strong> Free Nyama choma available na chaser😂 <br>  
                    Drinks at normal price. Tell a friend to tell a friend  <br> See you there!!!!!!!   
                </div>
            </p>
        </div>


        <div  class="card col-sm-6 my-2">
            <div class="card-header d-flex ">
                <h3 class="col-6" >1 .Park n chill</h3>
                <div class="text-end col-6">
                    <button class="btn btn-outline-success">More Info</button>
                </div>
            </div>
            <p class="card-body">
                <strong>Location:</strong> Show Grounds <br>
                <strong>Time:</strong> From 2pm <br>
                <strong>Entry:</strong> 500 bob per head
                <hr>
                <div class="card-text px-4">
                    <strong>Info:</strong> Free Nyama choma available na chaser😂 <br>  
                    Drinks at normal price. Tell a friend to tell a friend  <br> See you there!!!!!!!   
                </div>
            </p>
        </div>


        <div  class="card col-sm-6 my-2">
            <div class="card-header d-flex ">
                <h3 class="col-6" >1 .Park n chill</h3>
                <div class="text-end col-6">
                    <button class="btn btn-outline-success">More Info</button>
                </div>
            </div>
            <p class="card-body">
                <strong>Location:</strong> Show Grounds <br>
                <strong>Time:</strong> From 2pm <br>
                <strong>Entry:</strong> 500 bob per head
                <hr>
                <div class="card-text px-4">
                    <strong>Info:</strong> Free Nyama choma available na chaser😂 <br>  
                    Drinks at normal price. Tell a friend to tell a friend  <br> See you there!!!!!!!   
                </div>
            </p>
        </div> --}}
        
    </div>
    
</div>