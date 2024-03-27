<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
  //Show all parts
  public function index() {
    $parts = Part::orderBy('added_at', 'desc')->get();
    return view('parts.index', ['parts' => $parts]);
  }
  public function create() {
    return view('parts.create');
  }
}
