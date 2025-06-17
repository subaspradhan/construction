<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::latest()->paginate(10);
        return view('backend.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.add');
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
            'image' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:15360',
            'pcondetails' => 'required|string',
            'pconimage' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:15360',
            'postcondetails' => 'required|string',
            'postconimage' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:15360',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Service not uploaded. Please correct the errors.');
        }

        try {
            $service = new Service();
            $service->name = $request->name;
            $service->details = $request->details;
            $service->pcondetails = $request->pcondetails;
            $service->postcondetails = $request->postcondetails;

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('services', $filename, 'public');
                $service->image = 'services/' . $filename;
            }
            if ($request->hasFile('pconimage')) {
                $file1 = $request->file('pconimage');
                $filename1 = uniqid() . '_' . $file1->getClientOriginalName();
                $file1->storeAs('pconimage', $filename1, 'public');
                $service->pconimage = 'pconimage/' . $filename1;
            }
            if ($request->hasFile('postconimage')) {
                $file2 = $request->file('postconimage');
                $filename2 = uniqid() . '_' . $file2->getClientOriginalName();
                $file2->storeAs('postconimage', $filename2, 'public');
                $service->postconimage = 'postconimage/' . $filename2;
            }
            $service->save();

            return redirect()->route('service.admin')->with('success', 'Service uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Service not uploaded. Server error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->name = $request->name;
            $service->details = $request->details;
            $service->pcondetails = $request->pcondetails;
            $service->postcondetails = $request->postcondetails;
    
            if ($request->hasFile('image')) {
                if ($service->image && Storage::disk('public')->exists($service->image)) {
                    Storage::disk('public')->delete($service->image);
                }
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('services', $filename, 'public');
                $service->image = 'services/' . $filename;
            }
            if ($request->hasFile('pconimage')) {
                if ($service->pconimage && Storage::disk('public')->exists($service->pconimage)) {
                    Storage::disk('public')->delete($service->pconimage);
                }
                $file1 = $request->file('pconimage');
                $filename1 = uniqid() . '_' . $file1->getClientOriginalName();
                $file1->storeAs('pconimage', $filename1, 'public');
                $service->pconimage = 'pconimage/' . $filename1;
            }
            if ($request->hasFile('postconimage')) {
                if ($service->postconimage && Storage::disk('public')->exists($service->postconimage)) {
                    Storage::disk('public')->delete($service->postconimage);
                }
                $file2 = $request->file('postconimage');
                $filename2 = uniqid() . '_' . $file2->getClientOriginalName();
                $file2->storeAs('postconimage', $filename2, 'public');
                $service->postconimage = 'postconimage/' . $filename2;
            }
    
            $service->save();
    
            return redirect()->route('service.admin')->with('success', 'Service updated successfully.');
        } catch (\Exception $e) {
            Log::error('Service update failed: ' . $e->getMessage());
    
            return redirect()->back()->with('error', 'Service not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->with('error', 'service not found.');
        }

        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        if ($service->pconimage && Storage::disk('public')->exists($service->pconimage)) {
            Storage::disk('public')->delete($service->pconimage);
        }
        if ($service->postconimage && Storage::disk('public')->exists($service->postconimage)) {
            Storage::disk('public')->delete($service->postconimage);
        }

        $service->delete();

        return redirect()->back()->with('success', 'Service has been deleted successfully.');
    }
}
