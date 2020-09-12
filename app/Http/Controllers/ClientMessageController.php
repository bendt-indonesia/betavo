<?php

namespace App\Http\Controllers;

use App\ClientMessage;
use App\Mail\NewMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientMessageController extends Controller
{
    public function saveMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);
        $newMessage = new ClientMessage();

        $newMessage->name = $request->name;
        $newMessage->message = $request->message;
        $newMessage->email = $request->email;
        $newMessage->origin = $request->ip();

        $isSaved = $newMessage->save();
        if ($isSaved) {
            Mail::to(env("MAIL_SEND_FROM", "edwin@algoinc.id"))->send(new NewMessage($newMessage));
            return response()->json(['message' => 'Terima kasih.'], 201);
        } else {
            return response()->json(['message' => 'Maaf, gagal mengirim.'], 500);
        }
    }

    public function viewMessage(Request $request)
    {
        $newMessage = ClientMessage::orderBy('id', 'DESC')->paginate(50);
        $customPath = '/message';
        $newMessage->withPath($customPath);
        return view('message.index', ['pesan' => $newMessage]);
    }
}
