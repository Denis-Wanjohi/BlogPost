@props(['data'])

<div class="row">
    {{-- Top blog : hot sauce --}}
    <x-top-blog :data='$data' />
    
        
            <div class="row">
            <h1 class="text-center"><strong>Talk of the town🔊 </strong></h1>

                @unless (count($data) == 0)
                   @foreach ($data as $item)
                    <div class="card col-md-4 col-sm-6 mt-5 ">
                        <div class="card-header">
                            {{-- <h5 class="text-center">Old school on the road...</h5> --}}

                            <h5 class="text-center">
                            {{$item->title}}
                            </h5>
                        </div>
                        <img src="/storage/{{$item->banner}}" alt="" class="" style="height: 400px">
                        <div class="card-text px-2">
                            <h6 class="text-center py-2" >{{$item->mini_title}}</h6>
                            <p class="bg-secondary overflow-hidden " style="height: 250px;">
                                {{$item->description}}
                            </p>
                            <a href="/read/{{$item->id}}" style="text-decoration: none">
                                <button class="btn btn-outline-primary">Read More</button>
                            </a>
                            <a href="/read/{{$item->id}}" style="text-decoration: none">
                                <button class="btn btn-outline-success col-6">comment</button>
                            </a>
                        </div>
                        <div class="card-footer text-end">
                            <div>
                                <p>
                                    <sub>~<strong>{{$item->user->username}} </strong>posted {{$item->created_at}}</sub>
                                </p>
                            </div>
                        </div> 
                    </div>
                    @endforeach  
                @else
                        <h6 class="text-center"><strong><i>.....silence is regning</i> </strong></h6>
                @endunless
               
            </div>
        


    
{{-- 
            <div class="card col-md-4 col-sm-6 mt-5 ">
                <div class="card-header">
                    <h5 class="text-center">Old school on the road...</h5>
                </div>
                <img src="car.jpg" alt="">
                <div class="card-text px-2">
                    <h6 class="text-center py-2">Sir James 1980 model</h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt error voluptas doloribus sint exercitationem, atque deleniti iusto perspiciatis corrupti enim. Officiis laudantium labore officia vel rem ipsam ab minus alias!
                    </p>
                    <button class="btn btn-outline-primary">Read More</button>
                    <button class="btn btn-outline-success col-6">comment</button>
                </div>
                <div class="card-footer text-end">
                    <div>
                        <p>
                            <sub>~<strong>Joy Makena </strong>posted 3 minutes ago</sub>
                        </p>
                    </div>
                    
                </div>
                
            </div>

            <div class="card col-md-4 col-sm-6 mt-5  ">
                <div class="card-header">
                    <h5 class="text-center">Old school on the road...</h5>
                </div>
                <img src="car.jpg" alt="">
                <div class="card-text px-2">
                    <h6 class="text-center py-2">Sir James 1980 model</h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt error voluptas doloribus sint exercitationem, atque deleniti iusto perspiciatis corrupti enim. Officiis laudantium labore officia vel rem ipsam ab minus alias!
                    </p>
                    <button class="btn btn-outline-primary">Read More</button>
                    <button class="btn btn-outline-success col-6">comment</button>
                </div>
                <div class="card-footer text-end">
                    <div>
                        <p>
                            <sub>~<strong>Joy Makena </strong>posted 3 minutes ago</sub>
                        </p>
                    </div>
                    
                </div>
                
            </div>

            <div class="card col-md-4 col-sm-6 mt-5 ">
                <div class="card-header ">
                    <h5 class="text-center">Old school on the road...</h5>
                </div>
                <img src="car.jpg" alt="">
                <div class="card-text px-2">
                    <h6 class="text-center py-2">Sir James 1980 model</h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt error voluptas doloribus sint exercitationem, atque deleniti iusto perspiciatis corrupti enim. Officiis laudantium labore officia vel rem ipsam ab minus alias!
                    </p>
                    <button class="btn btn-outline-primary">Read More</button>
                    <button class="btn btn-outline-success col-6">comment</button>
                </div>
                <div class="card-footer text-end">
                    <div>
                        <p>
                            <sub>~<strong>Joy Makena </strong>posted 3 minutes ago</sub>
                        </p>
                    </div>
                    
                </div>
                
            </div>

            <div class="card col-md-4 col-sm-6 mt-5 ">
                <div class="card-header">
                    <h5 class="text-center">Old school on the road...</h5>
                </div>
                <img src="car.jpg" alt="">
                <div class="card-text px-2">
                    <h6 class="text-center py-2">Sir James 1980 model</h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt error voluptas doloribus sint exercitationem, atque deleniti iusto perspiciatis corrupti enim. Officiis laudantium labore officia vel rem ipsam ab minus alias!
                    </p>
                    <button class="btn btn-outline-primary">Read More</button>
                    <button class="btn btn-outline-success col-6">comment</button>
                </div>
                <div class="card-footer text-end">
                    <div>
                        <p>
                            <sub>~<strong>Joy Makena </strong>posted 3 minutes ago</sub>
                        </p>
                    </div>
                    
                </div>
                
            </div>

            <div class="card col-md-4 col-sm-6 mt-5 ">
                <div class="card-header">
                    <h5 class="text-center">Old school on the road...</h5>
                </div>
                <img src="car.jpg" alt="">
                <div class="card-text px-2">
                    <h6 class="text-center py-2">Sir James 1980 model</h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt error voluptas doloribus sint exercitationem, atque deleniti iusto perspiciatis corrupti enim. Officiis laudantium labore officia vel rem ipsam ab minus alias!
                    </p>
                    <button class="btn btn-outline-primary">Read More</button>
                    <button class="btn btn-outline-success col-6">comment</button>
                </div>
                <div class="card-footer text-end">
                    <div>
                        <p>
                            <sub>~<strong>Joy Makena </strong>posted 3 minutes ago</sub>
                        </p>
                    </div>
                    
                </div>
                
            </div> --}}

</div>
    
