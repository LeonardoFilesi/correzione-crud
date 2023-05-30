<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dccomic;

class ResourceController extends Controller
{
  public function index() 
  {
    $dccomics = Dccomic::all();

    return view('home', compact('dccomics'));
  }
}
