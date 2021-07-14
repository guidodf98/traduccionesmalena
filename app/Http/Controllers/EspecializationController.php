<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecializationController extends Controller {
  public function __invoke($esp) {
    return view('esp', compact('esp'));
  }
}
