<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'message' => ['required', 'string', 'max:5000'],
            ]);
        } catch (ValidationException $e) {
            return redirect()
                ->to(url('/'))
                ->withErrors($e->errors())
                ->withInput()
                ->with('scroll_to_contact', true);
        }

        return redirect()
            ->to(url('/'))
            ->with('success', 'Thanks! Your message has been received.')
            ->with('scroll_to_contact', true);
    }
}