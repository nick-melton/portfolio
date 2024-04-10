<?php

namespace App\Http\Controllers;

use App\Mail\JobEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMessage(Request $request) : JsonResponse {
        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        if(!empty($email) && !empty($message)) {
            $to = config('mail.to.address');
            Mail::to($to)->send(new JobEmail([
                'name' => $name ?? '',
                'email' => $email,
                'message' => $message,
            ]));

            $response = 'The message was sent, thank you!';
        } else {
            $response = 'Fill the email and message fields';
        }

        return response()->json([
            'data' => $response
        ]);
    }
}
