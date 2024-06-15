<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(8);
        $iteration = $events->firstItem();
        return view('admin.event.index', compact('events', 'iteration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title_id' => 'required',
            'title_eng' => 'required',
            'date' => 'required',
            'deskripsi_id' => 'required',
            'deskripsi_eng' => 'required',
            'image' => 'required|mimes:png,jpeg,jpg|max:2048',
        ]);


        $event = new Event;
        $event->title_id = $request->get('title_id');
        $event->title_eng = $request->get('title_eng');
        $event->date = $request->get('date');
        $event->deskripsi_id = $request->get('deskripsi_id');
        $event->deskripsi_eng = $request->get('deskripsi_eng');


        if($request->hasFile('image')){
            $PhotoName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/image-event/'), $PhotoName);
            $event->image = $PhotoName;
        }
        // dd($event)
        
        $event->save();

        return redirect('/admin/event')->with('success', 'Data baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        return view('admin.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if ($request->get('title_id')) {
            $request->validate([
                'title_id' => 'required',
            ]);
            $event->title_id = $request->get('title_id');
            $event->save();
        }

        if ($request->get('title_eng')) {
            $request->validate([
                'title_eng' => 'required',
            ]);
            $event->title_eng = $request->get('title_eng');
            $event->save();
        }

        if ($request->get('date')) {
            $request->validate([
                'date' => 'required',
            ]);

            $event->date = $request->get('date');
            $event->save();
        }

        if ($request->get('deskripsi_id')) {
            $request->validate([
                'deskripsi_id' => 'required',
            ]);
            $event->deskripsi_id = $request->get('deskripsi_id');
            $event->save();
        }
        if ($request->get('deskripsi_eng')) {
            $request->validate([
                'deskripsi_eng' => 'required',
            ]);
            $event->deskripsi_eng = $request->get('deskripsi_eng');
            $event->save();
        }

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:png,jpeg,jpg|max:2048',
            ]);        
            if(isset($event->image)){
                $path = "images/image-event/";
                File::delete($path . $event->image);
            }
            $PhotoName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/photo-assist/'), $PhotoName);
            $event->image = $PhotoName;
            $event->save();
        }

        return redirect('/admin/event/' . $event->id )->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if(isset($event->image)){
            $path = "images/image-event/";
            File::delete($path . $event->image);
        }

        $event->delete();

        return redirect('/admin/event/')->with('success', 'Data berhasil dihapus');
    }
}
