<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * check for email address
     *
     * @param $request
     * @return json
     */
    public function checkEmail(Request $request)
{
    $input = $request->only(['email']);

    $request_data = [
        'email' => 'required|email|unique:users,email', // Unique check for 'email' column in 'users' table
    ];

    $validator = Validator::make($input, $request_data);

    if ($validator->fails()) {
        $errors = $validator->errors()->all();

        return response()->json([
            'success' => false,
            'message' => $errors,
        ]);
    } else {
        return response()->json([
            'success' => true,
            'message' => 'The email is available'
        ]);
    }
}


}