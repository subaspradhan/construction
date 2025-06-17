<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testi = Testimonial::latest()->paginate(10);
        return view('backend.testimonial.index', compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimonial.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'image' => 'required',
            'designation' => 'required',
            'message' => 'required',
        ]);

        try {
            $testi = new Testimonial();
            $testi->name = $request->name;
            $testi->designation = $request->designation;

            $testi->message = $request->message;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('testis', $filename, 'public');
                $testi->image = 'testis/' . $filename;
            }

            $testi->save();

            return redirect()->route('testi.admin')->with('success', 'Testimonial added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Testimonial not added: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testi = Testimonial::find($id);
        return view('backend.testimonial.edit', compact('testi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         try {
            $testi = Testimonial::findOrFail($id);
            $testi->name = $request->name;
             $testi->designation = $request->designation;
            $testi->message = $request->message;
    
            if ($request->hasFile('image')) {
                if ($testi->image && Storage::disk('public')->exists($testi->image)) {
                    Storage::disk('public')->delete($testi->image);
                }
    
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('testis', $filename, 'public');
                $testi->image = 'testis/' . $filename;
            }
    
            $testi->save();
    
            return redirect()->route('testi.admin')->with('success', 'Testimonial updated successfully.');
        } catch (\Exception $e) {
            Log::error('Testimonial update failed: ' . $e->getMessage());
    
            return redirect()->route('testi.admin')->with('error', 'Testimonial not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testi = Testimonial::find($id);

        if (!$testi) {
            return redirect()->back()->with('error', 'Testimonial not found.');
        }

        if ($testi->image && Storage::disk('public')->exists($testi->image)) {
            Storage::disk('public')->delete($testi->image);
        }

        $testi->delete();

        return redirect()->back()->with('success', 'Testimonial has been deleted successfully.');
    }
}
