<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterFoods(){
        return view('dashboard.filter.filterFoods');
    }
public function filterDrinks(){
        return view('dashboard.filter.filterDrinks');
}
public function filterDetergent(){
        return view('dashboard.filter.filterDetergent');
}
public function filterCanned(){
        return view('dashboard.filter.filterCanned');
}
}
