<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;
use App\Models\Image;
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
        ]);


        $event = new Event;
        $event->title_id = $request->get('title_id');
        $event->title_eng = $request->get('title_eng');
        $event->date = $request->get('date');
        $event->deskripsi_id = $request->get('deskripsi_id');
        $event->deskripsi_eng = $request->get('deskripsi_eng');


        // if($request->hasFile('image')){
        //     $PhotoName = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('images/image-event/'), $PhotoName);
        //     $event->image = $PhotoName;
        // }
        // dd($event)
        
        $event->save();

        $event = Event::latest()->first();

        if($request->has('filepath')){
            for ($x = 0; $x < count($request->file('filepath')); $x++) {
                $image = new Image;
                $image->id_event = $event->id;
                $image->sequence = $x + 1;
                $thumbnailName[$x] = time() . rand(1, 100) . '.' . $request->file('filepath')[$x]->extension();
                $request->file('filepath')[$x]->move(public_path('images/image-event/'), $thumbnailName[$x]);
                $image->filepath = $thumbnailName[$x];
                $image->save();

            }
        }



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
        // dd($request);   
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

        // if ($request->hasFile('image')) {
        //     $request->validate([
        //         'image' => 'mimes:png,jpeg,jpg|max:2048',
        //     ]);        
        //     if(isset($event->image)){
        //         $path = "images/image-event/";
        //         File::delete($path . $event->image);
        //     }
        //     $PhotoName = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('images/photo-assist/'), $PhotoName);
        //     $event->image = $PhotoName;
        //     $event->save();
        // }

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

        $event->Image->each(function ($image){
            $path = "images/image-event/";
                File::delete($path . $image->filepath);
            $image->delete();
        });

        $event->delete();

        return redirect('/admin/event/')->with('success', 'Data berhasil dihapus');
    }

    public function addImage(Request $request, $id)
    {

        if ($request->has('filepath')) {
            for ($x = 0; $x < count($request->file('filepath')); $x++) {
                $request->validate([
                    'filepath.' . $x => 'required|mimes:png,jpeg,jpg,webpg|max:2048',
                ]);
                $latestImage = Image::where('id_event', $id)->latest('sequence')->first();
                 if(isset($latestImage)){
                    $latestSequece = $latestImage->sequence + 1;
                }
                else {
                    $latestSequece = 1;
                }
                $image = new Image;
                $image->id_event = $id;
                $image->sequence = $latestSequece;
                $thumbnailName[$x] = time() . rand(1, 100) . '.' . $request->file('filepath')[$x]->extension();
                $request->file('filepath')[$x]->move(public_path('images/image-event/'), $thumbnailName[$x]);
                $image->filepath = $thumbnailName[$x];
                $image->save();
            }

            return redirect('/admin/event/' . $id . '/editImage')->with('success', 'Gambar baru berhasil ditambahkan');
        }
    }


    public function editImage($id)
    {
        $id_event = $id;
        $images = Image::where('id_event', $id)->orderBy('sequence', 'asc')->paginate(9);
        $iteration = $images->firstItem();

        return view('admin.event.image', compact('id_event', 'images', 'iteration'));
    }

    public function updateImage(Request $request, $id)
    {
        $image = Image::findOrFail($id);
        $request->validate([
            'sequence' => 'required',
            'filepath' => 'mimes:png,jpeg,jpg,webpg|max:2048',
        ]);

        $newSequence = $request->get('sequence');
        Image::where('id_event', $request->get('id_event'))
            ->where('id', '!=', $id)
            ->where('sequence', '>=', $newSequence)
            ->increment('sequence');

        if ($request->has('filepath')) {
            $path = "images/image-event/";
            // if ($image->filepath !== 'thumb.jpg') {
            File::delete($path . $image->filepath);
            // }

            $thumbnailName = time() . '.' . $request->filepath->extension();

            $request->filepath->move(public_path('images/image-event/'), $thumbnailName);
            $image->filepath = $thumbnailName;
        }

        $image->sequence = $newSequence;

        $image->save();

        return redirect('/admin/event/' . $request->get('id_event') . '/editImage')->with('success', 'Gambar berhasil diubah');
    }

    public function deleteImage(Request $request, $id)
    {
        $id_event = $request->get('id_event');
        $image = Image::findOrFail($id);
        $path = "images/image-event/";
        // if ($image->filepath !== 'thumb.jpg') {
            File::delete($path . $image->filepath);
        // }
        Image::where('id_event', $id_event)
            ->where('sequence', '>=', $image->sequence)->decrement('sequence');
        $image->delete();

        return redirect('/admin/event/' . $id_event . '/editImage')->with('success', 'Gambar berhasil dihapus');
    }
}
