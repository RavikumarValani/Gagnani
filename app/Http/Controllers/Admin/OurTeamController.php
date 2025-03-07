<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = OurTeam::query()
            ->orderBy('sort_order', 'asc')
            ->paginate();
        return view('admin.ourTeam.grid', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ourTeam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'image' => 'required',
                'name' => 'required',
                'position' => 'required',
                'google' => 'nullable',
                'linkedin' => 'nullable',
                'facebook' => 'nullable',
                'twitter' => 'nullable',
                'description' => 'required',
                'sort_order' => 'required|integer',
            ]);
        
            $imageName = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/ourTeam'), $imageName);
            }
        
            // Save to database
            OurTeam::create([
                'image' => $imageName,
                'sort_order' => $data['sort_order'],
                'name' => $data['name'],
                'position' => $data['position'],
                'google' => $data['google'],
                'linkedin' => $data['linkedin'],
                'facebook' => $data['facebook'],
                'twitter' => $data['twitter'],
                'description' => $data['description'],
            ]);
        
            return redirect()->route('ourTeam.index')->with('success', 'Team member added successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurTeam $ourTeam)
    {
        return view('admin.ourTeam.edit', ['ourTeam' => $ourTeam]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurTeam $ourTeam)
    {
        try {
            $request->validate([
                'image' => 'nullable',
                'name' => 'required',
                'position' => 'required',
                'google' => 'nullable',
                'linkedin' => 'nullable',
                'facebook' => 'nullable',
                'twitter' => 'nullable',
                'description' => 'required',
                'sort_order' => 'required|integer',
            ]);
        
            // Update Sort Order
            $ourTeam->sort_order = $request->sort_order;
            $ourTeam->name = $request->name;
            $ourTeam->position = $request->position;
            $ourTeam->google = $request->google;
            $ourTeam->linkedin = $request->linkedin;
            $ourTeam->facebook = $request->facebook;
            $ourTeam->twitter = $request->twitter;
            $ourTeam->description = $request->description;
        
            // Handle Image Upload
            if ($request->hasFile('image')) {
                // Delete Old Image
                $imagePath = public_path('images/ourTeam/' . $ourTeam->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
        
                // Upload New Image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/ourTeam'), $imageName);
                $ourTeam->image = $imageName;
            }
        
            $ourTeam->save();
        
            return redirect()->route('ourTeam.index')->with('success', 'Team member updated successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $ourTeam = OurTeam::findOrFail($id); // Find the ourTeam by ID

            // Delete image from storage
            $imagePath = public_path('images/ourTeam/' . $ourTeam->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            // Delete record from the database
            $ourTeam->delete();
        
            return redirect()->route('ourTeam.index')->with('success', 'Team member deleted successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}
