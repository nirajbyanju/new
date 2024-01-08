<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule; // Update the import statement
use Illuminate\Support\Facades\Http;

class ReCaptcha implements Rule // Update the interface
{
    public function passes($attribute, $value): bool // Update the method signature
    {
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
            'response' => $value
        ]);
        
        return $response->json()["success"];
    }

    public function message(): string // Update the return type
    {
        return 'The Google reCAPTCHA verification failed.';
    }
}

