<?php

namespace App\Http\Controllers;
use App\Models\employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class employeesController extends Controller
{
    public function index()
    {
        $employees = employees::all();
        return view('admin.employees', ['employees' => $employees]);
    }
    public function delete(Request $request)
    {
        $employees = employees::where('id', $request->id)->delete();
        return redirect('home/employees');
    }
    public function change(Request $request)
    {
        $employees = employees::where('id', $request->id)->first();
        return view('admin.employeesDetail', ['employees' => $employees]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit(Request $request)
    {

            if ($request->file('employeesImage')) {
                $path = $this->saveImage($request->file('employeesImage'));

            }

            $employees = employees::where('id', $request->id)->first();
            $employees->name = $request->input('name');
            $employees->about = $request->input('about');
            $employees->email = $request->input('email');
            if (isset($path)) {
                $employees->img = $path;
            }

            $employees->save();
            $employees = employees::all();
            return view('admin.employees', ['employees' => $employees]);

    }
    private function saveImage($img){

        $extension = $img->getClientOriginalExtension();
        $localFileName = rand() . $img->getClientOriginalName();

        $path = Storage::disk('public')->putFileAs('uploads/employees',
            $img,
            hash('md5', $localFileName) . '.' . $extension);
        return $path;
    }
    public function create()
    {
        $employees = employees::all();
        return view('admin.employeesCreate', ['employees' => $employees]);

    }
    public function save(Request $request)
    {
        if ($request->file('employeesImage')) {
            $path = $this->saveImage($request->file('employeesImage'));

        }

        $employees = new employees();

        $employees->name = $request->name;
        $employees->about = $request->about;
        $employees->email = $request->email;

        if (isset($path)) {
            $employees->img = $path;
        }/*
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $writer->writeFile('Hello World!', 'storage/app/public/qrcodes/qrcode.svg');
*/
        $employees->save();
        return redirect('/home/employees');
    }
}
