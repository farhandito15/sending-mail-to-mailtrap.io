<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Mail\EmailFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function kirim()
    {
        Mail::to('farditbilhar@gmail.com')->send(new Email());
        //return new Email();
    }

    public function attach()
    {
        Mail::to('farditbilhar@gmail.com')->send(new EmailFile());
    }
}
