@include('partials/_meta')

<body>
    @include('partials/_header')

    <main>
        <div class="container">
            <form action="/updateEvent/{{$event->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <h1 class="text-center">Edit Event</h1>
                    <i  class="text-center">let the town know .....</i>
                    <img src="/storage/{{$event->banner}}"  class="my-4">
                  
                    <div class="form-floating col-md-12 my-3">
                        <input 
                        type="text" 
                        name="title"
                        placeholder="title"
                        class="form-control"
                        required 
                        value="{{$event->title}}">
                        <label for="banner" class="form-label px-5 mx-2">Title</label>
                    </div>
                    <div class="form-floating col-md-12 my-3">
                        <input 
                        type="text" 
                        name="location"
                        placeholder="location"
                        class="form-control"
                        required
                        value="{{$event->location}}" >
                        <label for="banner" class="form-label px-5 mx-2">Location</label>
                    </div>
                    <div class="form-floating col-md-12 my-3">
                        <input 
                        type="text" 
                        name="fee"
                        placeholder="fee"
                        class="form-control"
                        required
                        value="{{$event->fee}}" >
                        <label for="banner" class="form-label px-5 mx-2">Entry fee</label>
                    </div>
                    <div class="form-floating col-md-12 my-3">
                        <input 
                        type="date" 
                        name="date"
                        placeholder="date"
                        class="form-control"
                        required
                        value="{{$event->date}}" >
                        <label for="banner" class="form-label px-5 mx-2">Date</label>
                    </div>
                    <div class="row">
                        
                        <div class="form-floating col-md-6  my-3">
                                <input 
                                type="time" 
                                name="from"
                                placeholder="12:00pm"
                                class="form-control"
                                required
                                value="{{$event->from}}"
                                >
                                <label for="name" class="form-label px-5 mx-2">From...</label>
                        </div>

                        <div class="form-floating col-md-6 my-3">
                            <input 
                            type="time" 
                            name="to"
                            placeholder="12:00am"
                            class="form-control"
                            required
                            value="{{$event->to}}"
                            >
                            <label for="name" class="form-label px-5 mx-2">To...</label>
                        </div>
                    </div>
                    <div class="form-floating col-md-12 my-3">
                        <input 
                        type="file" 
                        name="banner"
                        placeholder=" "
                        class="form-control"
                         >
                        <label for="banner" class="form-label px-5 mx-2">Banner</label>
                    </div>
                    <div class="form-floating col-md-12 my-3">
                    
                        <textarea name="details" id="details" cols="30" rows="10" style="min-height: 100px; max-height: 200px;" class="form-control">{{$event->details}}</textarea>
                        <label for="details" class="form-label px-5 mx-2">Details</label>
                    </div>

                    
                    <div class="row">
                        {{-- <a href="" class="col-md-5 my-1">
                            <button type="submit" class="btn btn-outline-success col-12">
                                Preview blog
                            </button>
                        </a> --}}
                        <button type="submit" class="btn btn-primary col-md-12 my-1  mx-1">Post blog</button>
                    </div>
                    
                    
                </div>
            </form>
        </div>
       
    </main>
    
</body>
</html>