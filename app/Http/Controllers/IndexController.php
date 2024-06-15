<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Cover;
use App\Models\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function definition()
    {
        return view('definition');
    }
    public function history()
    {
        return view('history');
    }
    public function location()
    {
        return view('location');
    }
    public function tour()
    {
        return view('tour');
    }
    public function schedule()
    {
        return view('schedule');
    }
    public function colin()
    {
        return view('collectionDetail');
    }
    public function event()
    {
        $events = Event::all();
        return view('event', compact('events'));
    }
    public function event_detail($id)
    {
        $event = event::find($id);
        // dd($collection);
        return view('eventDetail', compact('event'));
    }
    public function collection()
    {
        $covers = Cover::paginate(9);
        return view('collection', compact('covers'));
    }

    public function collection_detail($id)
    {
        $collection = Collection::where('id_cover', $id)->get();
        $cover = Cover::find($id);
        // dd($collection);
        return view('collectionDetail', compact('collection', 'cover'));
    }
}
