<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function facilities()
    {
        return view('front.facilities');
    }

    public function rooms()
    {
        return view('front.rooms');
    }

    public function gallery()
    {
        $room = Gallery::where('for', 'room')->get();
        $loopy = Gallery::where('for', 'loopy')->get();
        $gym = Gallery::where('for', 'gym')->get();
        $restaurant = Gallery::where('for', 'restaurant')->get();
        $swimming = Gallery::where('for', 'swimming')->get();
        return view('front.gallery', [
            'room' => $room,
            'loopy' => $loopy,
            'gym' => $gym,
            'restaurant' => $restaurant,
            'swimming' => $swimming,
        ]);
    }

    public function contactUs()
    {
        return view('front.contactUs');
    }

    public function book()
    {
        return view('front.book');
    }

    public function register()
    {
        return view('front.details');
    }

    public function sendRegister()
    {
        return view('front.send');
    }
    public function sendMail(Request $request)
    {

        $email = $this->textInput($request->email);
        $name = $this->textInput($request->name);
        $message = "From: " . $email . "\n\r";
        $message .= $this->textInput($request->message);

        $headers = "From: cityvtel@gator4170.hostgator.com\r\n";
        $headers .= "Reply-To: cityvtel@gator4170.hostgator.com\n";
        $headers .= "CC: janagate.sa@gmail.com\r\n";
        $headers .= "BCC: Reservation@cityviewhotel.com.sa\r\n";


        $headers = "From: cityvtel@gator4170.hostgator.com\r\n";
        $headers .= "Reply-To: cityvtel@gator4170.hostgator.com\n";
        $headers .= "CC: janagate.sa@gmail.com\r\n";
        $headers .= "BCC: Reservation@cityviewhotel.com.sa\r\n";
        if (mail("reservation@cityviewhotel.com.sa", $name, $message, $headers)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function policy()
    {
        return view('front.policy');
    }

    public function terms()
    {
        return view('front.terms');
    }
    function textInput($data)
    {
        $data = trim($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        $data = str_replace(array('\n', '\r'), array(' ', ' '), $data);
        $data  = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
