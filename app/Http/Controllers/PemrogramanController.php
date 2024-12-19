<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemrogramanController extends Controller
{
    public function index() {
        return view('pemrograman');
    }
}