<?php
namespace NexaMerchant\Webhooks\Http\Controllers\Admin;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(Request $request) {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "Demo";
        return view('Webhooks::Admin.Settings.index', compact("data"));
    }
}
