<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;
class supportController extends Controller
{
    public function index()
    {
        return view('support.index');
    }
    public function save(Request $request){
        $feedback = new feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;

        $feedback->save();
        //return redirect('support/yes');
        return view('support.yes');


    }
}
