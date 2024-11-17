<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class PageController extends Controller
{
    public function aboutUs(){

        $ab = [1,2,4,5,7,8,9,12,13,17,98,21,43,54];

        return Inertia::render('AboutUs', [
            'msgg' => $ab,
        ]);
    }


    public function contactUs(){
        return Inertia::render('ContactUs');
    }
}
