<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $userMessage = $request->input('message');
        $reply = $this->generateReply($userMessage);
        return response()->json(['reply' => $reply]);
    }

    private function generateReply($message)
    {
        // Implementa tu lógica de respuesta aquí
        if (str_contains(strtolower($message), 'hola')) {
            return '¡Hola! ¿En qué puedo ayudarte?';
        }

        return 'Gracias por tu mensaje, te responderemos pronto.';
    }
}
