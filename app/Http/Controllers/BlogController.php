<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // return a word 'hello'
        // return 'helo';

        // return a view
        return view('blog/home');
    }

    public function show($id)
    {
        // return parameter
        // return $id;

        $nilai = 'ini adalah id : ' . $id;
        $users = ['wildan', 'setyo', 'budi'];
        return view('blog/single', ['blog' => $nilai, 'users' => $users]);
    }
}
