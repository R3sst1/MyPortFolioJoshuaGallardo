<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Validation rules for the contact form.
     */
    private array $rules = [
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|min:10|max:3000',
    ];

    /**
     * Handle the contact form submission.
     */
    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->rules);

        try {
            $this->sendContactEmail($validated);
        } catch (\Throwable $e) {
            Log::error('Contact form mail failed', [
                'error'   => $e->getMessage(),
                'sender'  => $validated['email'],
                'subject' => $validated['subject'],
            ]);

            return back()
                ->withInput()
                ->with('error', 'Sorry, something went wrong while sending your message. Please try again later.');
        }

        return back()->with('success', 'Thanks for reaching out! I have received your message and will get back to you as soon as possible.');
    }

    /**
     * Dispatch the contact form mailable.
     *
     * @param  array<string, string>  $data
     */
    private function sendContactEmail(array $data): void
    {
        Mail::to('joshuagallardo6588@gmail.com')
            ->send(new ContactFormMail($data));
    }
}
