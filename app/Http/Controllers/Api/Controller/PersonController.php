<?php

namespace App\Http\Controllers\Api\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonRelated\Person;
class PersonController extends Controller
{
    public function index()
    {
        $models = Person::get();
        testing        $pageName = "Person";
        $module = "PIMS";
        $pagePath = "Person";
        //dd($models);
    // dd("well dr");
        return view('MajorScreens.person',compact('pageName','pagePath','module','models'));
    }
    public function getPeople(){
       
        $pageName = "Person";
        $module = "PIMS";
        $pagePath = "Person";
        return view('MajorScreens.people',compact('pageName','pagePath','module'));
    }
}
