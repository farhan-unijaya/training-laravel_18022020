<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Sample;
use App\Feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function send(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $subject = $request->subject;

        $feedback = Feedback::create($request->all());

        // Mail::raw($message,function($message) use ($email,$subject) {
        //     $message->from(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));
        //     $message->to($email);
        //     $message->subject($subject);
        // });

        Mail::to($request->email)->send(new Sample($feedback));

    }

    public function list()
    {
        $foo = "Training";

        return view('list',compact('foo'));
    }
}
