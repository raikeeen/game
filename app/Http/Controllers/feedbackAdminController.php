<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackAdminController extends Controller
{
    public function index()
    {

        $feedback=feedback::orderBy('id','DESC')->get();
        return view('admin.feedbackView', ['feedback' => $feedback]);
    }
    public function detail(Request $request)
    {
        $feedback = feedback::where('id', $request->id)->first();
        return view('admin.feedbackDetail', ['feedback' => $feedback]);

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function delete(Request $request)
    {
        $feedback = feedback::where('id', $request->id)->delete();
        return redirect('home/feedback');
    }
}
