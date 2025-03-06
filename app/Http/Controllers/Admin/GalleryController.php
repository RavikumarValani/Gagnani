<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filterType = $request->get('type');
        $galleries = Gallery::query()
            ->when($filterType, function ($query, $filterType) {
                return $query->where('type', $filterType);
            })
            ->orderBy('sort_order', 'asc')
            ->paginate();
        return view('admin.gallery.grid', ['galleries' => $galleries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'image' => 'required',
                'type' => 'required',
                'description' => 'required',
                'sort_order' => 'required|integer',
            ]);
        
            $imageName = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/gallery'), $imageName);
            }
        
            // Save to database
            Gallery::create([
                'image' => $imageName,
                'sort_order' => $data['sort_order'],
                'description' => $data['description'],
                'type' => $data['type'],
            ]);
        
            return redirect()->route('gallery.index')->with('success', 'Gallery added successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', ['gallery' => $gallery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        try {
            $request->validate([
                'sort_order' => 'required|integer',
                'image' => 'nullable',
                'type' => 'required',
                'description' => 'required',
            ]);
        
            // Update Sort Order
            $gallery->sort_order = $request->sort_order;
            $gallery->type = $request->type;
            $gallery->description = $request->description;
        
            // Handle Image Upload
            if ($request->hasFile('image')) {
                // Delete Old Image
                $imagePath = public_path('images/gallery/' . $gallery->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
        
                // Upload New Image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/gallery'), $imageName);
                $gallery->image = $imageName;
            }
        
            $gallery->save();
        
            return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully!');
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
            $gallery = Gallery::findOrFail($id); // Find the gallery by ID

            // Delete image from storage
            $imagePath = public_path('images/gallery/' . $gallery->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            // Delete record from the database
            $gallery->delete();
        
            return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}
