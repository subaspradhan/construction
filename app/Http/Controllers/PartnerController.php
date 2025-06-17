<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner = Partner::latest()->paginate(10);
        return view('backend.partner.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.partner.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'type' => 'required',
            'details' => 'required',
        ]);

        try {
            $partner = new Partner();
            $partner->name = $request->name;
            $partner->type = $request->type;
            $partner->details = $request->details;


            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('partners', $filename, 'public');
                $partner->image = 'partners/' . $filename;
            }

            $partner->save();

            return redirect()->route('partner.admin')->with('success', 'Partner added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Partner not added: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('backend.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $partner = Partner::findOrFail($id);
            $partner->name = $request->name;
            $partner->type = $request->type;
            $partner->details = $request->details;
            
            if ($request->hasFile('image')) {
                if ($partner->image && Storage::disk('public')->exists($partner->image)) {
                    Storage::disk('public')->delete($partner->image);
                }
    
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('partners', $filename, 'public');
                $partner->image = 'partners/' . $filename;
            }
    
            $partner->save();
    
            return redirect()->route('partner.admin')->with('success', 'Partner updated successfully.');
        } catch (\Exception $e) {
            Log::error('Partner update failed: ' . $e->getMessage());
    
            return redirect()->route('partner.admin')->with('error', 'Partner not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $partner = Partner::find($id);

        if (!$partner) {
            return redirect()->back()->with('error', 'Partner not found.');
        }

        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }

        $partner->delete();

        return redirect()->back()->with('success', 'Partner has been deleted successfully.');
    }
}
