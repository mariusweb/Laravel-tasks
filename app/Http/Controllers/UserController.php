<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userNames()
    {
        $users = DB::table('users')->get();
        foreach ($users as  $user) {
            echo $user->name . " " . $user->lastname . "<br>";
        }
    }
}
