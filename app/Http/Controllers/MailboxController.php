<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mailbox;

class MailboxController extends Controller
{
    public function index()
    {
       $mailTout = Mailbox::All();
       return view("admin.mail.main",compact("mailTout"));
    }

    public function store(Request $request)
    {
        request()->validate([
            "nom"=>["required"],
            "email"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
        ]);

        $mail = new Mailbox();
        $mail->nom = $request->nom;
        $mail->email = $request->email;
        $mail->titre = $request->titre;
        $mail->description = $request->description;
        $mail->save();
        return redirect()->back()->with("success","message bien envoyé");
    }

    public function destroy(Mailbox $mailbox)
    {
       $mailbox->delete();
       return redirect()->back()->with("warning","mail delete");
    }
}
