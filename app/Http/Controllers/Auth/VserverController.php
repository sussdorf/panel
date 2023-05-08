<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VserverController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $email = Auth::email();
        $vserver = DB::select('select * from users where user = :user', ['user' => $email]);

        return view('user.index', ['vserver' => $vserver]);
    }
}
