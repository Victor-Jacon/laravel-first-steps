<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user) {
        $user = User::find($user);

        $sendToView = [
            'user' => $user,
        ];

        return view('home', $sendToView);
    }
}
