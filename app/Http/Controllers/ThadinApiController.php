<?php

namespace App\Http\Controllers;
use App\Thadin;

use Illuminate\Http\Request;

class ThadinApiController extends Controller
{
    public function index()
    {
    	return ['thadins' => Thadin::orderBy('id','desc')->get() ];
    }

    public function detail($id)
    {
    	return [Thadin::findOrfail($id)];
    }
}
