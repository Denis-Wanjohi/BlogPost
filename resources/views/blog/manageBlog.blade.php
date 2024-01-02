@extends('layout')


@section('content')


<div class="container">
    <div class="row  table-responsive-md">
      
        <table class="table table-hover table-primary table-striped table-bordered my-5">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Banner</th>
                    <th>Mini-title</th>
                    <th>Description</th>
                    <th>Posted on</th>
                    <th></th>
                    <!-- <th>Description</th> -->
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td><img src="/storage/{{$item->banner}}"  style="width: 100px; height: 100px;" alt=""></td>
                    <td>{{$item->mini_title}}</td>
                    <!-- <td>31/12/2023</td>
                    <td>12:00PM</td>
                    <td>12:00AM</td> -->
                    <td>
                        {{$item->description}}
                    </td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        {{-- <form action="/editBlog/{{$item->id}}" method="get"> --}}
                            {{-- @csrf --}}
                        <a href="/editBlog/{{$item->id}}">   <button class="btn btn-outline-primary">
                                Edit
                            </button>
                        </a> 
                        {{-- </form> --}}
                    </td>
                    <td>
                        <form action="/deleteBlog/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                    
                
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>

    
@endsection