<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    public function index()
    {
        // $events = Event::paginate(8);
        //  return view('admin.index', compact('events'));
         return view('admin.index');
    }
}
