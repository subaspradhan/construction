<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::latest()->paginate(10);
        return view('backend.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        try {
            $gallery = new Gallery();
            $gallery->name = $request->name;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('galleries', $filename, 'public');
                $gallery->image = 'galleries/' . $filename;
            }

            $gallery->save();

            return redirect()->route('gallery.admin')->with('success', 'Image added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Image not added: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->name = $request->name;
    
            if ($request->hasFile('image')) {
                if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                    Storage::disk('public')->delete($gallery->image);
                }
    
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('galleries', $filename, 'public');
                $gallery->image = 'galleries/' . $filename;
            }
    
            $gallery->save();
    
            return redirect()->route('gallery.admin')->with('success', 'Image updated successfully.');
        } catch (\Exception $e) {
            Log::error('Image update failed: ' . $e->getMessage());
    
            return redirect()->route('gallery.admin')->with('error', 'Image not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return redirect()->back()->with('error', 'Image not found.');
        }

        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->back()->with('success', 'Image has been deleted successfully.');
    }
}
