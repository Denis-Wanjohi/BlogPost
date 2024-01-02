@extends('layout')


@section('content')


<div class="container">
    <div class="row  table-responsive-md">
        
        <table class="table table-hover table-primary table-striped table-bordered my-5">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Banner</th>
                    <th>Location</th>
                    <th>FEE</th>
                    <th>Time : from</th>
                    <th>Time : to</th>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Posted on</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td><img src="/storage/{{$item->banner}}"  style="width: 100px; height: 100px;" alt=""></td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->fee}}</td>
                    <td>{{$item->from}}</td>
                    <td>{{$item->to}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->details}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        {{-- <form action="/editBlog/{{$item->id}}" method="get"> --}}
                            {{-- @csrf --}}
                        <a href="/editEvent/{{$item->id}}">   <button class="btn btn-outline-primary">
                                Edit
                            </button>
                        </a> 
                        {{-- </form> --}}
                    </td>
                    <td>
                        <form action="/deleteEvent/{{$item->id}}" method="POST">
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