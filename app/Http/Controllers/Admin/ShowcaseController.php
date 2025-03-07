<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Showcase;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showcase = Showcase::first();
        if($showcase){
            return view('admin.showcase.edit', ['showcase' => $showcase]);
        } else {
            return view('admin.showcase.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.showcase.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'image' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]);
        
            $imageName = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/showcase'), $imageName);
            }
        
            // Save to database
            Showcase::create([
                'image' => $imageName,
                'title' => $data['title'],
                'description' => $data['description'],
            ]);
        
            return redirect()->route('showcase.index')->with('success', 'Showcase added successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showcase $showcase)
    {
        return view('admin.showcase.edit', ['showcase' => $showcase]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Showcase $showcase)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'nullable',
            ]);
        
            $showcase->title = $request->title;
            $showcase->description = $request->description;
        
            // Handle Image Upload
            if ($request->hasFile('image')) {
                // Delete Old Image
                $imagePath = public_path('images/showcase/' . $showcase->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
        
                // Upload New Image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/showcase'), $imageName);
                $showcase->image = $imageName;
            }
        
            $showcase->save();
        
            return redirect()->route('showcase.index')->with('success', 'Showcase updated successfully!');
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
            $showcase = Showcase::findOrFail($id); // Find the showcase by ID

            // Delete image from storage
            $imagePath = public_path('images/showcase/' . $showcase->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            // Delete record from the database
            $showcase->delete();
        
            return redirect()->route('showcase.index')->with('success', 'Showcase deleted successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}
