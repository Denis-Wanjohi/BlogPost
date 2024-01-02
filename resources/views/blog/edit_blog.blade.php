@include('partials/_meta')

<body>
    @include('partials/_header')
    <main>
        <div class="container">
            <form action="/updateBlog/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <h1 class="text-center">Edit BLOG</h1>
                    <i  class="text-center">let the town know .....</i>
                    <img src="/storage/{{$data->banner}}" alt="{{$data->banner}}">
                    <div class="row">
                        <div class="form-floating col-md-6  my-3">
                                <input 
                                type="text" 
                                name="title"
                                placeholder="John"
                                class="form-control"
                                required  value="{{$data->title}}"  
                                >
                                <label for="title" class="form-label px-5 mx-2">Title</label>
                                @error('title')
                                    {{$message}}
                                @enderror
                        </div>

                        <div class="form-floating col-md-6 my-3">
                            <input 
                            type="text" 
                            name="mini_title"
                            placeholder="John"
                            class="form-control"
                            required  value="{{$data->mini_title}}"  
                            >
                            <label for="mini-title" class="form-label px-5 mx-2">Mini Title</label>
                            @error('mini_title')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating col-md-12 my-3">
                        
                        @error('banner')
                            {{$message}}
                        @enderror
                        <input 
                        type="file" 
                        name="banner"
                        {{-- placeholder=" " --}}
                        class="form-control"
                        >
                        <label for="banner" class="form-label px-5 mx-2">Banner</label>
                        
                    </div>
                    <div class="form-floating col-md-12 my-3">
                    
                        <textarea name="description" id="description" cols="30" rows="30" class="form-control h-10" style="min-height:300px;" required  value="{{old('details')}}"  >
                            {{$data->description}}
                        </textarea>
                        <label for="description" class="form-label px-5 mx-2">Details</label>
                    </div>

                    
                    <div class="row">
                        {{-- <a href="" class="col-md-5 my-1">
                            <button type="submit" class="btn btn-outline-success col-12">
                                Preview blog
                            </button>
                        </a> --}}
                        <button type="submit" class="btn btn-primary col-md-6 my-1  mx-1">Post blog</button>
                    </div>
                    
                    
                </div>
            </form>
        </div>
       
    </main>
    
</body>
