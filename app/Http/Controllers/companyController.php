<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class companyController extends Controller
{
    public function index()
    {
        $employees = employees::all();
        return view('company.index', ['employees' => $employees]);
    }
}
