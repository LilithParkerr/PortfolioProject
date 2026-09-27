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
                ->to(url('/#contact'))
                ->withErrors($e->errors())
                ->withInput();
        }

        return redirect()
            ->to(url('/#contact'))
            ->with('success', 'Thanks! Your message has been received.');
    }
}