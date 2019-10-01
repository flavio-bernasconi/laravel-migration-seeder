<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class myController extends Controller
{
    public function getEmployee(){
      $arrEmployees=Data::all();

      return view('employee', compact('arrEmployees'));

    }
}
