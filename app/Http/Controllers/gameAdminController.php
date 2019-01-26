<?php

namespace App\Http\Controllers;
use App\Models\game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class gameAdminController extends Controller
{
    public function index()
    {
        $game = game::all();
        return view('admin.game', ['game' => $game]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $game = game::all();
        return view('admin.gameCreate', ['game' => $game]);

    }
    public function save(Request $request)
    {
        if ($request->file('gameImage')) {
            $path = $this->saveImage($request->file('gameImage'));

        }

        $game = new game();

        $game->name = $request->name;
        $game->about = $request->about;
        $game->dateRelease = $request->dateRelease;
        $game->idSpecifications= 2;
        $game->idDevelopers = 2;


        if (isset($path)) {

            $game->img = $path;
        }/*
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $writer->writeFile('Hello World!', 'storage/app/public/qrcodes/qrcode.svg');
*/
        $game->save();
        return redirect('/home/game');
    }
    private function saveImage($img){

        $extension = $img->getClientOriginalExtension();
        $localFileName = rand() . $img->getClientOriginalName();

        $path = Storage::disk('public')->putFileAs('uploads/game',
            $img,
            hash('md5', $localFileName) . '.' . $extension);
        return $path;
    }

    public function change(Request $request)
    {
        $game = game::where('id', $request->id)->first();
        return view('admin.gameEdit', ['game' => $game]);
    }
    public function edit(Request $request)
    {

        if($request->file('gameImage')) {
            $path=$this->saveImage($request->file('gameImage'));

        }

        $game=game::where('id',$request->id)->first();
        $game->name=$request->name;
        $game->about=$request->about;
        $game->dateRelease = $request->dateRelease;
        $game->idSpecifications= 2;
        $game->idDevelopers = 2;
        if(isset($path)) {
            $game->img = $path;
        }

        $game->save();
        $game = game::all();
        return view('admin.game', ['game' => $game]);
    }
}
