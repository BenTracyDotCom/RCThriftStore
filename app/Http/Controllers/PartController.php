<?php

namespace App\Http\Controllers;

use app\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
  public function index() {
    $part = "This is the parts page!";
    return view('parts.index', ['part' => $part]);
  }
}
