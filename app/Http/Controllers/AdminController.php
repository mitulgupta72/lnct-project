<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitors;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function visitors()
    {
        $data = Visitors::all();
        // ->First()
        return view('visitors', ['data' => $data]);
    }

    public function emailview($id){
        return view('email_view');
    }
}
