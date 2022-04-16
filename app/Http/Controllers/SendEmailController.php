<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string'
        ]);

        Mail::to('safedeal2022@yandex.ru')->send(
            new OrderMail(
                $request->name,
                $request->phone
            )
        );

        return response(
            [
                'name' => $request->name,
                'phone' => $request->phone
            ],
        );
    }
}
