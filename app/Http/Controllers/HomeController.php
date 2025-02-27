<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function setLocale(Request $request){
        $lang = $request->locel;

        session(["locale" => $lang]);
        App::setLocale($lang);
        return redirect()->back();
    }
}
