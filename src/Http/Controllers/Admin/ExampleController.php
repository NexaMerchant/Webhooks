<?php

namespace NexaMerchant\Webhooks\Http\Controllers\Admin;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function demo(Request $request) {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "Demo";
        return view('Webhooks::Admin.demo', compact("data"));
    }
}
