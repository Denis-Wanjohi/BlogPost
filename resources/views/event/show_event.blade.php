@include('partials/_meta')

<body>
    @include('partials/_header')
    <main>
        <div class="container">
            <div class="row border border-2 text-center justify-content-center align-items-center my-3">
                <h1>{{$event->title}}</h1>
                {{-- <h6><i><strong>{{$event->user()}}</strong></i></h6> --}}
                <img src="/storage/{{$event->banner}}" class="col-6 my-4" alt="">
                <p><strong>Time</strong> from {{$event->from}} to {{$event->to}}</p>
                <p><strong>Location</strong> {{$event->location}}</p>
                <p><strong>Entry fee: </strong>{{$event->fee}} bob</p>
                <hr>
                
                <div>
                    <p><strong>Info: </strong>
                        {{$event->details}}
                        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus dolores facere 
                        necessitatibus delectus ad repudiandae ducimus sequi ipsa sapiente veritatis quis explicabo
                         magni architecto, suscipit a aut illum sint aliquid amet debitis voluptate, 
                        quae voluptas saepe! Voluptates, est! Accusamus distinctio voluptates vel, corrupti voluptatem
                         quaerat sapiente ad, eaque fuga possimus alias similique odit, molestiae dolor cupiditate 
                         voluptate eum consectetur deserunt earum quisquam. Ut repudiandae commodi
                         distinctio quis. Corrupti similique, alias quidem iste quod veniam voluptatem. Totam quisquam
                          labore reiciendis quas, eveniet laudantium temporibus veritatis iure! Placeat ipsam, eius natus maxime magni recusandae assumenda qui tenetur quasi doloribus quae quisquam! --}}
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer style="height: 100px;">

    </footer>
</body>
</html>