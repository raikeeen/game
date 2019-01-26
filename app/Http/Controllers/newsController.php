<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\View\View;

class newsController extends Controller
{

    public function index()
    {
        //$classes = Animalclass::all();
        //return View('animalclasses.index', ['classList' => $classes]);
        return view('news.index');
    }

}
