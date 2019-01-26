<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use Illuminate\Support\Facades\Storage;

class newsAdminController extends Controller
{
    public function index()
    {
        $blog=blog::orderBy('id','DESC')->get();
        return view('admin.newsDetail', ['blog' => $blog]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function detail(Request $request)
    {
        $blog = blog::where('id', $request->id)->first();
        return view('blog.detail', ['blog' => $blog]);
    }
    public function change(Request $request)
    {
        $blog = blog::where('id', $request->id)->first();
        return view('admin.newsEdit', ['blog' => $blog]);
    }
    public function edit(Request $request)
    {

        if($request->file('newsImage')) {
            $path=$this->saveImage($request->file('newsImage'));

        }

        $blog=blog::where('id',$request->id)->first();
        $blog->name=$request->name;
        $blog->about=$request->about;

        if(isset($path)) {
            $blog->img = $path;
        }

        $blog->save();
        $blog=blog::orderBy('id','DESC')->get();
        return view('admin.newsDetail', ['blog' => $blog]);
    }
    private function saveImage($img){

        $extension = $img->getClientOriginalExtension();
        $localFileName = rand() . $img->getClientOriginalName();

        $path = Storage::disk('public')->putFileAs('uploads/news',
            $img,
            hash('md5', $localFileName) . '.' . $extension);
        return $path;
    }

    public function create()
    {
        $blog = blog::all();
        return view('admin.newsCreate', ['blog' => $blog]);

    }
    public function save(Request $request)
    {
        if ($request->file('newsImage')) {
            $path = $this->saveImage($request->file('newsImage'));

        }

        $blog = new blog();

        $blog->name = $request->name;
        $blog->about = $request->about;


        if (isset($path)) {

            $blog->img = $path;
        }/*
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $writer->writeFile('Hello World!', 'storage/app/public/qrcodes/qrcode.svg');
*/
        $blog->save();
        return redirect('/home/news');
    }
}
