<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basiccontroller extends Controller
{
    public function home()
    {
        $data=[
            'name'=>'Athira',
        'message'=>'hello',
        'names'=>["Akshaya","Athira","Rose","Avani"]
    ];
        return view('welcome',$data);
    }
}
