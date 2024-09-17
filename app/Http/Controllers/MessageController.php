<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        $messages = Message::orderBy('is_readed', 'asc')   // Unread first (is_read = false)
            ->orderBy('created_at', 'desc')     // Then sort by date (newest first)
            ->paginate(10);

        $page = "Pesan";
        return view("dashboard.pages.pesan", compact("messages", "page"));
    }

    public function read($id)
    {
        $message = Message::find($id);
        $message->is_readed = true;
        $message->save();

        return redirect()->back();
    }

    public function add (Request $request){
        $message = new Message();
        $message->subject = $request->subject;
        $message->name = $request->name;
        $message->content = $request->content;
        $message->email = $request->email;
        $message->save();
        
        return redirect("/kontak")->with("success","");
    }
}
