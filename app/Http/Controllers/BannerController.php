<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::latest()->paginate(10);
        return view('backend.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
        ]);

        try {
            $banner = new Banner();
            $banner->title = $request->title;
            $banner->sub_title = $request->sub_title;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('banners', $filename, 'public');
                $banner->image = 'banners/' . $filename;
            }

            $banner->save();

            return redirect()->route('banner.admin')->with('success', 'Banner added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Banner not added: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $banner = Banner::find($id);
        return view('backend.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $banner = Banner::findOrFail($id);
            $banner->title = $request->title;
            $banner->sub_title = $request->sub_title;
    
            if ($request->hasFile('image')) {
                if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                    Storage::disk('public')->delete($banner->image);
                }
    
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('banners', $filename, 'public');
                $banner->image = 'banners/' . $filename;
            }
    
            $banner->save();
    
            return redirect()->route('banner.admin')->with('success', 'Banner updated successfully.');
        } catch (\Exception $e) {
            Log::error('Banner update failed: ' . $e->getMessage());
    
            return redirect()->route('banner.admin')->with('error', 'Banner not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);

        if (!$banner) {
            return redirect()->back()->with('error', 'Banner not found.');
        }

        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'Banner has been deleted successfully.');
    }
}
