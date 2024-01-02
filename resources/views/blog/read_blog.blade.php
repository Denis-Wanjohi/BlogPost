@include('partials/_meta')

<body>
    @include('partials/_header')

    <main>
        <div class="container py-5" style="background-color:gray">
                @csrf
                @method('PUT')
                <div class="row text-center">
                    
                    <h1 class="my-3"><strong>{{$data->title}}</strong></h1>
                    <div class="row">
                        <img src="/storage/{{$data->banner}}" alt="{{$data->banner}}" class="p-2 col-12 img-fluid">
                    </div>
                    <hr  class="border border-success  border-3 ">
                    <h3 class="my-3"><strong><i>{{$data->mini_title}}</i></strong></h3>
                    <p>
                        {{$data->description}}
                    </p>
                    <div class="row  text-center d-flex" style="justify-content:center;">
                        <form action="/comment" method="POST">
                            @csrf
                            @method('GET')
                            <div class="form-floating col-12">
                                <input 
                                type="text"
                                name="comment"
                                class="form-control ">
                                <label for="comment" class="mx-5" >Leave a comment...</label>
                                <input type="hidden" name="one" value="{{$data->id}}">
                                <button class="btn btn-primary" type="submit">comment</button>
                                
                            </div>
                        </form>
                       <div class="col-12  text-start">
                            @foreach ($comments as $comment)
                                @if ($comment->blog_id === $data->id)
                                    <p><strong>{{$comment->username}}: </strong>{{$comment->description }}<br> <sub>{{$comment->updated_at}}</sub><br><hr> </p>
                                @endif
                            @endforeach
                       </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
       
    </main>
    
</body>
