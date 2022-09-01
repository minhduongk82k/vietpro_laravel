<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
     public function test1(Request $request){
    
    $tests = Test::paginate(1);
    return view("test", ["tests"=>$tests]);
    }  
}
 