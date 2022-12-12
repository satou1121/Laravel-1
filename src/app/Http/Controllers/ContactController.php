<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\checkRequest;


class ContactController extends Controller
{
    public function index(Request $request) {
        return view("input");
    }

    public function check(checkRequest $request) {
        $param = [
            'name' => $request->name,
            'name_kana' => $request->name_kana,
            'mailaddress' => $request->mailaddress,
            'phonenumber' => $request->phonenumber,
            'inquiry' => $request->inquiry,
        ];
        return view("check",$param);
    }

    public function OK(checkRequest $request) {
        $param = [
            'name' => $request->name,
            'name_kana' => $request->name_kana,
            'mailaddress' => $request->mailaddress,
            'phonenumber' => $request->phonenumber,
            'inquiry' => $request->inquiry,
        ];
        \Mail::send(new \App\Mail\ContactThanks($param));
        return view("OK");
    }
}
