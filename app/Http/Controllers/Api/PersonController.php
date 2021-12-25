<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonRelated\Person;
class PersonController extends Controller
{
    public function index()
    {
        $model = Person::get();
    //     dd($model);
    // dd("well dr");
        return view('MajorScreens.person');
    }
}
