<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\User;
use App\Models\comments;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function create(){
        return view('blog/create-Blog');
    }

    public function store(Request $request){
        //  dd(request());
        $data = $request->validate([
            'title' => 'required',
            'mini_title' => 'required',
            'description' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;
        if($request->hasFile('banner')){
            $data['banner']  = request('banner')->store('banners','public');
        }
        // dd($data);

        Blogs::create($data);
        return redirect('/');
    }

    public function manage(){
      
        return view('blog/manageBlog',[
            'blog' =>   auth()->user()->blogs()->get()
        ]);
    }
    public function editBlog(){
        return view('blog/edit_blog',[
            'data' => Blogs::findorFail(request('id'))
        ]);
    }
   
    public function updateBlog(Request $request){
        $blogPost =  Blogs::find(request('id'));
        $blog = $request->validate([
            'title' => 'required',
            'mini_title' => 'required',
            'description' => 'required',
        ]);
        $blog['user_id'] = auth()->user()->id;
        if($request->hasFile('banner')){
            $blog['banner']  = request('banner')->store('blogsImages','public');
            $blogPost->banner = $blog['banner'];
        }
        $blogPost->title = $blog['title'];
        $blogPost->mini_title = $blog['mini_title'];
        $blogPost->description = $blog['description'];
        $blogPost->user_id = $blog['user_id'];
        $blogPost->save();
        return redirect('/manageBlog');
    }

    public function deleteBlog(){
    
        $user = Blogs::findorFail(request('id'));
        $user->delete();
        return back();
    }

    public function read(){
        // dd(request('id'));
        return view('/blog/read_blog',[
            'data' => Blogs::findorFail(request('id')),
            'comments' => comments::all()
        ]);
    }

    public function comment(){
        // dd(request());
        $data = request()->validate([
            'comment' => 'required'
        ]);
        $data['username'] = auth()->user()->username;
        $data['description'] = request('comment');
        $data['blog_id'] = request('one');
        
        // $comment =  comments::all();
        // $comment->username = $data['username'];
        // $comment->description = $data['comment'];

        // $comment->save();

        comments::create($data);


        return  back();
    }

    
    
}
