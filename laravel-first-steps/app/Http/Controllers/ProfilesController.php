<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user) {

        /* Must return the req.params
        dd($user); */

        $user = User::find($user);

        $sendToView = [
            'user' => $user,
        ];

        // dd($sendToView['0']->name);

        return view('home', $sendToView);
    }
}
