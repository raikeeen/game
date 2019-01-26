<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;


class blogController extends Controller
{

    public function index()
    {


        $blog=blog::orderBy('id','DESC')->get();
        return view('blog.index', ['blog' => $blog]);
    }
    public function displayCreate()
    {
        $blog = blog::all();
        return view('blog.index', ['blog' => $blog]);
    }
    public function detail(Request $request)
    {
        $blog = blog::where('id', $request->id)->first();
        return view('blog.detail', ['blog' => $blog]);

    }
    public  function search($blog, $field, $value){
        return $blog->where($field, 'LIKE', "%$value%");
    }
    public  function searchView(){
        $blog = blog::all();
        return view('blog.search', ['blog' => $blog]);
    }
    public  function se(Request $request){
        $blog = blog::all();
        $blog=$this->search($blog,'name',$request);
        return view('blog.search', ['blog' => $blog]);
    }
}
