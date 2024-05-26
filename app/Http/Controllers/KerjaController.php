<?php

namespace App\Http\Controllers;

use App\Models\Kerja;
use Illuminate\Http\Request;
use Illuminate\view\view;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        $users = DB::select('select * from users where active = ?', [1]);

        return view('user.index', ['users' => $users]);
    }
}
   