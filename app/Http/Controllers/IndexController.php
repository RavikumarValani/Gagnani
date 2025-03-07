<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\SuccessStory;
use App\Models\OurTeam;
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
        $members = OurTeam::query()
            ->orderBy('sort_order', 'asc')
            ->paginate();
        return view('about', ['members' => $members]);
    }

    public function contactUs() {
        return view('contact');
    }

    public function career() {
        return view('career');
    }

    public function successStory() {
        $successStories = SuccessStory::query()
            ->orderBy('sort_order', 'asc')
            ->paginate();
        return view('successStory', ['successStories' => $successStories]);
    }

    public function sendMail(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'type'    => 'required',
                'name'    => 'nullable',
                'email'   => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);
    
            // Send email to admin
            Mail::to('admin@example.com')->send(new ContactUsMail($validatedData));
    
            if($validatedData['type'] == 'Career'){
                return redirect()->route('career')->with('success', 'Your message has been sent successfully!');
            }
            return redirect()->route('contact_us')->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Oops! An error occured and your message could not be sent.'])->withInput();
        }
    }
}
