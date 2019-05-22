<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessOrder;

class OrderController extends Controller
{
    public function order(Request $request)
    {

        $data = [
            'name'=>'Wesley',
            'email'=>'wesley@schoolofnet.com'
        ];

        ProcessOrder::dispatch($data)->onConnection('rabbitmq');
    }
}
