<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Mail\ContactUsMail;
use Mail;
use Exception;

class IndexController extends Controller
{
    public function index() {
        $banners = Banner::query()
            ->orderBy('sort_order', 'asc')
            ->paginate();
        return view('home', ['banners' => $banners]);
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

    public function sendMail(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name'    => 'nullable',
                'email'   => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);
    
            // Send email to admin
            Mail::to('admin@example.com')->send(new ContactUsMail($validatedData));
    
            return redirect()->route('contact_us')->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Oops! An error occured and your message could not be sent.'])->withInput();
        }
    }
}
