<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $successStories = SuccessStory::query()
            ->orderBy('sort_order', 'asc')
            ->paginate();
        return view('admin.successStory.grid', ['successStories' => $successStories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.successStory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'image' => 'required',
                'description' => 'required',
                'sort_order' => 'required|integer',
            ]);
        
            $imageName = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/successStory'), $imageName);
            }
        
            // Save to database
            SuccessStory::create([
                'image' => $imageName,
                'sort_order' => $data['sort_order'],
                'description' => $data['description'],
            ]);
        
            return redirect()->route('successStory.index')->with('success', 'SuccessStory added successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuccessStory $successStory)
    {
        return view('admin.successStory.edit', ['successStory' => $successStory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuccessStory $successStory)
    {
        try {
            $request->validate([
                'sort_order' => 'required|integer',
                'description' => 'required',
                'image' => 'nullable',
            ]);
        
            // Update Sort Order
            $successStory->sort_order = $request->sort_order;
            $successStory->description = $request->description;
        
            // Handle Image Upload
            if ($request->hasFile('image')) {
                // Delete Old Image
                $imagePath = public_path('images/successStory/' . $successStory->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
        
                // Upload New Image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/successStory'), $imageName);
                $successStory->image = $imageName;
            }
        
            $successStory->save();
        
            return redirect()->route('successStory.index')->with('success', 'SuccessStory updated successfully!');
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
            $successStory = SuccessStory::findOrFail($id); // Find the successStory by ID

            // Delete image from storage
            $imagePath = public_path('images/successStory/' . $successStory->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            // Delete record from the database
            $successStory->delete();
        
            return redirect()->route('successStory.index')->with('success', 'SuccessStory deleted successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}
