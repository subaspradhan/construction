<?php

namespace App\Http\Controllers;

use App\Models\Awards;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $award = Awards::first();
        return view('backend.reward.index', compact('award'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $award = Awards::find($id);
        return view('backend.reward.edit', compact('award'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Awards $awards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $award = Awards::findOrFail($id);
            $award->client = $request->client;
            $award->award = $request->award;
            $award->projects = $request->projects;
            $award->worker = $request->worker;
            $award->save();
    
            return redirect()->route('award.admin')->with('success', 'Award updated successfully.');
        } catch (\Exception $e) {
            Log::error('Award update failed: ' . $e->getMessage());
    
            return redirect()->route('award.admin')->with('error', 'Award not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Awards $awards)
    {
        //
    }
}
