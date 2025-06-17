<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $price = Price::latest()->paginate(10);
        return view('backend.price.index', compact('price'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.price.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'price' => 'required|string',
            'tags' => 'required|array'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Blog not uploaded. Please correct the errors.');
        }

        try {
            $price = new Price();
            $price->name = $request->name;
            $price->price = $request->price;
            $price->details = $request->details;
            $tagsString = $request->input('tags')[0]; 
            $tagsArray = explode(',', $tagsString);
            $price->tags = json_encode($tagsArray);

            $price->save();

            return redirect()->route('price.admin')->with('success', 'Price uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Price not uploaded. Server error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $price = Price::find($id);
        $price->tags = json_decode($price->tags, true);
        return view('backend.price.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $price = Price::findOrFail($id);
            $price->name = $request->name;
            $price->price = $request->price;
            $price->details = $request->details;
            $tagsString = $request->input('tags')[0]; 
            $tagsArray = explode(',', $tagsString);
            $price->tags = json_encode($tagsArray);
    
            $price->save();
    
            return redirect()->route('price.admin')->with('success', 'Price updated successfully.');
        } catch (\Exception $e) {
            Log::error('Price update failed: ' . $e->getMessage());
    
            return redirect()->back()->with('error', 'Price not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $price = Price::find($id);
        $price->delete();

        return redirect()->back()->with('success', 'Price has been deleted successfully.');
    }
}
