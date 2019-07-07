<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(){
        $data = [
            ['name'=>'tsubasa', 'mail'=>'tsubasa@yahoo'],
            ['name'=>'sakamoto', 'mail'=>'sakamoto@yahoo'],
            ['name'=>'kawasaki', 'mail'=>'kawasaki@yahoo']
        ];
        return view('hello.index', ['data'=>$data]);
    }

    public function post(Request $request){
        return view('hello.index', ['msg'=>$request->msg]);
    }
}
