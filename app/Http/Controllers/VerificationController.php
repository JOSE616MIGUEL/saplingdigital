<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    public function sendVerificationCode(Request $request)
    {
        $user = Auth::user();

        $verificationCode = mt_rand(100000, 999999);
        $user->verification_code = $verificationCode;
        $user->save();

        // Envía el código por correo electrónico usando Mailgun
        Mail::raw("Tu código de verificación es: $verificationCode", function ($message) use ($user) {
            $message->to($user->email)->subject('Código de Verificación');
        });

        return response()->json(['message' => 'Código de verificación enviado correctamente']);
    }
}
