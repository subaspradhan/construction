<?php

namespace App\Http\Controllers;

use App\Models\Enquary;
use Illuminate\Http\Request;

class EnquaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquary = Enquary::latest()->paginate(10);
        return view('backend.enquary.index', compact('enquary'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'price_id' => 'required'
        ]);

        try {
            $enquary = new Enquary();
            $enquary->name = $request->name;
            $enquary->email = $request->email;
            $enquary->phone = $request->phone;
            $enquary->message = $request->message;
            $enquary->price_id = $request->price_id;

            $enquary->save();

            return redirect()->back()->with('success', 'Your Message Send successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Your Message not Send: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Enquary $enquary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $enquary = Enquary::find($id);
        return view('backend.enquary.edit', compact('enquary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $enquary = Enquary::findOrFail($id);
        $enquary->status = $request->status;
        $enquary->save();
        return redirect()->route('enquary.admin')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquary $enquary)
    {
        //
    }
}
