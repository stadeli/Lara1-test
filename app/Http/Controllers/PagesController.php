<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
          "Go to the store",
          "Go to the market",
          "Go to work",
          "Go home",
          "Go to the concert",
        ];

        return view('welcome', [
          'tasks' => $tasks,
          'foo' => request('title')
        ]);
    }

    public function about()
    {
      return view('about');
    }

    public function contact()
    {
      return view('contact');
    }
}
