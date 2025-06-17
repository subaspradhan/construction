<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::latest()->paginate(10);
        return view('backend.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'details' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:15360',
            'cname' => 'required|string',
            'bname' => 'required|string',
            'aname' => 'required|string',
            'price' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Project not uploaded. Please correct the errors.');
        }

        try {
            $project = new Project();
            $project->name = $request->name;
            $project->details = $request->details;
            $project->cname = $request->cname;
            $project->bname = $request->bname;
            $project->aname = $request->aname;
            $project->price = $request->price;

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('projects', $filename, 'public');
                $project->image = 'projects/' . $filename;
            }
            
            $project->save();

            return redirect()->route('project.admin')->with('success', 'Project uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Project not uploaded. Server error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('backend.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->name = $request->name;
            $project->details = $request->details;
            $project->cname = $request->cname;
            $project->bname = $request->bname;
            $project->aname = $request->aname;
            $project->price = $request->price;
    
            if ($request->hasFile('image')) {
                if ($project->image && Storage::disk('public')->exists($project->image)) {
                    Storage::disk('public')->delete($project->image);
                }
                $file = $request->file('image');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->storeAs('projects', $filename, 'public');
                $project->image = 'projects/' . $filename;
            }
           
            $project->save();
    
            return redirect()->route('project.admin')->with('success', 'Project updated successfully.');
        } catch (\Exception $e) {
            Log::error('Project update failed: ' . $e->getMessage());
    
            return redirect()->back()->with('error', 'Project not updated. Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return redirect()->back()->with('error', 'Project not found.');
        }

        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }
        

        $project->delete();

        return redirect()->back()->with('success', 'Project has been deleted successfully.');
    }
}
