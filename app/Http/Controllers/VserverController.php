<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class VserverController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function overview(Request $request)
    {
        $email = Auth::user()->email;
        $vserver = DB::select('select * from vserver where user = :user', ['user' => $email]);

        return view('vserver.overview', ['vserver' => $vserver]);
    }
    public function view( $id)
    {
        return view('vserver.view');
    }
    public function stats( $uid)
    {
        return view('vserver.stats');
    }
}
