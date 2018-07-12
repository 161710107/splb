<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 
class FrontendController extends Controller
{
public function index()
    {
        return view('layouts.members')
    }
