<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index() {
      $params = [
        'head' => [
          'title' => 'サンプルページです。',
        ]
      ];
      return view('sample.index', $params);
    }
}
