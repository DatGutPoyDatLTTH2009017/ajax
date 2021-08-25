<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function save(Request $request){
        $ajax = new Ajax();
        $ajax->fill($request->all());
        $ajax->save();
        return $ajax;
    }
    public function display(){
        $ajax = Ajax::all();
        return $ajax;
    }
}
