@props(['data'])
<div>
    <h1 class="text-center">Hot SAUCE🍕</h1>
    <div class="row d-flex mt-3 p-0 border border-1 border-dark bg-secondary">
        @unless (count($data)==0)
            @foreach ($data as $item)
                
                @if($item->id === 3)
                    
                    <div class="col-md-6">
                        <img src="\storage\{{$item->banner}}" alt="" style="width: 100%;height: 100%;" class="img-fluid rounded">
                    </div>
                    <div class="card col-md-6">
                        <div class="card-body">
                            <div class="card-header">
                                <h5 class="text-center" id="title"> <strong>Trendy and Hot Sauce of the week</strong></h5>
                                <hr class="border border-warning border-2">
                                <h5 class="text-center" id="title">{{$item->title}}</h5>
                                {{-- <h5 class="text-center"></h5> --}}
                                
                                </h5>
                            </div>
                            <div class="card-text my-3 px-3">
                                <h6 class="text-center">{{$item->mini_title}} </h6>
                                <p>
                                    {{$item->description}}
                                </p>
                                <div class="text-end">
                                    <sup>
                                        <p>~<strong><i>{{$item->user->username}}</i></strong>
                                        posted <i>{{$item->created_at}}</i></p>
                                    </sup>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="/read/{{$item->id}}" style="text-decoration: none">
                                    <button class="btn btn-outline-primary">Read More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
           
            @endforeach
        @else

        
        <div class="col-md-6">
            <img src="\storage\banners\0tNu4KoYTEZMONLAAfMS7gbq7O4QLlYWQzFF6vta.jpg" alt="" style="width: 100%;height: 100%;" class="img-fluid rounded">
        </div>
        <div class="card col-md-6">
            <div class="card-body">
                <div class="card-header">
                    <h5 class="text-center" id="title">Trendy and Hot Sauce of the week</h5>
                    {{-- <h5 class="text-center"></h5> --}}
                    
                    </h5>
                </div>
                <div class="card-text my-3 px-3">
                    <h6 class="text-center">Car Explorelations </h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam suscipit debitis optio, ab officiis ipsum magni quisquam ullam nisi alias animi magnam, quam rerum id. Enim ea aut fuga sit.
                    </p>
                    <div class="text-end">
                        <sup>
                            <p>~<strong><i>Kim Kinuthia</i></strong>
                            posted <i>2 minutes ago</i></p>
                        </sup>
                    </div>
                </div>
                <div class="text-end">
                    
                    <button class="btn btn-primary text-end">Read more</button><br>
                    <button class="btn btn-outline-success mt-3 text-end">Comment</button>
                </div>
            </div>
        </div>

        @endunless
        
    </div>
    <hr class="border border-success border-2">

</div>
<script src="test.js">
    // let title = document.getElementById()
</script>