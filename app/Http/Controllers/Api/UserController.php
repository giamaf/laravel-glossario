<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {

        $users = User::select('id', 'name', 'image', 'email')->get();
        return response()->json($users);
    }
}
