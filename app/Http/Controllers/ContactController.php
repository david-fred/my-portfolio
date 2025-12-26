<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
            'phone' => 'nullable|string|max:20',
        ]);

        $contact = Contact::create($validated);

        // Send email notification
        try {
            $recipientEmail = config('portfolio.contact.email', config('mail.from.address'));
            Mail::to($recipientEmail)->send(new ContactNotification($contact));
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::error('Failed to send contact notification email: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for reaching out! I will get back to you soon.');
    }
}
