<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::query()
            ->orderBy('sort_order', 'asc')
            ->paginate();
        return view('admin.banner.grid', ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $formData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'sort_order' => 'required|integer',
            ]);
        
            $imageName = null;
            // echo "<pre>";
            // print_r($request);
            // die;
            if ($request->image) {
                // $image = $request->file('image');
                // $imageName = time() . '.' . $image->getClientOriginalExtension();
                // $image->move(public_path('images/banner'), $imageName);
                $base64_image         = $request->image;
                list($type, $data)  = explode(';', $base64_image);
                list(, $data)       = explode(',', $data);
                $data               = base64_decode($data);
                $imageName         = "thumb_".date('YmdHis').'.png';
                $thumb_path         = public_path("images/banner/" . $imageName);
                file_put_contents($thumb_path, $data);
            }
        
            // Save to database
            Banner::create([
                'image' => $imageName,
                'sort_order' => $formData['sort_order'],
                'title' => $formData['title'],
                'description' => $formData['description'],
            ]);
        
            return redirect()->route('banners.index')->with('success', 'Banner added successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        try {
            $request->validate([
                'sort_order' => 'required|integer',
                'title' => 'required',
                'description' => 'required',
                'image' => 'nullable',
            ]);
        
            // Update Sort Order
            $banner->sort_order = $request->sort_order;
            $banner->title = $request->title;
            $banner->description = $request->description;
        
            // Handle Image Upload
            if ($request->hasFile('image')) {
                // Delete Old Image
                $imagePath = public_path('images/banner/' . $banner->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
        
                // Upload New Image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/banner'), $imageName);
                $banner->image = $imageName;
            }
        
            $banner->save();
        
            return redirect()->route('banners.index')->with('success', 'Banner updated successfully!');
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
            $banner = Banner::findOrFail($id); // Find the banner by ID

            // Delete image from storage
            $imagePath = public_path('images/banner/' . $banner->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            // Delete record from the database
            $banner->delete();
        
            return redirect()->route('banners.index')->with('success', 'Banner deleted successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}
