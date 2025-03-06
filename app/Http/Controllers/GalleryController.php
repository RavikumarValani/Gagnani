<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function threedElevation() {
        $galleries = Gallery::query()
            ->orderBy('sort_order', 'asc')
            ->where('type', '3d-elevation')
            ->paginate();
        return view('gallery/threed_elevation', ['galleries' => $galleries]);
    }
    
    public function interiorDesign() {
        $galleries = Gallery::query()
            ->orderBy('sort_order', 'asc')
            ->where('type', 'interior-design')
            ->paginate();
        return view('gallery/interior_design', ['galleries' => $galleries]);
    }

    public function liveSitePhotos() {
        $galleries = Gallery::query()
            ->orderBy('sort_order', 'asc')
            ->where('type', 'live-site-photos')
            ->paginate();
        return view('gallery/live_site_photos', ['galleries' => $galleries]);
    }

    public function aboutUs() {
        return view('about');
    }

    public function contactUs() {
        return view('contact');
    }

    public function successStory() {
        return view('successStory');
    }
}
