<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    //
    public function contactForm()
    {
        return view('contactForm');
    }
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'achraf.azizi@e-polytechnique.ma',
                'fromName' => $request->name,
                'fromEmail' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message

            ];

            Mail::raw($mail_data['message'], function ($message) use ($mail_data) {

                $message->to($mail_data['recipient']);
                $message->from(env("MAIL_USERNAME"), ($mail_data['fromEmail'])); // Replace with your desired sender details
                $message->subject($mail_data['subject']);
            });
            // Mail::send('email-template', ['mail_data' => $mail_data], function ($message) use ($mail_data) {
            //     $message->to($mail_data['recipient'])
            //             ->from($mail_data['fromEmail'], $mail_data['fromName'])
            //             ->subject($mail_data['subject']);
            // });

            return redirect()->back()->with('success', 'Email sent');
        } else {
            return redirect()->back()->with('error', 'check your connection');
        }
    }
    public function isOnline($site = "http://youtube.com/")
    {
        if (fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }

}