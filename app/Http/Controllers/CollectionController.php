<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::paginate(8);
        $iteration = $collections->firstItem();
        return view('admin.collection.index', compact('collections', 'iteration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'title_eng' => 'required',
            'desc_id' => 'required',
            'desc_eng' => 'required',
        ]);

        $collection = new Collection;
        $collection->title_id = $request->get('title_id');
        $collection->title_eng = $request->get('title_eng');
        $collection->desc_id = $request->get('desc_id');
        $collection->desc_eng = $request->get('desc_eng');

        $collection->save();

        $collection = Collection::latest()->first();

        if($request->has('filepath')){
            for ($x = 0; $x < count($request->file('filepath')); $x++) {
                $image = new Image;
                $image->id_collection = $collection->id;
                $image->sequence = $x + 1;
                $thumbnailName[$x] = time() . rand(1, 100) . '.' . $request->file('filepath')[$x]->extension();
                $request->file('filepath')[$x]->move(public_path('images/image-collection/'), $thumbnailName[$x]);
                $image->filepath = $thumbnailName[$x];
                $image->save();

            }
        }

        return redirect('/admin/collection')->with('success', 'Data baru telah ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::find($id);

        return view('admin.collection.show', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $collection = Collection::find($id);

        if ($request->get('title_id')) {
            $request->validate([
                'title_id' => 'required',
            ]);
            $collection->title_id = $request->get('title_id');
            $collection->save();
        }
        if ($request->get('title_eng')) {
            $request->validate([
                'title_eng' => 'required',
            ]);
            $collection->title_eng = $request->get('title_eng');
            $collection->save();
        }
        if ($request->get('desc_id')) {
            $request->validate([
                'desc_id' => 'required',
            ]);
            $collection->desc_id = $request->get('desc_id');
            $collection->save();
        }
        if ($request->get('desc_eng')) {
            $request->validate([
                'desc_eng' => 'required',
            ]);
            $collection->desc_eng = $request->get('desc_eng');
            $collection->save();
        }

        return redirect('/admin/collection/' . $collection->id )->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = Collection::findOrFail($id);

        $collection->Image->each(function ($image){
            $path = "images/image-collection/";
                File::delete($path . $image->filepath);
            $image->delete();
        });

        $collection->delete();

        return redirect('/admin/collection/')->with('success', 'Data berhasil dihapus');
    }

    public function addImage(Request $request, $id)
    {

        if ($request->has('filepath')) {
            for ($x = 0; $x < count($request->file('filepath')); $x++) {
                $request->validate([
                    'filepath.' . $x => 'required|mimes:png,jpeg,jpg,webpg|max:2048',
                ]);
                $latestImage = Image::where('id_collectio ', $id)->latest('sequence')->first();
                 if(isset($latestImage)){
                    $latestSequece = $latestImage->sequence + 1;
                }
                else {
                    $latestSequece = 1;
                }
                $image = new Image;
                $image->id_collection = $id;
                $image->sequence = $latestSequece;
                $thumbnailName[$x] = time() . rand(1, 100) . '.' . $request->file('filepath')[$x]->extension();
                $request->file('filepath')[$x]->move(public_path('images/image-collection/'), $thumbnailName[$x]);
                $image->filepath = $thumbnailName[$x];
                $image->save();
            }

            return redirect('/admin/' . $id . '/editImage')->with('success', 'Gambar baru berhasil ditambahkan');
        }
    }


    public function editImage($id)
    {
        $id_collection = $id;
        $images = Image::where('id_collection', $id)->orderBy('sequence', 'asc')->paginate(9);
        $iteration = $images->firstItem();

        return view('admin.collection.image', compact('id_collection', 'images', 'iteration'));
    }

    public function updateImage(Request $request, $id)
    {
        $image = Image::findOrFail($id);
        $request->validate([
            'sequence' => 'required',
            'filepath' => 'mimes:png,jpeg,jpg,webpg|max:2048',
        ]);

        $newSequence = $request->get('sequence');
        Image::where('id_collection', $request->get('id_collection'))
            ->where('id', '!=', $id)
            ->where('sequence', '>=', $newSequence)
            ->increment('sequence');

        if ($request->has('filepath')) {
            $path = "images/image-collection/";
            // if ($image->filepath !== 'thumb.jpg') {
            File::delete($path . $image->filepath);
            // }

            $thumbnailName = time() . '.' . $request->filepath->extension();

            $request->filepath->move(public_path('images/image-collection/'), $thumbnailName);
            $image->filepath = $thumbnailName;
        }

        $image->sequence = $newSequence;

        $image->save();

        return redirect('/admin/' . $request->get('id_collection') . '/editImage')->with('success', 'Gambar berhasil diubah');
    }

    public function deleteImage(Request $request, $id)
    {
        $id_collection = $request->get('id_collection');
        $image = Image::findOrFail($id);
        $path = "images/image-collection/";
        // if ($image->filepath !== 'thumb.jpg') {
            File::delete($path . $image->filepath);
        // }
        Image::where('id_collection', $id_collection)
            ->where('sequence', '>=', $image->sequence)->decrement('sequence');
        $image->delete();

        return redirect('/admin/' . $id_collection . '/editImage')->with('success', 'Gambar berhasil dihapus');
    }
}
