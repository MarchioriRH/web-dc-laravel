<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
            'subject' => $request->subject,
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('defensa.civil.tandil@gmail.com')
                    ->subject('Mensaje de contacto: ' . $data['subject']);
        });

        return back()->with('success', '¡Gracias por contactarnos! En cuanto nos sea posible, nos pondremos en contacto con usted.');
    }
}
