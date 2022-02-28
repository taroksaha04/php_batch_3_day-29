<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Student;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs;
    protected $blog;
    public function index()
    {
        return view('add-blog');
    }
    public function create1(Request $request)
    {
        //return $request->all();

        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();
//oi page ei dekhabe je data insert success hoiche
        return redirect()->back()->with('message','Blog info save successfully.');
    }
    public function manage()
    {
        $this->blogs =  Blog::orderBy('id','desc')->get();
        return view('manage-blog',['blog'=>$this->blogs]);
    }
    public function edit($id){
        //return $id;
        $this->blog = Blog::find($id);
//        return $this->blog;
        return view('edit-blog',['blog' => $this->blog]);
    }

}
