<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function getNumber() {
      $type = "numbers";
      $values = range(0, 9);
      return view('numberCube', compact('type', 'values'));
    }
    public function getLetter() {
      $type = "letter";
      $values = range('A', 'Z');
      return view('letterCube', compact('type', 'values'));
    }

}
